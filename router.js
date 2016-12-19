define(["backbone"], function(Backbone){
	var Router = Backbone.Router.extend({
		routes:{
			"":"home",
			home: "home",
			market: "market",
			car: "car",
			mine: "mine"
		},
		home: function(){
			require(["modules/home/home.js"],function(home){
				home.init();
			});
		},
		market: function(){
			require(["modules/market/market.js"],function(market){
				market.init();
			});
		},
		car: function(){
			require(["modules/car/car.js"],function(car){
				car.init();
			});
		},
		mine: function(){
			require(["modules/mine/mine.js"],function(mine){
				mine.init();
			});
		},
	});
	return new Router();
});