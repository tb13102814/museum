<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //前台首页视图
    public function index()
    {
	$this->center=M('art')->where(array('pid'=>100))->order('sort DESC')->select();
	$this->art=M('art')->limit(7)->select();
        $this->display();
    }
}
