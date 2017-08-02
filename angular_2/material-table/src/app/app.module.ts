import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {MaterialImportModule} from './shared/material-import.module';
import { AppComponent } from './app.component';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    MaterialImportModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
