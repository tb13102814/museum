<?php if (!defined('THINK_PATH')) exit();?><div class="col-md-3 blog-right">
    <div class="categories">
        <h3>热门陈列品</h3>
        <ul>
            <?php if(is_array($r_top)): foreach($r_top as $key=>$v): ?><li><a href="<?php echo U(display.'/'.$v['id']);?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="categories">
        <h3>热门鉴赏</h3>
        <ul>
            <?php if(is_array($r_middle)): foreach($r_middle as $key=>$k): ?><li><a href="<?php echo U('/'.$k['id']);?>"><?php echo ($k["title"]); ?></a></li><?php endforeach; endif; ?>
        </ul>
    </div>
    <div class="categories">
        <h3>万维博物馆官方微信公众号</h3>
        <!--<ul>
            <li><a href="#">March 3014</a></li>
            <li><a href="#">May 2014</a></li>
            <li><a href="#">August 2014</a></li>
            <li><a href="#">October 2014</a></li>
        </ul>-->
        <img src="/Public/Index/images/wx.jpg" alt="" width="280" height="280"/>
    </div>
</div>
<div class="clearfix"></div>