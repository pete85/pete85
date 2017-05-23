import { Component } from '@angular/core';

@Component({
  selector: 'my-app',
  template: `	<h1>{{title}}</h1>

  				<ul>
  					<li *ngFor="let carPart of carParts">
						<h3>Product: {{carPart.name}}</h3>
						<p>Description: {{carPart.description}}</p>
						<p *ngIf="carPart.inStock > 0">In stock: {{carPart.inStock}}</p>
						<p *ngIf="carPart.inStock === 0">Out of stock</p>
					</li>
				</ul>`
})

export class AppComponent  { 
	title = 'Racing App';

	carParts = [
	
		{
			"id": 1,
			"name": "Battery",
			"description": "Bosch car battery",
			"inStock": 5
		},
		{
			"id": 2,
			"name": "Tyres set",
			"description": "Sports Tyres",
			"inStock": 3
		},
		{
			"id": 3,
			"name": "Turbo charger",
			"description": "Sports Turbo charger",
			"inStock": 0
		}

	];
}
