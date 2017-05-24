import { Component } from '@angular/core';

@Component({
  selector: 'my-app',
  template: `	<h1>{{title}}</h1>

  				<p>There are {{totalCarParts()}} total parts in stock.</p>

  				<ul>
  					<li *ngFor="let carPart of carParts">
						<h3>Product: {{carPart.name | uppercase}}</h3>
						<p>Description: {{carPart.description}}</p>
						<p>Price: {{carPart.price | currency:'GBP':true}}
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
			"inStock": 5,
			"price": 79.99
		},
		{
			"id": 2,
			"name": "Tyres set",
			"description": "Sports Tyres",
			"inStock": 3,
			"price": 289.99
		},
		{
			"id": 3,
			"name": "Turbo charger",
			"description": "Sports Turbo charger",
			"inStock": 0,
			"price": 649.99
		}

	];

	totalCarParts(){
		let sum = 0;

		for (let carPart of this.carParts) {
			sum += carPart.inStock;
		}

		return sum;
	}
}
