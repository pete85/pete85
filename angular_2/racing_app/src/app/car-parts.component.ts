// import { Component } from '@angular/core';
// import { CarPart } from './car-parts';
// import { CARPARTS } from './mocks';
// import { RacingDataService } from './racing-data.service';

// @Component({
//   selector: 'car-parts',
//   templateUrl: 'app/car-parts.component.html',
//   styleUrls: ['app/car-parts.component.css']
// })

// export class CarPartsComponent {
// 	carParts: CarPart[];

// 	constructor(private racingDataService: RacingDataService) { }

// 	ngOnInit() {
// 		this.carParts = this.racingDataService.getCarParts();
// 	}

// 	// or

// 	// ngOnInit() {
// 	// 	this.carParts = CARPARTS;
// 	// }

// 	totalCarParts(){
// 		let sum = 0;

// 		for (let carPart of this.carParts) {
// 			sum += carPart.inStock;
// 		}

// 		return sum;
// 	}

// 	upQuantity(carPart) {
// 		if (carPart.quantity < carPart.inStock) carPart.quantity++;
// 	}

// 	downQuantity(carPart) {
// 		if (carPart.quantity != 0) carPart.quantity--;
// 	}
// }







import { Component } from '@angular/core';
import { CarPart } from './car-parts';
import { CARPARTS } from './mocks';
import { RacingDataService } from './racing-data.service';

@Component({
  selector: 'car-parts',
  templateUrl: 'app/car-parts.component.html',
  styleUrls: ['app/car-parts.component.css']
})

export class CarPartsComponent {
	carParts: CarPart[];

	constructor(private racingDataService: RacingDataService) { }

	ngOnInit() {
		this.racingDataService.getCarParts()
			.subscribe(carParts => this.carParts = carParts);
	}

	// or

	// ngOnInit() {
	// 	this.carParts = CARPARTS;
	// }

	totalCarParts(){
		let sum = 0;

		if (Array.isArray(this.carParts)) {

			for (let carPart of this.carParts) {
				sum += carPart.inStock;
			}

		}

		return sum;
	}

	upQuantity(carPart) {
		if (carPart.quantity < carPart.inStock) carPart.quantity++;
	}

	downQuantity(carPart) {
		if (carPart.quantity != 0) carPart.quantity--;
	}
}