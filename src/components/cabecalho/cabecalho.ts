import { Component, Input } from '@angular/core';

@Component({
  selector: 'cabecalho',
  templateUrl: 'cabecalho.html'
})
export class CabecalhoComponent {

  @Input() title: string;

  constructor() {

  }

}
