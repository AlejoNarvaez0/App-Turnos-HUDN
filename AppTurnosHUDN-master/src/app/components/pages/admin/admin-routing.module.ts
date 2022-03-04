import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AdminComponent } from './admin.component';


const routes: Routes = [
  { path: '', component: AdminComponent, 

  children: [
    {path: 'list-personal',
     loadChildren:()=>import('src/app/components/list-personal/list-personal.component')
     .then(m=>m.ListPersonalComponent)}
]
  

},
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AdminRoutingModule { }
