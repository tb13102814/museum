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
        }else{
            $this->error('已经退出了！！');
        }
    }
	//个人中心
    public function confirm(){
        if(IS_POST){
            //p($_POST);exit;
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = '';
            $info = $upload->uploadOne($_FILES['file']);
            $icon = $info['savepath'] . $info['savename'];
            if (!$info) {
                $this->error($upload->getError());
            }else {
                $data['user_type'] = I('open') == 'on' ? 1 : 0;
                $data = array(
                    'username' => I('username'),
                    'password' => I('password'),
                    'tel' => I('tel'),
                    'email' => I('email'),
                    'address' => I('address'),
                    'img'=> $icon,
                );
                //p($data);exit;
                if (M('user')->where(array('id' => $_SESSION[C('USER_AUTH_KEY')]))->save($data)) {
                    $this->redirect('User/confirm');
                }
            }
        }else{
            $person=M('user')->where(array('id'=>$_SESSION[C('USER_AUTH_KEY')]))->select();
            $this->assign(person,$person[0]);
            $this->display();
        }
    }

}
