// import { CARPARTS } from './mocks';
// import { Injectable } from '@angular/core';

// @Injectable()

// export class RacingDataService {
// 	getCarParts() {
// 		return CARPARTS;
// 	}
// }




import { CARPARTS } from './mocks';
import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import { CarPart } from './car-parts';
import 'rxjs/add/operator/map';

@Injectable()

export class RacingDataService {
	
	constructor(private http: Http) {}

	getCarParts() {
		return this.http.get('app/car-parts.json')
			.map(response => <CarPart[]>response.json().data);
	}
}