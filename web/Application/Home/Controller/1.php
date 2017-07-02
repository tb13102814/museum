<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/3/23
 * Time: 12:12
 */

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller
{
    //登陆
    public function login(){
        if(IS_POST){
            //p($_POST);exit;
            $phone=I('phone');
            $pwd=I('pwd');
            $verify=I('verify');
            if(!check_verify($verify)){
                $this->ajaxReturn(0);
            }
            $user=M('user')->where(array('tel'=>$phone,'password'=>$pwd))->find();
            if(!$user){
                $this->ajaxReturn(1);
            }else{
                session(C('USER_AUTH_KEY'),$user['id']);
                session('tel',$user['tel']);
                $this->ajaxReturn(2);
            }
        }else{
            $this->display();
        }
    }
    //注册
    public function register(){
        if(IS_POST){
            $data=array(
                'username'=>I('username'),
                'tel'=>I('phone'),
                'password'=>I('pwd'),
                'email'=>I('email'),
            );
            if(M('user')->where(array('tel'=>$data['tel']))->find()){
                $this->ajaxReturn(0);
            }
            if(M('user')->add($data)){
                $this->ajaxReturn(1);
            }else{
                $this->ajaxReturn(2);
            }
        }else{
            $this->display();
        }
    }
    //验证码显示
    public function verify(){
        $config = array(
            'fontSize' =>25,  // 验证码字体大小
            'length'   =>4,     // 验证码位数
            'useNoise' =>true,// 验证码杂点
            'imageH'   =>'45',
        );
        $Verify = new\Think\Verify($config);
        $Verify->entry();
    }
    //验证码检验
    public function check_verify(){
        $verify=I('verify');
        if(!check_verify($verify)){
            $this->ajaxReturn(0);
        }else{
            $this->ajaxReturn(1);
        }
    }
    //注销
    public function logout(){
       if($_SESSION[C('USER_AUTH_KEY')]){
	   session_destroy();
	   $this->redirect('Index/index');
       }
    }
}
