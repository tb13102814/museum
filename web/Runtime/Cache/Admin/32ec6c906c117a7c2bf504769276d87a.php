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

<!-- Start: Content -->
<div class="container-fluid content">
    <div class="row">
        <!-- Main Page -->
        <div id="content" class="col-sm-12 full">
            <div class="row">
                <div class="login-box">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="header bk-margin-bottom-20 text-center">
                                <img src="/Public/Admin/assets/img/logo.png" class="img-responsive" alt="" />
                                <h4>Log In</h4>
                            </div>
                            <form class="form-horizontal login" action="<?php echo U('Login/runLogin');?>" method="POST">
                                <div class="bk-padding-left-20 bk-padding-right-20">
                                    <div class="form-group">
                                        <label>用户名</label>
                                        <div class="input-group input-group-icon">
                                            <input type="text" class="form-control bk-radius" id="username" name="username" placeholder="Username or E-mail"/>
													<span class="input-group-addon">
														<span class="icon">
															<i class="fa fa-user"></i>
														</span>
													</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>密码</label>
                                        <div class="input-group input-group-icon">
                                            <input type="password" class="form-control bk-radius" id="password" name="password" placeholder="Password"/>
													<span class="input-group-addon">
														<span class="icon">
															<i class="fa fa-key"></i>
														</span>
													</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>验证码</label>
                                        <div class="input-group input-group-icon">
                                            <input type="text" class="form-control bk-radius" id="verify" name="verify" placeholder="Verify"/>&nbsp;&nbsp;&nbsp;
                                            <img src="<?php echo U('Login/verify');?>" id="code" onclick="this.src=this.src+'?'+Math.random()"/>
                                        </div>
                                    </div>
                                    <div class="row bk-margin-top-20 bk-margin-bottom-10">
                                        <div class="col-sm-8">
                                            <div class="checkbox-custom checkbox-default">
                                                <input id="RememberMe" name="rememberme" type="checkbox" />
                                                <label for="RememberMe">记住密码</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 text-right">
                                            <button  class="btn btn-primary hidden-xs">登陆</button>
                                            <!--<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs bk-margin-top-20">登陆</button>-->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Page -->
    </div>
</div><!--/container-->
<script type="text/javascript">
    $(".btn").click(function(){
       //alert("I love you");
        var $username=$("#username").val();
        var $password=$("#password").val();
        var $verify  =$("#verify").val();
        if($username==''){
            alert('用户名不能为空');
            return false;
        }
        if($password==''){
            alert('密码不能为空');
            return false;
        }
        if($verify==''){
            alert('验证码不能为空');
            return false;
        }
        $(".form-horizontal").submit();
    });
</script>
<script>
    $("#verify").css('width','150px');
</script>

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