import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule } from '@angular/forms';
import { RacingDataService } from './racing-data.service';

import { AppComponent }  from './app.component';
import { CarPartsComponent } from './car-parts.component';

@NgModule({
  imports:      [ BrowserModule, FormsModule ],
  declarations: [ AppComponent, CarPartsComponent ],
  bootstrap:    [ AppComponent ],
  providers: 	[ RacingDataService ]
})
export class AppModule { }
