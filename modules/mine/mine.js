define(["text!./mine.html","css!./mine.css"], function(minePage){
	return{
		init:function(){$(".mine").html(minePage).show().siblings("div").hide()}
			
	}
});