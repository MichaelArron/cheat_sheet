<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/splash/splash-icon.png">
<link rel="apple-touch-startup-image" href="../images/splash/splash-screen.png"             media="screen and (max-device-width: 320px)" />  
<link rel="apple-touch-startup-image" href="../images/splash/splash-screen_402x.png"        media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<link rel="apple-touch-startup-image" sizes="640x1096" href="../images/splash/splash-screen_403x.png" />
<link rel="apple-touch-startup-image" sizes="1024x748" href="../images/splash/splash-screen-ipad-landscape" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)" />
<link rel="apple-touch-startup-image" sizes="768x1004" href="../images/splash/splash-screen-ipad-portrait.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)" />
<link rel="apple-touch-startup-image" sizes="1536x2008" href="../images/splash/splash-screen-ipad-portrait-retina.png"   media="(device-width: 768px)   and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"/>
<link rel="apple-touch-startup-image" sizes="1496x2048" href="../images/splash/splash-screen-ipad-landscape-retina.png"   media="(device-width: 768px)  and (orientation: landscape)    and (-webkit-device-pixel-ratio: 2)"/>

<title>程序员小抄</title>

<link href="../styles/style.css"            rel="stylesheet" type="text/css">
<link href="../styles/framework.css"        rel="stylesheet" type="text/css">
<link href="../styles/owl.carousel.css"      rel="stylesheet" type="text/css">
<link href="../styles/owl.theme.css"        rel="stylesheet" type="text/css">
<link href="../styles/swipebox.css"      rel="stylesheet" type="text/css">
<link href="../styles/colorbox.css"      rel="stylesheet" type="text/css">

<script type="text/javascript" src="../scripts/jquery.js"></script>
<script type="text/javascript">
$(function(){
    $(".clipboard").click(function(){
        var text = $(this).html();
        window.clipboardData.setData('text', text);
    })
})
</script>
<script type="text/javascript" src="../scripts/jqueryui.js"></script>
<script type="text/javascript" src="../scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.swipebox.js"></script>
<script type="text/javascript" src="../scripts/colorbox.js"></script>
<script type="text/javascript" src="../scripts/snap.js"></script>
<script type="text/javascript" src="../scripts/contact.js"></script>
<script type="text/javascript" src="../scripts/custom.js"></script>
<script type="text/javascript" src="../scripts/framework.js"></script>
<script type="text/javascript" src="../scripts/framework.launcher.js"></script>


</head>
<body>

<div id="preloader">
    <div id="status">
        <p class="center-text">
            Loading the content...
            <em>Loading depends on your connection speed!</em>
        </p>
    </div>
</div>

<div class="top-deco"></div>

<div class="content">
    <div class="header">
        <a href="#" class="homepage-logo">
            <h1 style="font-size:28px;height:60px;">️程序员小抄</h1>
        </a>
        <a href="../index.html" class="go-home">HOME</a>
        <a href="#" class="go-menu">MENU</a>
        <a href="#" class="go-back">CLOSE</a>
    </div>
    <div class="decoration"></div>
    
    <div class="navigation">
        <div class="corner-deco"></div>
        <div class="navigation-wrapper">
            <div class="navigation-item">
                <a href="../html_sheet/1.html" class="home-icon">HTML</a>
                <em class="inactive-menu"></em>
            </div>
            <div class="navigation-item">
                <a href="../css_sheet/1.html" class="home-icon">CSS</a>
                <em class="inactive-menu"></em>
            </div>
            <div class="navigation-item">
                <a href="../javascipt_sheet/1.html" class="home-icon">Javascript</a>
                <em class="inactive-menu"></em>
            </div>
            <div class="navigation-item">
                <a href="../php_sheet/1.html" class="home-icon">PHP</a>
                <em class="inactive-menu"></em>
            </div>
            <div class="navigation-item">
                <a href="../mysql_sheet/1.html" class="home-icon">MySQL</a>
                <em class="inactive-menu"></em>
            </div>
            <div class="navigation-item">
                <a href="../others_sheet/1.html" class="home-icon">Others</a>
                <em class="inactive-menu"></em>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container no-bottom">
        <h3>HTML5音频</h3>
        <p>
        
        </p>
    </div>
    
    <div class="decoration"></div>

    <div class="container no-bottom">
        <h4>介绍</h4>
    </div>
    
    <div class="container no-bottom">              
        <p>
<pre>
         <!--content-->
canvas 元素用于在网页上绘制图形。
什么是 Canvas？
HTML5 的 canvas 元素使用 JavaScript 在网页上绘制图像。
画布是一个矩形区域，您可以控制其每一像素。
canvas 拥有多种绘制路径、矩形、圆形、字符以及添加图像的方法。
创建 Canvas 元素
向 HTML5 页面添加 canvas 元素。
规定元素的 id、宽度和高度：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('
    <canvas id="myCanvas" width="200" height="100"></canvas>');
?>
</p>
</pre>

通过 JavaScript 来绘制
canvas 元素本身是没有绘图能力的。所有的绘制工作必须在 JavaScript 内部完成：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('
    <script type="text/javascript">
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
cxt.fillStyle="#FF0000";
cxt.fillRect(0,0,150,75);
</script>');
?>
</p>
</pre>

JavaScript 使用 id 来寻找 canvas 元素：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('var c=document.getElementById("myCanvas");');
?>
</p>
</pre>

然后，创建 context 对象：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('var cxt=c.getContext("2d"); ');
?>
</p>
</pre>

getContext("2d") 对象是内建的 HTML5 对象，拥有多种绘制路径、矩形、圆形、字符以及添加图像的方法。
下面的两行代码绘制一个红色的矩形：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('cxt.fillStyle="#FF0000";
cxt.fillRect(0,0,150,75); ');
?>
</p>
</pre>

fillStyle 方法将其染成红色，fillRect 方法规定了形状、位置和尺寸。
理解坐标
上面的 fillRect 方法拥有参数 (0,0,150,75)。
意思是：在画布上绘制 150x75 的矩形，从左上角开始 (0,0)。
如下图所示，画布的 X 和 Y 坐标用于在画布上对绘画进行定位。
Canvas 实例：理解坐标
实例：把鼠标悬停在矩形上可以看到坐标
更多 Canvas 实例
下面的在 canvas 元素上进行绘画的更多实例：
实例 - 线条
通过指定从何处开始，在何处结束，来绘制一条线：
Canvas 实例：线条
JavaScript 代码：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('<script type="text/javascript">
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
cxt.moveTo(10,10);
cxt.lineTo(150,50);
cxt.lineTo(10,50);
cxt.stroke();

</script>');
?>
</p>
</pre>

canvas 元素：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('<canvas id="myCanvas" width="200" height="100" style="border:1px solid #c3c3c3;">
Your browser does not support the canvas element.
</canvas>');
?>
   </p>
</pre>

亲自试一试
实例 - 圆形
通过规定尺寸、颜色和位置，来绘制一个圆：
Canvas 实例：圆形
JavaScript 代码：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('<script type="text/javascript">

var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
cxt.fillStyle="#FF0000";
cxt.beginPath();
cxt.arc(70,18,15,0,Math.PI*2,true);
cxt.closePath();
cxt.fill();

</script>');
?>
  </p>
</pre>

canvas 元素：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('<canvas id="myCanvas" width="200" height="100" style="border:1px solid #c3c3c3;">
Your browser does not support the canvas element.
</canvas>');
?>
   </p>
</pre>

亲自试一试
实例 - 渐变
使用您指定的颜色来绘制渐变背景：
Canvas 实例：渐变
JavaScript 代码：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('<script type="text/javascript">
var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
var grd=cxt.createLinearGradient(0,0,175,50);
grd.addColorStop(0,"#FF0000");
grd.addColorStop(1,"#00FF00");
cxt.fillStyle=grd;
cxt.fillRect(0,0,175,50);

</script>');
?>
   </p>
</pre>

canvas 元素：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('<canvas id="myCanvas" width="200" height="100" style="border:1px solid #c3c3c3;">
Your browser does not support the canvas element.
</canvas>');
?>
   </p>
</pre>

亲自试一试
实例 - 图像
把一幅图像放置到画布上：
Canvas 实例：图像
JavaScript 代码：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('<script type="text/javascript">

var c=document.getElementById("myCanvas");
var cxt=c.getContext("2d");
var img=new Image()
img.src="flower.png"
cxt.drawImage(img,0,0);

</script>');
?>
</p>
</pre>

canvas 元素：
<pre>
    <p style="border:1px solid black;background-color:#ccc;">
<?php
   echo htmlspecialchars('<canvas id="myCanvas" width="200" height="100" style="border:1px solid #c3c3c3;">
Your browser does not support the canvas element.
</canvas>');
?>
 </p>
</pre>

亲自试一试
</pre>
         <!--content-->
        </p>
        
       
    </div>

    <div class="decoration"></div>

   <div><span><a href="./2.php">上一条</a></span><span>&nbsp;&nbsp;<a href="./1.php">下一条</a></span></div>

 
    
</div>

<div class="bottom-deco"></div>



</body>
</html>

























