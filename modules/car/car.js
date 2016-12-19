define(["text!./car.html","css!./car.css"], function(carPage){
	return{
		init:function(){$(".car").html(carPage).show().siblings("div").hide()}
	}
});