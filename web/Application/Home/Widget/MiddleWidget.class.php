<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/3/28
 * Time: 10:07
 */

namespace Home\Widget;
use Think\Controller;

class MiddleWidget extends Controller
{
    public function middle(){
        //$this->bottom=M('nav')->where(array('type'=>1))->select();
        $this->display('Appreciate:middle');
    }

}