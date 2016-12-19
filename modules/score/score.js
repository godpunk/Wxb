define(["text!./score.html","css!./score.css"], function(scorePage){
	return{
		init:function(){$(".score").html(scorePage).show().siblings("div").hide()}
	}
});