import { Component } from '@angular/core';

@Component({
  selector: 'my-app',
  template: `	<div class="container">
  					<h1>{{title}}</h1>
  				</div>

  				<car-parts></car-parts>`
})

export class AppComponent  { 
	title = 'Racing App';
}
