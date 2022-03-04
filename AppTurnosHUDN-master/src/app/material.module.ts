import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {MatCardModule} from '@angular/material/card';
import {MatListModule} from '@angular/material/list';
import {MatSidenavModule} from '@angular/material/sidenav';
import {MatIconModule} from '@angular/material/icon';
import {MatMenuModule} from '@angular/material/menu';
import {MatButtonModule} from '@angular/material/button';
import {MatToolbarModule} from '@angular/material/toolbar';


const myModule = [MatCardModule,MatListModule,MatSidenavModule,
                  MatIconModule,MatMenuModule,MatButtonModule,
                  MatToolbarModule]


@NgModule({
  declarations: [
    
  ],
  imports: [    CommonModule, myModule  ],
  exports: [myModule]
})
export class MaterialModule { }
