<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="/Public/Index/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="/Public/Index/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
<?php if(is_array($total)): foreach($total as $key=>$v): ?><div class="comment-list">
    <h5><a href="#"><?php echo ($v["username"]); ?></a></h5>
    <div class="cmt-list">
        <div class="cmt-left">
            <img src="/Public/Uploads/<?php echo ($v["img"]); ?>" alt="" />
        </div>
        <div class="cmt-right">
            <p><?php echo ($v["comment"]); ?></p>
        </div>
        <div class="clearfix">&nbsp;</div><br>
        <p style="font-size: 1.4ch;"><span><?php echo ($v["cid"]); ?>楼</span>&nbsp;<span>20<?php echo (date('y-m-d H:i',$v["replay_time"])); ?></span>&nbsp;&nbsp;&nbsp;<em><a onclick="clickdown(<?php echo ($v["id"]); ?>)"><img src="/Public/Index/images/like.png"/>&nbsp;(<span id="dianzan_<?php echo ($v["id"]); ?>"><?php echo ($v["clicknum"]); ?></span>)</a>&nbsp;&nbsp;&nbsp;<a onclick="replay(<?php echo ($v["aid"]); ?>)"><img src="/Public/Index/images/add.png"/>&nbsp;回复</a>&nbsp;&nbsp;&nbsp;<a onclick="watch(<?php echo ($v["aid"]); ?>,<?php echo ($v["cid"]); ?>)"><img src="/Public/Index/images/link.png"/>&nbsp;查看回复(200)</a></em></p>
    </div>
</div><?php endforeach; endif; ?>
</body>
</html>