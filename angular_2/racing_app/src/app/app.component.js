"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var core_1 = require("@angular/core");
var AppComponent = (function () {
    function AppComponent() {
        this.title = 'Racing App';
        this.carParts = [
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
    return AppComponent;
}());
AppComponent = __decorate([
    core_1.Component({
        selector: 'my-app',
        template: "\t<h1>{{title}}</h1>\n\n  \t\t\t\t<ul>\n  \t\t\t\t\t<li *ngFor=\"let carPart of carParts\">\n\t\t\t\t\t\t<h3>Product: {{carPart.name}}</h3>\n\t\t\t\t\t\t<p>Description: {{carPart.description}}</p>\n\t\t\t\t\t\t<p *ngIf=\"carPart.inStock > 0\">In stock: {{carPart.inStock}}</p>\n\t\t\t\t\t\t<p *ngIf=\"carPart.inStock === 0\">Out of stock</p>\n\t\t\t\t\t</li>\n\t\t\t\t</ul>"
    })
], AppComponent);
exports.AppComponent = AppComponent;
//# sourceMappingURL=app.component.js.map