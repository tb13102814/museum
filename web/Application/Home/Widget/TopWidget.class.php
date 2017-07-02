<?php

/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/3/28
 * Time: 10:01
 */
namespace Home\Widget;
use Think\Controller;
class TopWidget extends Controller
{
    public function top(){
        //$this->main=M('nav')->where(array('type'=>0))->select();
        $this->display('Appreciate:top');
    }

}