define(["text!./home.html","css!./location.css"], function(locationPage){
	return{
		init:function(){$(".location").html(locationPage).show().siblings("div").hide()}
	}
});