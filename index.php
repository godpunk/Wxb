<?php
require_once "jssdk.php";
// appId  和 秘钥
$jssdk = new JSSDK("wx81583fcf21bd59a8", "91e276687746096a877c9de3c02e46d6");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
<head>
	<title>爱鲜蜂</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<script type="text/javascript" src="js/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="js/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="js/baiduTemplate.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/jquery.lazyload.js"></script>
	<script data-main = "app.js" type="text/javascript" src = "js/require.js"></script>
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>   
    	<div class="header">
    		<div class="dizhi">
    			<a href="#" class="address">
    				<span>西三旗 物美</span>
    				<span class="tra"></span>
    			</a>
    		</div>
    		<img src="img/searchWord.jpg">
    	</div>
        <div class="mainContent">
            	<div class="space"></div>
            	<div class="clearfixed"></div>
                <div class="home"></div>
                <div class="market"></div>              
                <div class="car"></div>       
                <div class="mine"></div>
        </div>        
    <div class="footer">           
            <figure>
                <a href="#home"><img src="img/f1.jpg"></a>
                <figcaption>
                    <p>首页</p>
                </figcaption>
            </figure>              
            <figure>
                <a href="#market"><img src="img/f2.jpg"></a>
                <figcaption>
                    <p>闪送超市</p>
                </figcaption>
            </figure>                
            <figure >
                 <a href="#car"><img src="img/f3.jpg"></a>
                <figcaption>
                    <p>购物车</p>
                    <span id="count">0</span>
                </figcaption>
            </figure>               
            <figure>
                <a href="#mine"><img src="img/f4.jpg"></a>
                <figcaption>
                    <p>我的</p>
                </figcaption>
            </figure>               
    </div>
        
</body>
<script type="text/javascript">
   
        (function (doc, win) {
            var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
            var clientWidth = docEl.clientWidth;
            if (!clientWidth) return;
            docEl.style.fontSize = 100 * (clientWidth / 414) + 'px';
            };
            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false);
        })(document, window);
        
        var count = 0;
        $(".add").on("click",function(){
        $(this).css({
            "border":"1px solid #ff3a03"
        });
        count++;
        $("#count").text(count);
        // $("#count").text(parseInt($("#count").text())+1);
        var cart = $("#cart");
        var imgObj = $(this).parents("figure").find("img").eq(0);
        if(imgObj){          
            var imgObjclone = imgObj.clone().appendTo("body").offset({
                "top":imgObj.offset().top,
                "left":imgObj.offset().left
            }).css({
                "opacity":"0.5",
                "borderRadius":"50%",
                "height":"1.14rem",
                "width":"1.14rem",
                "z-index":"100",
            }).animate({
                "top":cart.offset().top,
                "left":cart.offset().left,
                "width":0,
                "height":0,
            },2000,"linear");
        }
 });
  
  var mySwiper = new Swiper ('.swiper-container', {
    autoplay: 2000,
    loop: true,
    pagination: '.swiper-pagination',
  });

wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
     jsApiList: [
        'checkJsApi',
        'onMenuShareWeibo',
        'onMenuShareQZone',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onVoiceRecordEnd',
        'playVoice',
        'onVoicePlayEnd',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
      ]
  });
    </script>
</script>
</html>