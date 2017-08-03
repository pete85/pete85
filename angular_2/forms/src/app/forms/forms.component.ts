import {Component, OnInit} from '@angular/core';
import {Employee} from '../models/employee.model';
import {FormPosterService} from '../services/form-poster.service';
import {NgForm} from '@angular/forms';

@Component({
  selector: 'app-forms',
  templateUrl: './forms.component.html',
  styleUrls: ['./forms.component.css']
})
export class FormsComponent implements OnInit {

  languages = ['English', 'Polish', 'Spanish'];
  model = new Employee('', '', '', true, 'w1', 'default');
  hasLanguageError = false;

  constructor(private formPosterService: FormPosterService) {
  }

  ngOnInit() {
  }

  submitForm(form: NgForm) {
    // validate form
    this.validateLanguage(this.model.language);
    if (this.hasLanguageError)
      return;

    this.formPosterService.postEmployeeForm(this.model);
  }

  validateLanguage(value) {
    if (value === 'default')
      this.hasLanguageError = true;
    else
      this.hasLanguageError = false;
    console.log(this.hasLanguageError);
  }

}
