<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/12
 * Time: 11:04
 */

namespace Home\Widget;
use Think\Controller;


class RightWidget extends Controller
{
    public function right(){
        $this->r_top=M('art')->field('id,title')->limit(5)->select();
        $this->r_middle=M('appreciate')->field('id,title')->limit(5)->select();
        $this->display('Appreciate:right');
    }
}