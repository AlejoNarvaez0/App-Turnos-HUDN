import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ManualRoutingModule } from './manual-routing.module';
import { ManualComponent } from './manual.component';
import { MaterialModule } from 'src/app/material.module';



@NgModule({
  declarations: [
    ManualComponent
  ],
  imports: [
    CommonModule,
    ManualRoutingModule,
    MaterialModule
    
    
  ]
})
export class ManualModule { }
