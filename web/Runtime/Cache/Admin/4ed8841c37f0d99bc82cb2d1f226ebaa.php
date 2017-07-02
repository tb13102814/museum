<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{ background: #fff; font-family: '宋体'; color: #333; font-size: 16px; }

        .message{width: 400px;height: 150px;margin:auto;border:1px solid #1B8F24;margin-top: 230px;}
        .head{width: 100%;height: 30px;background: #44BBA3;text-align: center;padding-top: 5px;}
        .content{height: 120px;width: 100%;}
        .success ,.error{text-align: center;margin-top: 30px;}
        .jump{text-align: center;margin-top: 20px;}
    </style>

</head>

<body>
<div class="message">

    <div class="head"><img src="/Public/Admin/assets/ico/tips.gif">&nbsp;<span>Admin提示信息</span></div>

    <div class="content">

        <?php if(isset($message)) {?>

        <p class="success">:) <?php echo($message); ?></p>

        <?php }else{?>

        <p class="error">:( <?php echo($error); ?></p>

        <?php }?>

        <p class="detail"></p>

        <p class="jump">

            页面自动<a id="href" href="<?php echo($jumpUrl); ?>">跳转</a>等待时间： <b id="wait"><?php echo($waitSecond); ?></b>

        </p>

    </div>

</div>

<script type="text/javascript">

    (function(){

        var wait = document.getElementById('wait'),href = document.getElementById('href').href;

        var interval = setInterval(function(){

            var time = --wait.innerHTML;

            if(time <= 0) {

                location.href = href;

                clearInterval(interval);

            };

        }, 1000);

    })();

</script>

</body>

</html>