import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-forms',
  templateUrl: './forms.component.html',
  styleUrls: ['./forms.component.css']
})
export class FormsComponent implements OnInit {

  languages = ['English', 'Polish', 'Spanish'];

  constructor() { }

  ngOnInit() {
  }

}
