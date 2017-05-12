import { NgModule } from '@angular/core';
import { IonicPageModule } from 'ionic-angular';
import { ComerciosPage } from './comercios';

@NgModule({
  declarations: [
    ComerciosPage,
  ],
  imports: [
    IonicPageModule.forChild(ComerciosPage),
  ],
  exports: [
    ComerciosPage
  ]
})
export class ComerciosPageModule {}
