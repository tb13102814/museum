<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2016/12/26
 * Time: 10:02
 */

namespace Admin\Controller;
use Think\Controller;
class LoginController extends  Controller{
    //登陆视图
    public function  index()
    {
	$this->display();
    }
    //登陆操作处理
    public function runLogin()
    {
        if(IS_POST){
            $username=I('username');
            $password=I('password');
            $verify  =I('verify');
            //p($verify);exit;
            if(!check_verify($verify)){
                $this->error('验证码错误！');
            }
            $adminor=M('admin')->where(array('adminor'=>$username,'password'=>$password))->find();
            if(!$adminor){
                $this->error('登陆失败，请联系管理员','',2);
            }else{
                 $data['login_ip']=get_client_ip();
                 $data['last_login_time']=time();
                if(M('admin')->where(array('id'=>$adminor['id']))->save($data)){
                    M('admin')->where(array('id'=>$adminor['id']))->setInc('login_num');
                }
                session(C('USER_AUTH_KEY'),$adminor['id']);
                session('admin',$adminor['adminor']);
                $this->success('登陆成功',U('Index/Index'),3);
            }
        }

    }
    //注销
    public function logout(){
        if($_SESSION[C('USER_AUTH_KEY')]){
            session_destroy();
            $this->redirect('Login/index');
        }else{
            $this->error('已经退出了！！');
        }
    }
    //输出验证码
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
 }
