define(["text!./search.html","css!./search.css"], function(searchPage){
	return{
		init:function(){$(".search").html(searchPage).show().siblings("div").hide()}
	}
});