<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/splash/splash-icon.png">
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png"            media="screen and (max-device-width: 320px)" />  
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png"         media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<link rel="apple-touch-startup-image" sizes="640x1096" href="images/splash/splash-screen@3x.png" />
<link rel="apple-touch-startup-image" sizes="1024x748" href="images/splash/splash-screen-ipad-landscape" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : landscape)" />
<link rel="apple-touch-startup-image" sizes="768x1004" href="images/splash/splash-screen-ipad-portrait.png" media="screen and (min-device-width : 481px) and (max-device-width : 1024px) and (orientation : portrait)" />
<link rel="apple-touch-startup-image" sizes="1536x2008" href="images/splash/splash-screen-ipad-portrait-retina.png"   media="(device-width: 768px)  and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"/>
<link rel="apple-touch-startup-image" sizes="1496x2048" href="images/splash/splash-screen-ipad-landscape-retina.png"   media="(device-width: 768px) and (orientation: landscape)    and (-webkit-device-pixel-ratio: 2)"/>

<title>程序员小抄</title>

<link href="styles/style.css"            rel="stylesheet" type="text/css">
<link href="styles/framework.css"        rel="stylesheet" type="text/css">
<link href="styles/owl.theme.css"        rel="stylesheet" type="text/css">
<link href="styles/swipebox.css"         rel="stylesheet" type="text/css">
<link href="styles/font-awesome.css"     rel="stylesheet" type="text/css">
<link href="styles/animate.css"          rel="stylesheet" type="text/css">
<style>
p{
    word-break:break-all;word-wrap:break-word;
}
.red{
    color:red;
}
</style>

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jqueryui.js"></script>
<script type="text/javascript" src="scripts/framework.plugins.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

</head>
<body> 
<?php
    $list = array();
    // //start
    // $arr = array();
    // $arr[0] = '';
    // $arr[1] = '';
    // $arr[2] = '';
    // $arr[3] = '';
    // $arr[4] = '';
    // $list[] = $arr;
    // //end

    //start
    $arr = array();
    $arr[0] = '    <!--...-->    注释标签';
    $arr[1] = '    <!--...-->    注释标签用来在源文档中插入注释。注释不会在浏览器中显示。';
    $arr[2] = '';
    $arr[3] = '    <!--这是一个注释。 注释不会在浏览器中显示-->    
<br />
    <p>这是段落标签</p>    ';
    $arr[4] = '浏览器支持：IE Firefox Chrome Safari Opera <br />
您可使用注释对您的代码进行解释，这样做有助于您在以后的时间对代码的编辑。特别是代码量很大的情况下很有用。<br />
您也可以在注释内容存储针对程序所定制的信息。在这种情况下，这些信息对用户是不可见的，但是对程序来说是可用的。一个好的习惯是把注释或样式元素放入注释文本中，这样就可避免不支持脚本或样式的老浏览器把它们显示为纯文本。<br />
    <!--...-->    
注释标签不支持任何标准属性。<br />
    <!--...-->    
注释标签不支持任何事件属性。';
    $list[] = $arr;
    //end

    //start
    $arr = array();
    $arr[0] = '    <a>    标签';
    $arr[1] = '    <a>     标签定义超链接，用于从一张页面链接到另一张页面。';
    $arr[2] = '<table><tr><th>属性</th><th>值</th><th>描述</th></tr>
<tr><td>charset</td><td>char_encoding</td><td>HTML5 中不支持。规定被链接文档的字符集。</td></tr>
<tr><td>coords</td><td>coordinates</td><td>HTML5 中不支持。规定链接的坐标。</td></tr>
<tr><td>download</td><td>filename</td><td>HTML5 中的新属性。规定被下载的超链接目标。</td></tr>
<tr><td>href</td><td>URL</td><td>规定链接指向的页面的 URL。</td></tr>
<tr><td>hreflang</td><td>language_code</td><td>规定被链接文档的语言。</td></tr>
<tr><td>media</td><td>media_query</td><td>HTML5 中的新属性。规定被链接文档是为何种媒介/设备优化的。</td></tr>
<tr><td>name</td><td>section_name</td><td>HTML5 中不支持。规定锚的名称。</td></tr>
<tr><td>rel</td><td>text</td><td>规定当前文档与被链接文档之间的关系。</td></tr>
<tr><td>rev</td><td>text</td><td>HTML5 中不支持。规定被链接文档与当前文档之间的关系。</td></tr>
<tr><td>shape</td><td>default<br />rect<br />circle<br />poly</td><td>HTML5 中不支持。规定链接的形状。</td></tr>
<tr><td>target</td><td>_blank<br />_parent<br />_self<br />_top<br />framename</td><td>规定在何处打开链接文档。</td></tr>
<tr><td>type</td><td>MIME type</td><td>HTML5 中的新属性。规定被链接文档的的 MIME 类型。</td></tr>
</table>';
    $arr[3] = '    <a href="http://www.baidu.com">百度</a>    
<br />
    <!--指向 百度 的超链接-->    ';
    $arr[4] = '浏览器支持：IE Firefox Chrome Safari Opera <br />
    <a>    
元素最重要的属性是 href 属性，它指示链接的目标。 <br />
<span class="red">提示：</span>如果不使用 href 属性，则不可以使用如下属性：download, hreflang, media, rel, target 以及 type 属性。<br />
<span class="red">提示：</span>被链接页面通常显示在当前浏览器窗口中，除非您规定了另一个目标（target 属性）。<br />
<span class="red">提示：</span>请使用 CSS 来设置链接的样式。<br />
在 HTML 4.01 中，
    <a>     
标签可以是超链接或锚。在 HTML5 中，
    <a>     
标签始终是超链接，但是如果未设置 href 属性，则只是超链接的占位符。HTML5 提供了一些新属性，同时不再支持一些 HTML 4.01 属性。<br />
    <a>    
标签支持 HTML 中的全局属性。<br />
    <a>    
标签支持 HTML 中的事件属性。<br />';

    $list[] = $arr;
    //end


?>
<div id="preloader disabled">
    <div id="status">
        <p class="center-text">
            Loading...
            <em>数据加载中……</em>
        </p>
    </div>
</div>
   
<div class="all-elements">
    <div class="snap-drawers">
        <!-- Left Sidebar-->
        <div class="snap-drawer snap-drawer-left">
            <!--Sidebar Header-->
            <div class="sidebar-header">
                <a href="#" class="sidebar-logo"></a>
                <a href="#" class="sidebar-close"><i class="fa fa-times"></i></a>
            </div>            
            <div class="deco"></div>
            <!--Page Breadcrumb-->
            <div class="breadcrumb">主页</div>
            <div class="deco"></div>
            <!--Simple Menu Item-->
            <a class="menu-item active-menu" href="index.html">
                <i class="fa fa-home"></i>
                <em>主 页</em>
                <i class="fa fa-circle"></i>
            </a>
            <div class="deco"></div>
            <!-- Submenu Item-->
            <div class="has-submenu" href="#">
                <a class="menu-item"  href="#" >
                    <i class="fa fa-code"></i>
                    <em>小 抄</em>
                    <i class="fa fa-plus"></i>
                </a>
                <div class="submenu">
                    <div class="deco"></div>
                    <a class="menu-item" href="features-jquery.html">
                        <i class="fa fa-angle-right"></i>   <em>HTML</em>     <i class="fa fa-circle"></i>
                    </a>
                    <div class="deco"></div>
                    <a class="menu-item" href="features-others.html">
                        <i class="fa fa-angle-right"></i>   <em>CSS</em>     <i class="fa fa-circle"></i>
                    </a>
                    <div class="deco"></div>
                    <a class="menu-item" href="features-typography.html">
                        <i class="fa fa-angle-right"></i>   <em>PHP</em>     <i class="fa fa-circle"></i>
                    </a>
                </div>
            </div>       
            <div class="deco"></div>
            <a class="menu-item"  href="contact.html">
                <i class="fa fa-envelope-o"></i>
                <em>联系我们</em>
                <i class="fa fa-circle"></i>
            </a>            
            <div class="deco"></div>  
            <!-- Page Breadcrumb -->
            <div class="breadcrumb">Copyright 2014. All rights reserved</div>
            <div class="deco"></div>
              
        </div>
    </div>
    <!-- Page Header -->
    <div class="header">
        <a class="open-nav" href="#"><i class="fa fa-navicon"></i></a>
        <!--<a class="header-logo" href="#"></a>-->
        <a class="header-message" href="#">程序员小抄</a>

    </div>
    
    <!-- Page Content-->
    <div id="content" class="snap-content">        
        <!-- Page Content -->
        <div class="content">
            <div class="container no-bottom">
                <h3>HTML标签</h3>
                <p>
                    按字母顺序排列
                </p>
            </div>
            <div class="decoration hide-if-responsive"></div>
            <!-- <a>标签 -->
            <?php
                foreach($list as $k => $v){
            ?>
            <div class="container">
                <div class="toggle-3">
                    <a href="#" class="deploy-toggle-3"><?php if($v[0]!=''){echo preg_replace_callback('/(\s{4}.+\s{4})?/', function($matches){return htmlspecialchars($matches[0]);}, $v[0]);}?><em class=""><strong class=""></strong></em></a>
                    <div class="toggle-content" style="display: none;">               
                        <p>
                            <span class="text-highlight highlight-green">定义</span><br />
                            <?php  if($v[1]!=''){echo preg_replace_callback('/(\s{4}.+\s{4})?/', function($matches){return htmlspecialchars($matches[0]);}, $v[1]);}else{echo "无";}?>
                        </p>
                        <p>
                            <span class="text-highlight highlight-blue">属性</span><br /> 
                            <?php  if($v[2]!=''){echo preg_replace_callback('/(\s{4}.+\s{4})?/', function($matches){return htmlspecialchars($matches[0]);}, $v[2]);}else{echo "无";}?> 
                        </p>
                        <p>
                            <span class="text-highlight highlight-magenta">范例</span><br />
                            <?php 
                                if(is_array($v[3])){
                                    foreach($v[3] as $exp_val){
                            ?>
                                <em class="speach-left-title">代码范例<?php echo $exp_key+1;?>:</em>
                                <span class="speach-left"><?php  if($exp_val!=''){echo preg_replace_callback('/(\s{4}.+\s{4})?/', function($matches){return htmlspecialchars($matches[0]);}, $exp_val);}else{echo "无";}?></span>
                            <?php  
                                    }
                                }else{
                            ?>
                                <em class="speach-left-title">代码范例:</em>
                                <span class="speach-left"><?php  if($v[3]!=''){echo preg_replace_callback('/(\s{4}.+\s{4})?/', function($matches){return htmlspecialchars($matches[0]);}, $v[3]);}else{echo "无";}?></span>
                            <?php
                                }
                            ?>    
                        </p>
                        <p>
                            <span class="text-highlight highlight-orange">注释</span><br />
                            <?php  if($v[4]!=''){echo preg_replace_callback('/(\s{4}.+\s{4})?/', function($matches){return htmlspecialchars($matches[0]);}, $v[4]);}else{echo "无";}?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
            <!-- <a>标签 -->

        </div>

            
        <!-- Page Footer-->
        <div class="footer">
            <div class="container">
                <div class="toggle-1">
                    <a href="#" class="deploy-toggle-1">程序员小抄版本号:1.0</a>
                    <div class="toggle-content" style="overflow: hidden; display: none;">
                        <p>
                            “程序员小抄”初上线，目前提供html，css，php的常用标签、属性、函数等小抄。
                        </p>
                    </div>
                </div>
            </div>
            <p class="center-text">Copyright 2014. All rights reserved.</p>
        </div>
                
    </div>   
</div>
</body>





















