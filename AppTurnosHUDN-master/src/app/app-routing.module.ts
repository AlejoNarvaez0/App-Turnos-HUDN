import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CalendarComponent } from './components/calendar/calendar.component';
import { CreatePersonalComponent } from './components/create-personal/create-personal.component';
import { DashboardComponent } from './components/dashboard/dashboard.component';
import { ListPersonalComponent } from './components/list-personal/list-personal.component';


const routes: Routes = [
  {path: '', redirectTo: 'dashboard', pathMatch: 'full'},
  {path: 'usuario', loadChildren: () => import('./components/usuario/usuario.module')
                                  .then(m => m.UsuarioModule)},
  {path: 'dashboard', component: DashboardComponent,
  loadChildren: () => import('./components/dashboard/dashboard.module')
                                  .then(m => m.DashboardModule)},                                
  {path: 'create-personal', component: CreatePersonalComponent},
  {path: 'editEmpleado/:id', component: CreatePersonalComponent},
  {path: 'list-personal', component: ListPersonalComponent },
  {path: 'calendar', component: CalendarComponent },
  { path: 'manual', loadChildren: () => import('./components/pages/manual/manual.module').then(m => m.ManualModule) },
  {path: 'admin', loadChildren:() =>import('./components/pages/admin/admin.module').then(m=>m.AdminModule)},
  {path: '**', redirectTo: 'dashboard', pathMatch: 'full'}
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
