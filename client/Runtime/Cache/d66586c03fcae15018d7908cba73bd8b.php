<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	 
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
    <script src="__PUBLIC__/metro/js/metro/metro-live-tile.js"></script>

    <!-- Local JavaScript -->
    <script src="__PUBLIC__/metro/js/docs.js"></script>
    <script src="__PUBLIC__/metro/js/start-screen.js"></script>
    <title>EasyOrder</title>

<script>
//预先加载一遍
$.get("__PUBLIC__/inputPanel.txt",function(data,status){
	content = data;
});

function go(str)
{
	window.location = str;
}

$(function(){
    $("#userWindows").on('click', function(){
        if ( (getCookie('userName') == "") || (getCookie('userName') == null) )
        {
            $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                icon: '<span class="icon-windows"></span>',
                title: '用户登录',
                width: 400,
                padding: 10,
                onShow: function(){
                    var content = '<form class="user-input" method="post" action="<?php echo U("User/toLogin");?>">' +
                                '<label>用户名</label>' +
                                '<div class="input-control text"><input type="text" name="userName"><button class="btn-clear"></button></div>' +
                                '<label>密码</label>'+
                                '<div class="input-control password"><input type="password" name="userPassword"><button class="btn-reveal"></button></div>' +
                                '<div class="input-control checkbox"><label>请输入用户名和密码</label></div>'+
                                '<div class="form-actions">' +
                                '<button class="button primary">登录</button>&nbsp;'+
                                '<button class="button" type="button" onclick="$.Dialog.close()">取消</button> '+
                                '</div>'+
                                '</form>';
                    $.Dialog.content(content);
                }
            });
        }
        else
        {
            window.location='<?php echo U("User/logout");?>';
        }
    });
    /*
     * js inputPanel界面  废弃
     *
    $(".six").on('click', function(){
        if ( true )
        {
            $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                icon: '<span class="icon-cart"></span>',
                title: '详细',
                width: 800,
                padding: 10,
                onShow: function(){
                	$.get("__PUBLIC__/inputPanel.txt",function(data,status){
                		content = data;
                	});
                	$.Dialog.content(content);
                }
            });
        }
        else
        {
        }
    });
    */
});
</script>
</head>
<body class="metro">
<div class="tile-area tile-area-dark">
    <h1 class="tile-area-title fg-white">欢迎</h1>

    <div class="user-id" id="userWindows">
        <div class="user-id-image">
            <?php if($_SESSION['userName']== NULL ): ?><span class="icon-user no-display1"></span>
			<?php else: ?><img src="__PUBLIC__/metro/images/Battlefield_4_Icon.png"><?php endif; ?>
        </div>
        <div class="user-id-name">
            <span class="first-name">
           		<?php if($_SESSION['userName']== NULL ): ?>未登录
   				<?php else: echo (session('userName')); endif; ?>
    		</span>
            <span class="last-name">
            	<?php if($_SESSION['userPower']== NULL ): else: echo (session('userPower')); endif; ?>
            </span>
        </div>
    </div>

    <div class="tile-group two">
        <div class="tile-group-title">信息</div>

        <a class="tile double bg-lightBlue live" data-role="live-tile" data-effect="slideUp">
            <div class="tile-content email">
                <div class="email-image">
                    <img src="__PUBLIC__/metro/images/obama.jpg">
                </div>
                <div class="email-data">
                    <span class="email-data-title">Barak Obama</span>
                    <span class="email-data-subtitle">You're invited</span>
                    <span>这是一个长很长很长很长的文本。</span>
                </div>
            </div>
            <div class="tile-content email">
                <div class="email-image">
                    <img src="__PUBLIC__/metro/images/jolie.jpg">
                </div>
                <div class="email-data">
                    <span class="email-data-title">Jolie &amp; Bred</span>
                    <span class="email-data-subtitle">You're invited</span>
                    <span class="email-data-text">I hope that you can make and make</span>
                </div>
            </div>
            <div class="tile-content email">
                <div class="email-image">
                    <img src="__PUBLIC__/metro/images/shvarcenegger.jpg">
                </div>
                <div class="email-data">
                    <span class="email-data-title">Arny</span>
                    <span class="email-data-subtitle">You're invited</span>
                    <span class="email-data-text">I hope that you can make and make</span>
                </div>
            </div>
            <div class="brand">
                <div class="label"><h3 class="no-margin fg-white"><span class="icon-newspaper"></span></h3></div>
                <div class="badge">3</div>
            </div>
        </a> <!-- end tile -->
	
		<a href="#" class="tile double ribbed-amber">
            <div class="tile-content icon">
                <span class="icon-search"></span>
            </div>
            <div class="brand">
                <div class="label">快速选择</div>
            </div>
        </a>
        
        <a href="#" class="tile bg-violet">
            <div class="tile-content icon">
                <span class="icon-basket"></span>
            </div>
            <div class="brand">
                <div class="label">已下单的货物</div>
            </div>
        </a>

        <a href="#" class="tile bg-darkOrange">
            <div class="tile-content icon">
                <span class="icon-help"></span>
            </div>
            <div class="brand">
                <div class="label">关于</div>
            </div>
        </a>
    </div> <!-- End group -->

    <div class="tile-group six">
        <div class="tile-group-title">货物清单</div>

        <div class="tile double double-vertical image" onclick='window.location = "<?php echo U("Order/inputPanel","id=1");?>"'>
            <div class="tile-content">
                <img alt="" src="__PUBLIC__/metro/goodsImages/gurouxianglian.jpg">
            </div>
            <div class="brand bg-taupe">
                <p class="text">南瓜饼</p>
                <div class="badge">0</div>
            </div>
        </div>

        <div class="tile image">
            <div class="tile-content">
                <img alt="" src="__PUBLIC__/metro/goodsImages/anjingmantou.jpg">
            </div>
            <div class="brand bg-orange">
                <p class="text">安井馒头</p>
                <div class="badge">10</div>
            </div>
        </div>

        <div class="tile double image">
            <div class="tile-content">
                <img alt="" src="__PUBLIC__/metro/goodsImages/chizhong.jpg">
            </div>
            <div class="brand bg-red">
                <p class="text">翅中</p>
                <div class="badge">4</div>
            </div>
        </div>

        <div class="tile bg-green">
            <div class="tile-content icon">
                <img src="__PUBLIC__/metro/goodsImages/nanguabing.jpg">
            </div>
            <div class="brand">
                <span class="name">骨肉相连</span>
            </div>
        </div>

        <a class="tile double bg-lightBlue">
            <div class="tile-content email">
                <div class="email-image">
                    <img src="__PUBLIC__/metro/goodsImages/jizhua.jpg">
                </div>
                <div class="email-data">
                    <span class="email-data-title">鸡爪</span>
                    <span class="email-data-subtitle">50斤</span>
                    <span class="email-data-text">9.6/斤bulabulabulabu</span>
                </div>
                 <div class="brand">
                    <div class="label"><h3 class="no-margin fg-white"><span class="icon-heart"></span></h3></div>
                    <div class="badge">3</div>
                </div>
            </div>
        </a>

        
        <a href="#" class="tile bg-violet">
            <div class="tile-content icon">
                <span class="icon-tag"></span>
            </div>
            <div class="brand">
                <div class="label">翅尖</div>
            </div>
        </a>

        <a href="#" class="tile bg-yellow">
            <div class="tile-content icon">
                <span class="icon-cart"></span>
            </div>
            <div class="brand">
                <div class="label">带鱼</div>
            </div>
        </a>

        <a href="#" class="tile double bg-mauve">
            <div class="tile-content icon">
                <span class="icon-cart"></span>
            </div>
            <div class="brand">
                <div class="label">虾仁</div>
            </div>
        </a>

        <a href="#" class="tile quadro bg-darkGreen">
            <div class="tile-content icon">
                <span class="icon-tag"></span>
            </div>
            <div class="brand">
                <div class="label">鱿鱼</div>
            </div>
        </a>
    </div> <!-- End group -->

</div>


</body>
</html>