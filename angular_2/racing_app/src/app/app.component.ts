import { Component } from '@angular/core';

@Component({
  selector: 'my-app',
  template: `	<div class="container">
  					<div class="text-center headerBlock">
						<img src="{{imgHeader}}" alt="Header image">
					</div>
  				</div>

  				<car-parts></car-parts>`
})

export class AppComponent  { 
	title = 'Racing Parts';
	imgHeader = 'images/header.png'; 
}
