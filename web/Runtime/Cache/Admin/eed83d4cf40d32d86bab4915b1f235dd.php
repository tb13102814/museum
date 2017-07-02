<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="UTF-8" />

    <title>Login | Fire - Admin Template</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Import google fonts -->
    <link href='#' rel='stylesheet' type='text/css'>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="/Public/Admin/assets/ico/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/Public/Admin/assets/ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/Public/Admin/assets/ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/Public/Admin/assets/ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/Public/Admin/assets/ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/Public/Admin/assets/ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/Public/Admin/assets/ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/Public/Admin/assets/ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/Public/Admin/assets/ico/apple-touch-icon-152x152.png" />

    <!-- start: CSS file-->

    <!-- Vendor CSS-->
    <link href="/Public/Admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/vendor/skycons/css/skycons.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- index新增-->
    <link href="/Public/Admin/assets/vendor/css/pace.preloader.css" rel="stylesheet" />

    <!-- Plugins CSS-->
    <link href="/Public/Admin/assets/plugins/bootkit/css/bootkit.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/select2/select2.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/jquery-datatables-bs3/css/datatables.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" />
    <!-- index新增-->
    <link href="/Public/Admin/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/scrollbar/css/mCustomScrollbar.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/magnific-popup/css/magnific-popup.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/jqvmap/jqvmap.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/pnotify/css/pnotify.custom.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/bootstrap-datepicker/css/datepicker-theme.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <!-- Theme CSS -->
    <link href="/Public/Admin/assets/css/jquery.mmenu.css" rel="stylesheet" />

    <!-- Page CSS -->
    <link href="/Public/Admin/assets/css/style.css" rel="stylesheet" />
    <link href="/Public/Admin/assets/css/add-ons.min.css" rel="stylesheet" />
    <!-- Head Libs -->
    <script src="/Public/Admin/assets/plugins/modernizr/js/modernizr.js"></script>
    <script src="/Public/Admin/assets/js/jquery.min.js"></script>

    <style>
        footer {
            display: none;
        }
    </style>

    <!-- end: CSS file-->


    <!-- Head Libs -->
    <script src="/Public/Admin/assets/plugins/modernizr/js/modernizr.js"></script>

</head>
<body>

<!-- Start: Header -->
<div class="navbar" role="navigation">
    <div class="container-fluid container-nav">
        <!-- Navbar Action -->
        <ul class="nav navbar-nav navbar-actions navbar-left">
            <li class="visible-md visible-lg"><a href="#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
            <li class="visible-xs visible-sm"><a href="#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>
        </ul>
        <!-- Navbar Left -->
        <div class="navbar-left">
            <!-- Search Form -->
            <form class="search navbar-form">
                <div class="input-group input-search">
                    <input type="text" class="form-control bk-radius" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
                </div>
            </form>
        </div>
        <!-- Navbar Right -->
        <div class="navbar-right">
            <div class="userbox">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <figure class="profile-picture hidden-xs">
                        <img src="/Public/Admin/assets/img/avatar.jpg" class="img-circle" alt="" />
                    </figure>
                    <div class="profile-info">
                        <span class="name">欢迎回来</span>
                        <span class="role"><i class="fa fa-circle bk-fg-success"></i><?php echo (session('admin')); ?></span>
                    </div>
                    <i class="fa custom-caret"></i>
                </a>
                <div class="dropdown-menu">
                    <ul class="list-unstyled">
                        <li class="dropdown-menu-header bk-bg-white bk-margin-top-15">
                            <div class="progress progress-xs  progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    60%
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="page-profile.html"><i class="fa fa-user"></i> 个人中心</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench"></i> 修改密码</a>
                        </li>
                        <li>
                            <a href="page-invoice"><i class="fa fa-video-camera"></i> 网站预览</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file"></i> 清除缓存</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Login/logout');?>"><i class="fa fa-power-off"></i> 注销</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Userbox -->
        </div>
        <!-- End Navbar Right -->
    </div>
</div>

<!-- Start: Content -->
<div class="container-fluid content">
    <div class="row">

        <!-- 左侧菜单 -->
        <div class="sidebar">
            <div class="sidebar-collapse">
                <!-- Sidebar Header Logo-->
                <div class="sidebar-header">
                    <img src="/Public/Admin/assets/img/logo.png" class="img-responsive" alt="" />
                </div>
                <!-- Sidebar Menu-->
                <div class="sidebar-menu">
                    <nav id="menu" class="nav-main" role="navigation">
                        <ul class="nav nav-sidebar">
                            <div class="panel-body text-center">
                                <div class="bk-avatar">
                                    <img src="/Public/Admin/assets/img/avatar.jpg" class="img-circle bk-img-60 bk-border-off" alt="" />
                                </div>
                            </div>
                            <li class="active">
                                <a href="">
                                    <i class="fa fa-laptop" aria-hidden="true"></i><span>首页</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-wrench" aria-hidden="true"></i><span>系统设置</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="page-profile.html"><span class="text"> 系统功能</span></a></li>
                                    <li><a href="<?php echo U('Sysset/index');?>"><span class="text"> 导航管理</span></a></li>
                                    <li><a href="<?php echo U('Slider/index');?>"><span class="text"> 幻灯片管理</span></a></li>
                                    <li><a href="page-pricing-tables.html"><span class="text"> Pricing Tables</span></a></li>
                                    <li><a href="page-login.html"><span class="text"> Login Page</span></a></li>
                                    <li><a href="page-register.html"><span class="text"> Register Page</span></a></li>
                                    <li><a href="page-recover-password.html"><span class="text"> Recover Password</span></a></li>
                                    <li><a href="page-lockscreen1.html"><span class="text"> Lock Screen 1</span></a></li>
                                    <li><a href="page-lockscreen2.html"><span class="text"> Lock Screen 2</span></a></li>
                                    <li><a href="page-404.html"><span class="text"> Page 404</span></a></li>
                                    <li><a href="page-500.html"><span class="text"> Page 500</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class=" fa fa-user-md" aria-hidden="true"></i><span>会员管理</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="<?php echo U('User/index');?>"><span class="text"> 会员详情</span></a></li>
                                    <li><a href="page-invoice.html"><span class="text"> 评论管理</span></a></li>
                                    <li><a href="page-pricing-tables.html"><span class="text"> Pricing Tables</span></a></li>
                                    <li><a href="page-login.html"><span class="text"> Login Page</span></a></li>
                                    <li><a href="page-register.html"><span class="text"> Register Page</span></a></li>
                                    <li><a href="page-recover-password.html"><span class="text"> Recover Password</span></a></li>
                                    <li><a href="page-lockscreen1.html"><span class="text"> Lock Screen 1</span></a></li>
                                    <li><a href="page-lockscreen2.html"><span class="text"> Lock Screen 2</span></a></li>
                                    <li><a href="page-404.html"><span class="text"> Page 404</span></a></li>
                                    <li><a href="page-500.html"><span class="text"> Page 500</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-tasks" aria-hidden="true"></i><span>权限管理</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="<?php echo U('Auth/admin');?>"><span class="text"> 用户管理</span></a></li>
                                    <li><a href="<?php echo U('Auth/group');?>"><span class="text"> 用户组管理</span></a></li>
                                    <li><a href="<?php echo U('Auth/addRule');?>"><span class="text">认证规则管理</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-list-alt" aria-hidden="true"></i><span>内容管理</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="<?php echo U('Content/index');?>"><span class="text"> 图文管理</span></a></li>
                                    <li><a href="<?php echo U('Content/art');?>"><span class="text"> 馆藏陈列管理</span></a></li>
                                    <li><a href="<?php echo U('Content/money');?>"><span class="text"> 文物交易管理</span></a></li>
                                    <li><a href="<?php echo U('Content/appreciate');?>"><span class="text"> 艺术鉴赏管理</span></a></li>
                                    <li><a href="<?php echo U('Content/extra');?>"><span class="text"> 系统其他内容管理</span></a></li>
				    <li><a href="<?php echo U('Content/first');?>"><span class="text"> 首页内容管理</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-table" aria-hidden="true"></i><span>交易管理</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="table-basic.html"><span class="text"> Basic</span></a></li>
                                    <li><a href="table-advanced.html"><span class="text"> Advanced</span></a></li>
                                    <li><a href="table-responsive.html"><span class="text"> Responsive</span></a></li>
                                    <li><a href="table-editable.html"><span class="text"> Editable</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-random" aria-hidden="true"></i><span>拓展中心</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="chart-flot.html"><span class="text"> Flot Chart</span></a></li>
                                    <li><a href="chart-xchart.html"><span class="text"> xChart</span></a></li>
                                    <li><a href="chart-other.html"><span class="text"> Other</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="widgets.html">
                                    <i class="fa fa-life-bouy" aria-hidden="true"></i><span>Widgets</span>
                                </a>
                            </li>
                            <li>
                                <a href="gallery.html">
                                    <i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="fa fa-calendar" aria-hidden="true"></i><span>Calendar</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i><span>Maps</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="map-basic.html"><span class="text"> Basic</span></a></li>
                                    <li><a href="map-vector.html"><span class="text"> Vector</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="typography.html">
                                    <i class="fa fa-font" aria-hidden="true"></i><span>Typography</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a>
                                    <i class="fa fa-bolt" aria-hidden="true"></i><span>Icons</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li><a href="icons-font-awesome.html"><span class="text"> Font Awesome</span></a></li>
                                    <li><a href="icons-weathericons.html"><span class="text"> Weather Icons</span></a></li>
                                    <li><a href="icons-glyphicons.html"><span class="text"> Glyphicons</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End Sidebar Menu-->
            </div>
            <!-- Sidebar Footer-->
            <div class="sidebar-footer">
                <div class="small-chart-visits">
                    <div class="small-chart" id="sparklineLineVisits"></div>
                    <div class="small-chart-info">
                        <label>New Visits</label>
                        <strong>70,79%</strong>
                    </div>
                    <script type="text/javascript">
                        var sparklineLineVisitsData = [15, 16, 17, 19, 15, 25, 23, 35, 29, 15, 30, 45];
                    </script>
                </div>
                <ul class="sidebar-terms bk-margin-top-10">
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <!-- End Sidebar Footer-->
        </div>
        <!-- End Sidebar -->

<!-- Main Page -->
<div class="main">
    <!-- Page Header -->
    <div class="page-header">
        <div class="pull-left">
            <ol class="breadcrumb visible-sm visible-md visible-lg">
                <li><a href="index.html"><i class="icon fa fa-home"></i>Home</a></li>
                <li><a href="#"><i class="fa fa-file-text"></i>系统管理</a></li>
                <li class="active"><i class="fa fa-reddit"></i>导航管理</li>
            </ol>
        </div>
        <div class="pull-right">
            <h2>导航管理</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-16 col-md-16 col-sm-16 col-xs-12">
            <div class="tabs tabs-info">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#main" data-toggle="tab"><i class="fa fa-home"></i> 主导航</a>
                    </li>
                    <li>
                        <a href="#bottom" data-toggle="tab">底部导航</a>
                    </li>
                    <li>
                        <a href="#edit" data-toggle="tab">Wap底部导航</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <?php echo W('Main/main');?>
                    <?php echo W('Bottom/bottom');?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
</div>
<script type="text/javascript">
    function nav_edit(id){
        $.ajax({
            url:"editNav",
            data:{id:id},
            datatype:"json",
            type:"get",
            success:function(data){
                $("#tit").val(data.title);
                $("#sort").val(data.sort);
                $("#nav_id").val(data.id);
            },
        });
    }
</script>
<script type="text/javascript">
    function del(id) {
        $("#did").val(id);
    }
</script>
<script type="text/javascript">
    $('#confirm').click(function(){
        var did=$('#did').val();
        $.ajax({
            url:"deleteNav",
            data:{did:did},
            datatype:"json",
            type:"post",
            success:function(data){
                if(data.status==0){
                    $("#tr_"+did).remove();
                }
            },
        });
    });
</script>
<!-- End Main Page -->
<!-- Footer -->
<!--<div id="footer">
    <ul>
        <li>
            <div class="title">Memory</div>
            <div class="bar">
                <div class="progress light progress-sm  progress-striped active">
                    <div class="progress-bar progress-squared progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        60%
                    </div>
                </div>
            </div>
            <div class="desc">4GB of 8GB</div>
        </li>
        <li>
            <div class="title">HDD</div>
            <div class="bar">
                <div class="progress light progress-sm  progress-striped active">
                    <div class="progress-bar progress-squared progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                        40%
                    </div>
                </div>
            </div>
            <div class="desc">250GB of 1TB</div>
        </li>
        <li>
            <div class="title">SSD</div>
            <div class="bar">
                <div class="progress light progress-sm  progress-striped active">
                    <div class="progress-bar progress-squared progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                        70%
                    </div>
                </div>
            </div>
            <div class="desc">700GB of 1TB</div>
        </li>
        <li>
            <div class="copyright">
                <p class="text-muted text-right">Fire <i class="fa fa-coffee"></i> Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></p>
            </div>
        </li>
    </ul>
</div>-->
<!-- End Footer -->

</div>
</div><!--/container-->


<div class="clearfix"></div>
<!-- start: JavaScript-->

<!-- Vendor JS-->
<script src="/Public/Admin/assets/vendor/js/jquery.min.js"></script>
<script src="/Public/Admin/assets/vendor/js/jquery-2.1.1.min.js"></script>
<script src="/Public/Admin/assets/vendor/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/Public/Admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/Admin/assets/vendor/skycons/js/skycons.js"></script>
<!--index 新增-->
<script src="/Public/Admin/assets/vendor/js/pace.min.js"></script>

<!-- Plugins JS-->
<script src="/Public/Admin/assets/plugins/moment/js/moment.min.js"></script>
<script src="/Public/Admin/assets/plugins/bootkit/js/bootkit.js"></script>
<script src="/Public/Admin/assets/plugins/select2/select2.js"></script>
<script src="/Public/Admin/assets/plugins/jquery-datatables/media/js/jquery.dataTables.js"></script>
<script src="/Public/Admin/assets/plugins/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="/Public/Admin/assets/plugins/jquery-datatables-bs3/js/datatables.js"></script>
<script src="/Public/Admin/assets/plugins/summernote/dist/summernote.js"></script>
<script src="/Public/Admin/assets/plugins/summernote/dist/lang/summernote-zh-CN.js"></script>
<script src="/Public/Admin/assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script src="/Public/Admin/assets/plugins/bootstrap-markdown/js/markdown.js"></script>
<script src="/Public/Admin/assets/plugins/bootstrap-markdown/js/to-markdown.js"></script>
<script src="/Public/Admin/assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
<script src="/Public/Admin/assets/plugins/touchpunch/js/jquery.ui.touch-punch.min.js"></script>
<script src="/Public/Admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="/Public/Admin/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="/Public/Admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="/Public/Admin/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
<script src="/Public/Admin/assets/plugins/maskedinput/js/jquery.maskedinput.js"></script>
<!--index 新增-->
<script src="/Public/Admin/assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
<script src="/Public/Admin/assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/Public/Admin/assets/plugins/magnific-popup/js/magnific-popup.js"></script>
<script src="/Public/Admin/assets/plugins/moment/js/moment.min.js"></script>
<script src="/Public/Admin/assets/plugins/fullcalendar/js/fullcalendar.js"></script>
<script src="/Public/Admin/assets/plugins/flot/js/jquery.flot.min.js"></script>
<script src="/Public/Admin/assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
<script src="/Public/Admin/assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
<script src="/Public/Admin/assets/plugins/flot/js/jquery.flot.stack.min.js"></script>
<script src="/Public/Admin/assets/plugins/flot/js/jquery.flot.time.min.js"></script>
<script src="/Public/Admin/assets/plugins/flot-tooltip/js/jquery.flot.tooltip.js"></script>
<script src="/Public/Admin/assets/plugins/chart-master/js/Chart.js"></script>
<script src="/Public/Admin/assets/plugins/jqvmap/jquery.vmap.js"></script>
<script src="/Public/Admin/assets/plugins/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="/Public/Admin/assets/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="/Public/Admin/assets/plugins/sparkline/js/jquery.sparkline.min.js"></script>
<script src="/Public/Admin/assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="/Public/Admin/assets/plugins/jquery-validation/js/jquery.validate.js"></script>
<script src="/Public/Admin/assets/plugins/wizard/js/jquery.bootstrap.wizard.min.js"></script>
<script src="/Public/Admin/assets/plugins/pnotify/js/pnotify.custom.js"></script>
<!-- Theme JS -->
<script src="/Public/Admin/assets/js/jquery.mmenu.min.js"></script>
<script src="/Public/Admin/assets/js/core.min.js"></script>

<!-- login JS -->
<script src="/Public/Admin/assets/js/pages/page-login.js"></script>
<!--首页index JS-->
<script src="/Public/Admin/assets/js/pages/index.js"></script>
<!--系统设置 JS-->
<script src="/Public/Admin/assets/js/pages/profile.js"></script>
<!-- 用户列表 JS -->
<script src="/Public/Admin/assets/js/pages/table-advanced.js"></script>
<!--编辑器 JS-->
<script src="/Public/Admin/assets/js/pages/form-editors.js"></script>
<!--注册-->
<script src="/Public/Admin/assets/js/pages/form-wizard.js"></script>
<!-- end: JavaScript-->
<script src="/Public/Admin/assets/js/pages/ui-portlets.js"></script>
<script src="/Public/Admin/assets/js/pages/ui-modals.js"></script>
<script src="/Public/Admin/assets/js/pages/ui-lightbox.js"></script>
<script src="/Public/Admin/assets/js/pages/ui-panels.js"></script>
<script src="/Public/Admin/assets/js/pages/form-elements.js"></script>

</body>

</html>