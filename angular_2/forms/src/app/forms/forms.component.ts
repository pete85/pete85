import {Component, OnInit} from '@angular/core';
import {Employee} from '../models/employee.model';
import {FormPosterService} from '../services/form-poster.service';

@Component({
  selector: 'app-forms',
  templateUrl: './forms.component.html',
  styleUrls: ['./forms.component.css']
})
export class FormsComponent implements OnInit {

  languages = ['English', 'Polish', 'Spanish'];
  model = new Employee('John', 'Smith', true, 'w1', 'English');

  constructor(private formPosterService: FormPosterService) {
  }

  ngOnInit() {
  }
}
