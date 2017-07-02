<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>万维虚拟博物馆</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Architect Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="/Public/Index/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="/Public/Index/css/style.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="/Public/Index/js/jquery-2.1.4.min.js"></script>
    <script src="/Public/Index/js/jquery-1.11.0.min.js"></script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="/Public/Index/js/move-top.js"></script>
    <script type="text/javascript" src="/Public/Index/js/easing.js"></script>
    <script type="text/javascript" src="/Public/Index/js/layer.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--start-smoth-scrolling-->
    <script type="text/css">
        .top-nav{filter: alpha(opacity=50);opacity: 0.5;}
    </script>
</head>
<body>
<!--header-->
<div class="header-top" id="home">
    <div class="container">
        <div class="header-logo">
            <a href="index.html"><img src="/Public/Index/images/logo.png" alt=""/></a>
        </div>
        <div class="top-nav">
            <span class="menu"><img src="/Public/Index/images/menu-icon.png" alt=""/></span>
            <ul class="nav1">
                <li><a href="http://museum.kjava.com.cn">首页</a></li>
                <li><a href="<?php echo U('Museum/index',array('nid'=>13));?>">展馆概述</a></li>
                <li><a href="<?php echo U('Display/index',array('nid'=>12));?>">陈列展览</a>
                    <ul class="nav2">
                        <li><a href="<?php echo U('Display/index',array('nid'=>9));?>">社会历史类</a></li>
                        <li><a href="<?php echo U('Display/index',array('nid'=>10));?>">自然历史类</a></li>
                        <li><a href="<?php echo U('Display/index',array('nid'=>11));?>">科学技术类</a></li>
                        <li><a href="<?php echo U('Display/index',array('nid'=>12));?>">文化艺术类</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo U('Appreciate/index');?>">艺术鉴赏</a></li>
                <li><a href="<?php echo U('Trading/index');?>">艺术品商店</a></li>
                <li><a href="<?php echo U('Museum/index',array('nid'=>7));?>">联系我们</a></li>
            </ul>
            <!-- script-for-menu -->
            <script>
                $( "span.menu" ).click(function() {
                    $( "ul.nav1" ).slideToggle( 300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- /script-for-menu -->
        </div>
	<?php if(session('tel') == null): ?><div class="social-icons">
            <ul class="nav1">
                <li><a href="<?php echo U('User/login');?>">登陆 |</a></li>
                <li><a href="<?php echo U('User/register');?>">注册</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
	<?php else: ?>
	<div class="social-icons">
	     <ul class="nav1">
                <li><a href="<?php echo U('User/confirm');?>">个人中心 |</a></li>
	        <li><a href="<?php echo U('User/logout');?>">退出</a></li>
             </ul>
        </div>
        <div class="clearfix"> </div><?php endif; ?>
    </div>
    <div class="search-box">
        <div id="sb-search" class="sb-search">
            <form>
                <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                <input class="sb-search-submit" type="submit" value="">
                <span class="sb-icon-search"> </span>
            </form>
        </div>
    </div>
    <div class="header-info-right">
        <div class="header cbp-spmenu-push">
            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <a href="http://museum.kjava.com.cn">首页</a>
                <a href="<?php echo U('Display/index',array('nid'=>12));?>">展馆概述</a>
                <a href="<?php echo U('Display/index',array('nid'=>12));?>">陈列展览</a>
                <a href="<?php echo U('Appreciate/index');?>">艺术鉴赏</a>
                <a href="<?php echo U('Trading/index');?>">艺术品交易</a>
                <a href="<?php echo U('Museum/index',array('nid'=>7));?>">联系我们</a>
            </nav>
            <!--script-nav -->
            <script>
                $("span.menu").click(function(){
                    $("ul.navigatoin").slideToggle("300" , function(){
                    });
                });
            </script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });
            </script>
            <div class="clearfix"> </div>
            <!-- /script-nav -->
            <div class="main">
                <section class="buttonset">
                    <button id="showLeftPush"><img src="/Public/Index/images/menu.png" /><span>Menu</span></button>
                </section>
            </div>
            <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
            <script src="/Public/Index/js/classie.js"></script>
            <script>
                var	menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                        showLeftPush = document.getElementById( 'showLeftPush' ),
                        body = document.body;

                showLeftPush.onclick = function() {
                    classie.toggle( this, 'active' );
                    classie.toggle( body, 'cbp-spmenu-push-toright' );
                    classie.toggle( menuLeft, 'cbp-spmenu-open' );
                    disableOther( 'showLeftPush' );
                };
            </script>
        </div>
    </div>
</div>
<!--//header-->
<!--search-scripts-->
<script src="/Public/Index/js/classie.js"></script>
<script src="/Public/Index/js/uisearch.js"></script>
<script>
    new UISearch( document.getElementById( 'sb-search' ) );
</script>
<!--//search-scripts-->

<div class="blog">
    <div class="container">
        <div class="blog-top">
            <div class="col-md-9 blog-left">
                <?php if(is_array($appreciate)): foreach($appreciate as $key=>$v): ?><div class="blog-main">
                    <a href="<?php echo U('/'.$v['id']);?>" class="bg"><?php echo ($v["title"]); ?></a>
                    <p>艺术品推荐者: <a href="#"><?php echo ($v["author"]); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;20<?php echo (date('y-m-d',$v["create_time"])); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">5 comments</a></p>
                </div>
                <div class="blog-main-one">
                    <div class="blog-one">
                        <div class="col-md-5 blog-one-left">
                            <a href="<?php echo U('/'.$v['id']);?>"><img src="/Public/Uploads/<?php echo ($v["icon"]); ?>" alt="" width="350" height="250"/></a>
                        </div>
                        <div class="col-md-7 blog-one-left">
                            <p><?php echo ($v["introduce"]); ?></p>
                        </div>
                    </div>
                    <div class="comments">
                        <ul>
                            <li><span class="bookmark"> </span><a href="#">Uncategorized</a></li>
                            <li><span class="clndr"> </span><p>march 13,2014</p></li>
                            <li><span class="cmnt"> </span><a href="#">comments</a></li>
                        </ul>
                        <div class="b-btn">
                            <a href="<?php echo U('/'.$v['id']);?>" class="hvr-shutter-out-horizontal">Read more</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div><?php endforeach; endif; ?>
            </div>
            <?php echo W('Right/right');?>
            <div class="clearfix"></div>
        </div>
        <div class="pagination">
            <nav>
                <ul class="pager">
                    <li><a href="#"><?php echo ($page); ?></a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--read-->
<div class="read">
    <div class="container">
        <div class="read-main">
            <div class="col-md-5 read-left">
                <h3>快读通道</h3>
                <div class="read-btm">
                    <div class="col-md-4 rd-left">
                        <ul>
                            <li><strong><a href="http://museum.kjava.com.cn">首页</a></strong></li>
			    <li><a href="#">馆长致辞</a></li>
                            <li><a href="<?php echo U('Display/index');?>">陈列展览</a></li>
                            <li><a href="<?php echo U('Appreciate/index');?>">艺术鉴赏</a></li>
                            <li><a href="<?php echo U('Trading/index');?>">艺术品商店</a></li>
                            <li><a href="<?php echo U('Museum/index');?>">展馆概述</a></li>
                            <li><a href="Museum/index">联系我们</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 rd-left">
                        <ul>
                            <li><strong>相关资讯</strong></li>
                            <li><a href="#">征稿启示</a></li>
                            <li><a href="#">学术研究</a></li>
                            <li><a href="#">学术成果</a></li>
                            <li><a href="#">国际博物馆日</a></li>
                            <li><a href="#">志愿者之家</a></li>
                            <li><a href="#">会员之家</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 rd-left">
                        <ul>
                            <li><strong>热门博物馆</strong></li>
                            <li><a href="http://www.capitalmuseum.org.cn/">首都博物馆</a></li>
                            <li><a href="http://www.shanghaimuseum.net/museum/frontend/">上海博物馆</a></li>
                            <li><a href="http://www.xabwy.com/">西安博物馆</a></li>
                            <li><a href="http://www.lymuseum.com/">洛阳博物馆</a></li>
                            <li><a href="http://www.szmuseum.com/">苏州博物馆</a></li>
                            <li><a href="http://www.guangzhoumuseum.cn/">广州博物馆</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-5 read-left">
                <h3>友情链接</h3>
                <div class="read-btm">
                    <div class="read-one">
                        <div class="col-md-3 read-bottom-left">
                            <img src="/Public/Index/images/read-1.jpg" alt="" />
                        </div>
                        <div class="col-md-9 read-bottom-right">
                            <h4>揭示了宇宙和恒星的起源与演化、太阳系的形成、地球的诞生与运动、矿物和岩石等自然奇观。</h4>
                            <p><a href="http://www.njgeologicalmuseum.com/News_SingleList.aspx?id=14&tid=3">南京地质博物馆</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="read-one">
                        <div class="col-md-3 read-bottom-left">
                            <img src="/Public/Index/images/read-1.jpg" alt="" />
                        </div>
                        <div class="col-md-9 read-bottom-right">
                            <h4>揭示了宇宙和恒星的起源与演化、太阳系的形成、地球的诞生与运动、矿物和岩石等自然奇观。</h4>
                            <p><a href="http://www.njgeologicalmuseum.com/News_SingleList.aspx?id=14&tid=3">南京地质博物馆</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 read-left">
                <h3>联系我们</h3>
                <div class="read-btm follow">
                    <ul>
                        <li><a href="#" class="twit">QQ联系</a></li>
                        <li><a href="#" class="fb">微信</a></li>
                        <li><a href="#" class="d">E-mail</a></li>
                        <li><a href="#" class="p">电话</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--read-->
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <p>Copyright &copy; 2017.万维虚拟博物馆.<a target="_blank" href=""></a> - 版权所有<a href="http://www.miibeian.gov.cn" target="_blank">京ICP证09052019号-4</a></p>
            </div>
            <div class="col-md-6 footer-right">
                <a href=""><img src="/Public/Index/images/lg.png" alt="" /></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             var defaults = {
             containerID: 'toTop', // fading element id
             containerHoverID: 'toTopHover', // fading element hover id
             scrollSpeed: 1200,
             easingType: 'linear'
             };
             */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!--footer-->
</body>
</html>