<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/29
 * Time: 12:19
 */

namespace Home\Widget;
use Think\Controller;

class BottomWidget extends Controller
{
    public function bottom(){
        //$this->bottom=M('nav')->where(array('type'=>1))->select();
        $this->display('Appreciate:bottom');
    }

}