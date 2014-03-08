<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	
	 
    <link href="__PUBLIC__/metro/css/metro-bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/metro/css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="__PUBLIC__/metro/css/docs.css" rel="stylesheet">
    <link href="__PUBLIC__/metro/js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="__PUBLIC__/metro/js/jquery/jquery.min.js"></script>
    <script src="__PUBLIC__/metro/js/jquery/jquery.widget.min.js"></script>
    <script src="__PUBLIC__/metro/js/jquery/jquery.mousewheel.js"></script>
    <script src="__PUBLIC__/metro/js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="__PUBLIC__/metro/js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="__PUBLIC__/metro/js/docs.js"></script>
    <title>快点订单系统</title>

<script src="__PUBLIC__/checkInput.js"></script>
 
</head>

<body class="metro">

    <div class="container">
        <h1>
       		<a href="<?php echo U("Index/index");?>"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
           	更新内容<small class="on-right">2014.3.8</small>
        </h1>
        <div class="tile-area no-padding clearfix">
            <div class="grid">
            	<div class="row">
            		<div class="accordion with-marker span12 place-left margin10" data-role="accordion" data-closeany="false">
                        <div class="accordion-frame">
                            <a class="heading bg-lightBlue fg-white" href="#">V1.1.2版本更新&nbsp;&nbsp;&nbsp;&nbsp;2014.3.8</a>
                            <div style="display: block;" class="content">
                                <ol>
                                	<li>
                                	<b>将订单时间拆分为  打印时间  与  创建时间</b><br>
                                	</li>
                                	<li>
                                	<b>添加了 高级查询 功能</b><br>
                                	    在 历史查询页面->右上角搜索图标  中<br>
                                	   支持 打印时间  与  订单创建时间  的   区间查询  与  多点查询
                                	</li>
                                	<li>
                                	<b>更改了 历史记录 页面，使得 历史记录 页面只显示当天的已完成订单</b><br>
                                	历史记录  页面中的  未完成订单  仍显示为所有日期的未完成订单。
                                	</li>
                                	<li>
                                	<b>删除处添加了询问提示</b><br>
                                	</li>
                                	<li>
                                	<b>屏蔽了修改购物车内商品的页面</b><br>
                                	</li>
                                	<li>
                                	<b>首页去掉了已拆分标签</b><br>
                                	</li>
                                	<li>
                                	<b>添加了更新信息页面</b><br>
                                	</li>
                                	<li>
                                	<b>添加了https强连接选项</b><br>
                                	</li>
                                	<li>
                                	<b>添加了AES加密算法</b><br>
                                	</li>
                                </ol>
                            </div>
                        </div>
                        <div class="accordion-frame">
                            <a class="heading ribbed-green fg-white collapsed" href="#">之前的更新</a>
                            <div class="content">
                            	<ol>
                                	<li>
                                	<b>软件上线</b><br>
                                	</li>
                                </ol>
                            </div>
                        </div>
                    </div>
            	</div>
            </div>
        </div>
    </div>

</body>
</html>