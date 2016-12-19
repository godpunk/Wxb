$(function(){
	$(".time").on("click",function(){
		$(this).find("#select").show();
	});
	//点击某个商品，添加选中效果
	var flag1 = true,
		flag2 = true;
	$(".main .goods_datail #ifselect").on("click",function(){
		if(flag1 == true){
			$(this).attr({"src":"images/selected.jpg"});
			flag1 = false;
		}else if(flag1 == false){
			$(this).attr({"src":"images/not_select.jpg"});
			flag1 = true;
		}

	});
	//点击+或—，对应数目改变
	$(".goods_datail").on("click","img",function(){
		var imgId = $(this).attr("id"),
			//找到当前点击的商品行
			curTr = $(this).parents("tr"),
			//商品数量随点击加减而改变，当数量为1时，点击减号，移除tr，
			//当点击加号时，数量，总价随之改变
			good_num = $(this).siblings("i"),
			//商品价格：截取字符串，主要数字
			good_price = $(this).parents("p").children("i").html().substr(1),
			//总价：显示时需要加上￥符号
			total_price = $(".account_div #total_price"),
			//商品总数目，footer部分显示
			total_num = $(".footer #count");
		switch(imgId){
			case "jia":
				//商品数量
				good_num.html(parseInt(good_num.html())+1);
				//定义一个变量，接收一下总价格，原总价去掉￥符号，加上所点击的商品的单价
				var price = parseFloat(total_price.html().substr(1))+parseFloat(good_price);
				//保留价格的两位小数
				price = price.toFixed(2);
				//总价要加上￥符号
				total_price.html("￥"+price);
				total_num.html(parseInt(total_num.html())+1);
				break;
			case "jian":
				if(good_num.html() == 1){
					//如果点击之前数量是1，点击减号之后，移除此商品
					curTr.remove();
					//footer部分总数量减一
					total_num.html(total_num.html()-1);
				}else{
					//商品对应数量减一
					good_num.html(good_num.html()-1);
					//定义一个变量，接收一下总价格，原总价去掉￥符号，加上所点击的商品的单价
					var price1 = parseFloat(total_price.html().substr(1))-parseFloat(good_price);
					//保留价格的两位小数
					price1 = price1.toFixed(2);
					//总价要加上￥符号
					total_price.html("￥"+price1);
					total_num.html(total_num.html()-1);
				}
				break;
			default:
				break;

		}
	});
	//全选
	$(".main #all_select").on("click",function(){
		if(flag2 == true){
			$(this).find("img").attr({"src":"images/selected.jpg"});
			$(".main .goods_datail #ifselect").attr({"src":"images/selected.jpg"});
			flag1 = false;
			flag2 = false;
		}else if(flag2 == false){
			$(this).find("img").attr({"src":"images/not_select.jpg"});
			$(".main .goods_datail #ifselect").attr({"src":"images/not_select.jpg"});
			flag1 = true;
			flag2 = true;
		}
	});
});