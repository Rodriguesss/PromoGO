import { BrowserModule } from '@angular/platform-browser';
import { ErrorHandler, NgModule } from '@angular/core';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';

import { MyApp } from './app.component';
import { InicioPage } from '../pages/inicio/inicio';
import { ComerciosPage } from '../pages/comercios/comercios';
import { SearchPage } from '../pages/search/search';


import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';
import { CabecalhoComponent } from '../components/cabecalho/cabecalho';


@NgModule({
  declarations: [
    MyApp,
    InicioPage,
    ComerciosPage,
    SearchPage,
    CabecalhoComponent,



  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp),
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    InicioPage,
    ComerciosPage,
    SearchPage,

  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}
