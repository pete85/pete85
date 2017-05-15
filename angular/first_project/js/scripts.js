(function(){
	var app = angular.module('store',['store-products']);


	// CONTROLLERS

	app.controller('StoreController', function(){
		this.products = gems;
	});





	// // DEPENDENCY INJECTION
	// app.controller('StoreController', ['$http', function($http){

	// 	var store = this;

	// 	store.products = [ ];

	// 	$http.get('/products.json').success(function(data){
	// 		store.products = data;
	// 	});
	// }]);





	app.controller('PanelController', function(){
		this.tab = 1;

		this.selectTab = function(setTab){
			this.tab = setTab;
		};

		this.isSelected = function(checkTab){
			return this.tab === checkTab;
		};
	});

	app.controller('ReviewController', function(){
		this.review = {};

		this.addReview = function(product) {
			product.reviews.push(this.review);
			this.review = {};
		}
	});


	var gems = [

	{
		name: 'Red',
		price: 2.95,
		canPurchase: true,
		images: [
			{
				full: 'http://placehold.it/400x200/A92222/FFFFFF',
				thumb: 'http://placehold.it/100x50/A92222/FFFFFF',			
			}
		],
		description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
		spec: 'EWFWEf ever gwWvw',
		reviews: [
			{
				stars: 5,
				body: "Great product",
				author: "test@test.com"
			}
		],
	},

	{
		name: 'Blue',
		price: 3,
		canPurchase: true,
		images: [
			{
				full: 'http://placehold.it/400x200/147291/FFFFFF',
				thumb: 'http://placehold.it/100x50/147291/FFFFFF',				
			}

		],
		description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
		spec: 'EWEf DFGERr gwWvw',
		reviews: [
			{
				stars: 5,
				body: "Great product",
				author: "test@test.com"
			}
		],
	},

	{
		name: 'Green',
		price: 4.95,
		canPurchase: true,
		images: [
			{
				full: 'http://placehold.it/400x200/50AD67/FFFFFF',
				thumb: 'http://placehold.it/100x50/50AD67/FFFFFF',				
			}

		],
		description: 'Suscipit tempus massa sed pharetra. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
		spec: 'AsfergEf ever gwWvw',
		reviews: [
			{
				stars: 5,
				body: "Great product",
				author: "test@test.com"
			}
		],
	}

	];


})();

(function(){

	var todoApp = angular.module('todoApp', [])

  	.controller('TodoListController', function() {
    
    var todoList = this;
    todoList.todos = [
      {text:'learn AngularJS', done:true},
      {text:'build an AngularJS app', done:false}];
 
    todoList.addTodo = function() {
      todoList.todos.push({text:todoList.todoText, done:false});
      todoList.todoText = '';
    };
 
    todoList.remaining = function() {
      var count = 0;
      angular.forEach(todoList.todos, function(todo) {
        count += todo.done ? 0 : 1;
      });
      return count;
    };
 
    todoList.archive = function() {
      var oldTodos = todoList.todos;
      todoList.todos = [];
      angular.forEach(oldTodos, function(todo) {
        if (!todo.done) todoList.todos.push(todo);
      });
    };
  });
})();







