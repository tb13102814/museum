<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/3/23
 * Time: 12:26
 */

namespace Home\Controller;
use Think\Controller;

class MuseumController extends CommonController
{
    public function index(){
        $museum = M('extra')->where('pid='.I('nid'))->find();
        $museum['introduce']=htmlspecialchars_decode($museum['introduce']);
        //p($museum);exit;
        $this->assign(museum,$museum);
        $this->display();
    }

}
