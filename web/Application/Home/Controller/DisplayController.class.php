<?php
/**
 * Created by PhpStorm.
 * User: tb
 * Date: 2017/3/17
 * Time: 16:48
 */

namespace Home\Controller;
use Think\Controller;
class DisplayController extends  CommonController
{
    //陈列展览视图
    public function index(){
        $nid=I('nid');
        $this->art=M('art')->where(array('pid'=>$nid))->limit(4)->select();
        //$art=merge_arr($art);
        //p($this->art);exit;
        $this->display();
    }
    //详情展示视图
    public function show(){
        $m = M('art');
        $result = $m->where('id='.I('id'))->find();
        $result['introduce']=htmlspecialchars_decode($result['introduce']);
        $this->assign(result,$result);
        $this->display();
    }

}