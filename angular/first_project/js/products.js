(function(){

	var app = angular.module('store-products', []);

	app.directive('productTitle', function(){
		return {
			restrict: 'E', // Element
			templateUrl: 'product-title.html'
		};
	});


	app.directive('productPanels', function(){
		return {
			restrict: 'E', // Element
			templateUrl: 'product-panels.html',
			controller: function(){

			},
			controllerAs: 'panels'
		};
	});
})();