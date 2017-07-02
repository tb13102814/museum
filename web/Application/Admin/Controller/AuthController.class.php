<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/1/17
 * Time: 17:45
 */

namespace Admin\Controller;
use Think\Controller;
class AuthController extends CommonController
{
    //管理员列表
    public function admin(){
        $this->adminor=D('Admin')->relation(true)->select();
        //p($this->adminor);exit;
        $this->display();
    }
    //添加管理员及表单处理
    public function addAdmin(){
        if(IS_POST){
             $data=array(
                 'adminor'=>I('fullname'),
                 'password'=>I('password'),
                 'img'=>I('file-input'),
                 'login_num'=>0,
                 'reg_time'=>time()
             );
            //p($_POST);exit;
            if(!isset($_POST['role_id'])){
                $this->error('请选择用户组...');
            }
            if(M('admin')->where(array('adminor'=>$data['adminor']))->find()){
                $this->error('用户名已存在...');
            }
            if($uid=M('admin')->add($data)){
                foreach($_POST['role_id'] as $v){
                    $result=array(
                        'uid'=>$uid,
                        'group_id'=>$v,
                    );
                    M('auth_group_access')->add($result);
                };
                $this->success('新用户添加成功!',U('Auth/admin'));
            }else{
                $this->error('添加失败...');
            }
        }else{
            $this->group=M('auth_group')->field(array('id','title'))->select();
            $this->display('addAdmin');
        }
    }
    //修改管理员及表单处理
    public function editAdmin(){
        if(IS_GET){
            if(!isset($_GET['id'])){
                return false;
            }
            $aid=I('id',0,'intval');
            $user=M('admin')->find($aid);
            $group=M('auth_group')->select();
            $user_group=M('auth_group_access')->where(array('uid'=>$aid))->getField('group_id',true);
            foreach($group as $k=>$v){
                    if(in_array($v['id'],$user_group)){
                        $group[$k]['is_checked']=0;
                    }else{
                        $group[$k]['is_checked']=1;
                    }
            }
            $this->group=$group;
            $this->assign('user',$user);
            $this->display('editAdmin');
        }else if(IS_POST){
            $uid=I("uid",0,"intval");
            if(!isset($_POST['role_id'])){
                $this->error('请选择用户组...');
            }else{
                M('auth_group_access')->where(array('uid'=>$uid))->delete();
                foreach($_POST['role_id'] as $v){
                    $result=array(
                        'uid'=>$uid,
                        'group_id'=>$v,
                    );
                    if(M('auth_group_access')->add($result)){
                        $tmp=1;
                    }
                }
                $data=array(
                    'adminor'=>I('fullname'),
                    'password'=>I('password'),
                    'img'=>I('file-input'),
                );
                if(M('admin')->where(array('id'=>$uid))->save($data)){
                    $this->success('用户修改成功！',U('Auth/admin'),2);
                }else{
                    $this->error('用户修改失败...');
                }
            }
        }
    }
    //删除管理员
    public function deleteAdmin(){
        if(IS_AJAX){
            if(!isset($_POST['did'])){
                return false;
            }
            $uid=I('did',0,'intval');
            if(M('admin')->delete($uid)){
                M('auth_group_access')->where(array('uid'=>$uid))->delete();
                $data['status']=0;
                $this->ajaxReturn($data);
            }else{
                $data['status']=1;
                $this->ajaxReturn($data);
            }
        }
    }
    //用户组列表
    public function group(){
        $this->group=M('auth_group')->select();
        $this->display();
    }
    //添加用户组及表单处理
    public function addGroup(){
        if(IS_POST){
            $data=array(
                'title'=>I('title'),
                'status'=>I('status')=='on'?'1':'0',
                'rules'=>implode(',',I('check_rule')),
            );
            //p($data);exit;
            if(M('auth_group')->where(array('title'=>$data['title']))->find()){
                $this->error('用户组名称已存在...');
            }
            if(M('auth_group')->add($data)){
                $this->success('用户组添加成功',U('Auth/Group'));
            }else{
                $this->error('添加失败...');
            }
        }else{
            $rule=M('auth_rule')->select();
            $this->result=unlimitSort($rule,'&nbsp;&nbsp;&nbsp; ┠─ ');
            //$group = M('auth_group')->getField('rules',true);
            //$group=explode(',',$group[0]);
            $this->res=rule_merge($rule);
            $this->display(addGroup);
        }
    }
    //授权编辑用户组及表单处理
    public function editGroup(){
        if(IS_GET) {
            if (!isset($_GET['id'])) {
                return false;
            }
            $gid = I('id', 0, 'intval');
            $rule=M('auth_rule')->select();
            $user_group = M('auth_group')->where('id='.$gid)->select();
            $group=explode(',',$user_group[0]['rules']);
            $this->res=rule_merge($rule,$group);
            //p($this->res);exit;
            $this->assign('user_group',$user_group);
            $this->display('editGroup');
        }else if(IS_POST){
            $gid=I('gid',0,'intval');
            $data=array(
                'title'=>I('groupname'),
                'status'=>I('status')=='on'?'1':'0',
                'rules'=>implode(',',I('check_rule')),
            );
            if(M('auth_group')->where('id='.$gid)->save($data)){
                $this->success('授权编辑成功');
            }else{
                $this->error('授权编辑失败');
            }

        }
    }
    //删除用户组
    public function deleteGroup(){
        if(IS_AJAX){
            if(!isset($_POST['did'])){
                return false;
            }
            $gid=I('did',0,'intval');
            if(M('auth_group')->delete($gid)){
                M('auth_group_access')->where(array('group_id'=>$gid))->delete();
                $data['status']=0;
                $this->ajaxReturn($data);
            }else{
                $data['status']=1;
                $this->ajaxReturn($data);
            }
        }
    }
    //添加后台权限及表单处理
    public function addRule(){
        if(IS_POST){
            $data=array(
                'pid'=>I('pid'),
                'title'=>I('title'),
                'name'=>I('name'),
                'create_time'=>time(),
            );
            if(M('auth_rule')->add($data)){
                $this->success('添加成功');
            }else{
                $this->error('添加失败');
            }
        }else{
            $data=M('auth_rule')->where(array('pid'=>0))->select();
            $this->assign('data',$data);
            $rule=M('auth_rule')->select();
            $this->result=unlimitSort($rule,'&nbsp;&nbsp;&nbsp; ┠─ ');
            $this->display('addRule');
        }
    }
    //编辑权限
    function editRule(){
        if(IS_GET){
            if(!isset($_GET['id'])){
                return false;
            }
            $rid=I('id',0,'intval');
            $rule=M('auth_rule')->find($rid);
            $this->ajaxReturn($rule);
        }else{
            $rid=I('rid',0,'intval');
            $data=array(
                'title'=>I('tit'),
                'condition'=>I('condition'),
            );
            if(M('auth_rule')->where('id='.$rid)->save($data)){
                $this->success('规则修改成功');
            }else{
                $this->error('规则修改失败');
            }
        }
    }
}
