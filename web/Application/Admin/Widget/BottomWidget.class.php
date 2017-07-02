<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/3/28
 * Time: 10:07
 */

namespace Admin\Widget;
use Think\Controller;

class BottomWidget extends Controller
{
    public function bottom(){
        $this->bottom=M('nav')->where(array('type'=>1))->select();
        $this->display('Sysset:bottom');
    }

}