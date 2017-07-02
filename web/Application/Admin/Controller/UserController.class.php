<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/1/5
 * Time: 15:31
 */

namespace Admin\Controller;
use Think\Controller;

class UserController extends CommonController
{
      //用户列表视图
      public function index(){
          $this->display();
      }
}