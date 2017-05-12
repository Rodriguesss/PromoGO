import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { DestaquesPage } from './destaques';

@NgModule({
  declarations: [
    DestaquesPage,
  ],
  imports: [
    IonicPageModule.forChild(DestaquesPage),
  ],
  exports: [
    DestaquesPage
  ]
})
export class DestaquesPageModule {}
