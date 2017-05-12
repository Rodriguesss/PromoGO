import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { CabecalhoComponent } from './cabecalho';

@NgModule({
  declarations: [
    CabecalhoComponent,
  ],
  imports: [
    IonicPageModule.forChild(CabecalhoComponent),
  ],
  exports: [
    CabecalhoComponent
  ]
})
export class CabecalhoComponentModule {}
