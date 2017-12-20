import {Component, OnInit, DoCheck} from '@angular/core';
import {Employee} from '../models/employee.model';
import {FormPosterService} from '../services/form-poster.service';
import {NgForm} from '@angular/forms';
import {Observable} from 'rxjs/Observable';

@Component({
  selector: 'app-forms',
  templateUrl: './forms.component.html',
  styleUrls: ['./forms.component.css']
})
export class FormsComponent implements OnInit, DoCheck {

  selectedValue: string;
  model = new Employee('', '', '', true, 'w1', 'default');
  hasLanguageError = false;
  submitted: boolean;

  payments = [
    'W1',
    'W2',
    'T1',
    'T2',
  ];

  paymentType: string;

  // languages = [];

  languages = ['English', 'Polish', 'Spanish'];

  constructor(private formPosterService: FormPosterService) {
    // this.formPosterService.getLanguages()
    //   .subscribe(
    //     data => this.languages = data.languages,
    //     err => console.log('get error: ', err)
    //   );
  }

  ngOnInit() {
    this.submitted = false;
    this.hasLanguageError = true;
  }

  ngDoCheck() {
    console.log('Submitted: ' + this.submitted);
  }

  // submitForm(form: NgForm) {
  //   this.submitted = true;
  //   // validate form
  //   this.validateLanguage(this.model.language);
  //   if (this.hasLanguageError)
  //     return;
  //
  //   // Call model
  //   this.formPosterService.postEmployeeForm(this.model)
  //     .subscribe(
  //       data => console.log('Success: ', data),
  //       err => console.log('Error: ', err)
  //     )
  //
  // }

  submitForm(form: NgForm) {
    this.submitted = true;
    console.log('has Error ' + this.hasLanguageError);
  }

  backToForm(form: NgForm) {
    this.submitted = false;
  }

  validateLanguage(value) {
    if (value === 'default')
      this.hasLanguageError = true;
    else
      this.hasLanguageError = false;
    // console.log(this.hasLanguageError);
  }

}
