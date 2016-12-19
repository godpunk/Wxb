define(["text!./home.html","css!./home.css"], function(homePage){
	return{
		init:function(){$(".home").html(homePage).show().siblings("div").hide()}
	}
});