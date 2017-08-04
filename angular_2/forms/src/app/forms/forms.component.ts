import {Component, OnInit} from '@angular/core';
import {Employee} from '../models/employee.model';
import {FormPosterService} from '../services/form-poster.service';
import {NgForm} from '@angular/forms';
import {Observable} from 'rxjs/Observable';

@Component({
  selector: 'app-forms',
  templateUrl: './forms.component.html',
  styleUrls: ['./forms.component.css']
})
export class FormsComponent implements OnInit {

  languages = [];
  model = new Employee('', '', '', true, 'w1', 'default');
  hasLanguageError = false;

  paymentType: string;

  payments = [
    'W1',
    'W2',
    'T1',
    'T2',
  ];

  constructor(private formPosterService: FormPosterService) {
    this.formPosterService.getLanguages()
      .subscribe(
        data => this.languages = data.languages,
        err => console.log('get error: ', err)
      );
  }

  ngOnInit() {
  }

  submitForm(form: NgForm) {
    // validate form
    this.validateLanguage(this.model.language);
    if (this.hasLanguageError)
      return;

    // Call model
    this.formPosterService.postEmployeeForm(this.model)
      .subscribe(
        data => console.log('Success: ', data),
        err => console.log('Error: ', err)
      )

  }

  validateLanguage(value) {
    if (value === 'default')
      this.hasLanguageError = true;
    else
      this.hasLanguageError = false;
    // console.log(this.hasLanguageError);
  }

}
