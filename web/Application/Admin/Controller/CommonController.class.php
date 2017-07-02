<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/1/17
 * Time: 12:47
 */

namespace Admin\Controller;
use Think\Controller;
use Think\Auth;

class CommonController extends  Controller
{
    public function _initialize(){
        if(!isset($_SESSION[C('USER_AUTH_KEY')])){
            $this->redirect('Login/index');
        }
        //无需验证的权限
        $no_check=array(
            'Index/index',
        );
        if(in_array(CONTROLLER_NAME.'/'.ACTION_NAME,$no_check)){
            return true;
        }
        $Auth=new \Think\Auth();
        $module_name=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        if($_SESSION['admin']==C('ADMIN_AUTH_KEY')){  //以用户名来判断是否是超级管理员，绕过验证，不用用户组来判断的原因是用户组有时候是中文  ，而且常删除或更改。
            return true;
        }
        if(!$Auth->check($module_name,$_SESSION[C('USER_AUTH_KEY')])){
            $this->error('没有权限');
        }

    }

}
