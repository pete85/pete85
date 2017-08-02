import {Component, OnInit} from '@angular/core';
import {Employee} from '../models/employee.model';

@Component({
  selector: 'app-forms',
  templateUrl: './forms.component.html',
  styleUrls: ['./forms.component.css']
})
export class FormsComponent implements OnInit {

  languages = ['English', 'Polish', 'Spanish'];
  model = new Employee('John', 'Smith', true, 'w1', 'English');

  constructor() {
  }

  ngOnInit() {
  }
}
