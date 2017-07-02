<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="/Public/Index/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="/Public/Index/css/style.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="/Public/Index/js/jquery-2.1.4.min.js"></script>
    <script src="/Public/Index/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".hvr-shutter-out-horizontal").click(function(){
                document.getElementById('form1').submit();
            });
        });
    </script>
</head>
<body>
<div class="content">
    <h3>发表评论</h3>
    <div class="contact-form">
        <form action="<?php echo U('Appreciate/replay');?>" method="post" id="form1">
            <textarea placeholder="我也来评价几句..." style="width:300px;height: 150px;" name="comment"></textarea>
            <input type="hidden" name="pid" value="1">
            <input type="hidden" name="aid" value="<?php echo ($aid); ?>">
            <div class="build-btn">
            <a class="hvr-shutter-out-horizontal">发表</a>
            </div>
            <!--<input type="submit" value="发表"/>-->
        </form>
    </div>
</div>
</body>
</html>