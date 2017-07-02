<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/3/23
 * Time: 12:20
 */

namespace Home\Controller;
use Think\Controller;
#use Common\Controller\CommonController;

class TradingController extends CommonController
{
    //艺术品商店视图
    public function index(){
      $this->goods=M('goods')->select();
      //print $goods;
      $this->display();
    }
    //详情展示视图
    public function show(){
        $m = M('goods');
        $result = $m->where('id='.I('id'))->find();
        $result['introduce']=htmlspecialchars_decode($result['introduce']);
        $this->assign(result,$result);
        $this->display();
    }

}
