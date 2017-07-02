<?php

/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/3/28
 * Time: 10:01
 */
namespace Admin\Widget;
use Think\Controller;
class MainWidget extends Controller
{
    public function main(){
        $this->main=M('nav')->where(array('type'=>0))->select();
        $this->display('Sysset:main');
    }

}