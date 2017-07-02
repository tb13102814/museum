<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/1/12
 * Time: 11:22
 */

namespace Admin\Controller;
use Think\Controller;

class ContentController extends CommonController
{
    //图文管理视图
    public function index(){
        $this->display();
    }
    //艺术品陈列视图
    public function art(){
        $this->art=M('art')->order('sort ASC')->select();
        $this->display();
    }
    //艺术品添加
    public function addArt()
    {
        if (IS_AJAX) {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = '';
            $info = $upload->upload();
            $u = C('UPLOAD_PICTURE') . $info['file']['savepath'] . $info['file']['savename'];
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $this->ajaxReturn($u);
            }
        }else if(IS_POST){
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = '';
            $info = $upload->uploadOne($_FILES['icon']);
            $icon = $info['savepath'] . $info['savename'];
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $data = array(
                    'title' => I('title'),
                    'icon' => $icon,
                    'open_with' => I('open_with'),
                    'introduce' => I('introduce'),
                    'sort' => I('sort'),
                    'pid' => I('pid'),
                    'create_time' => time(),
                );
                //p($data);
                if(M('art')->add($data)){
                    $this->success('艺术品添加成功',U('Content/art'));
                }else{
                    $this->error('艺术品添加失败...');
                }
            }
        }else{
            $select = M('nav')->where(array('type'=>0))->order('sort DESC')->select();
            $this->select = unlimitSort($select, '&nbsp;&nbsp;&nbsp; ┠─ ');
            //$nav_art=M('nav')->where(array('pid'=>5))->select();
            //$this->assign('nav_art',$nav_art);
            $this->display('addArt');
        }
    }
    //艺术品删除操作
    public function deleteArt(){
        if(IS_AJAX){
            if(!isset($_POST['did'])){
                return false;
            }
            $gid=I('did',0,'intval');
            if(M('art')->delete($gid)){
                $data['status']=0;
                $this->ajaxReturn($data);
            }else{
                $data['status']=1;
                $this->ajaxReturn($data);
            }
        }
    }
    //艺术品交易视图
    public function money(){
        $this->money=M('goods')->order('sort ASC')->select();
        $this->display();
    }
    //添加交易物品
    public function addMoney(){
        if (IS_AJAX) {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = '';
            $info = $upload->upload();
            $u = C('UPLOAD_PICTURE') . $info['file']['savepath'] . $info['file']['savename'];
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $this->ajaxReturn($u);
            }
        }else if(IS_POST){
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = '';
            $info = $upload->uploadOne($_FILES['icon']);
            $icon = $info['savepath'] . $info['savename'];
            if (!$info) {
                $this->error($upload->getError());
            }else {
                $data = array(
                    'title' => I('title'),
                    'price'=>I('price'),
                    'info'=>I('info'),
                    'icon' => $icon,
                    'open_with' => I('open_with'),
                    'introduce' => I('introduce'),
                    'sort' => I('sort'),
                    'pid' => I('pid'),
                    'create_time' => time(),
                );
                //p($data);
                //p($_POST);exit;
                if(M('goods')->add($data)){
                    $this->success('拍卖品添加成功',U('Content/money'));
                }else{
                    $this->error('拍卖品添加失败...');
                }
            }
        }else{
            $select = M('nav')->where(array('type'=>0))->order('sort DESC')->select();
            $this->select = unlimitSort($select, '&nbsp;&nbsp;&nbsp; ┠─ ');
            $this->display('addMoney');
        }
    }
    //商品删除
    public function deleteMoney(){
        if(IS_AJAX){
            if(!isset($_POST['did'])){
                return false;
            }
            $gid=I('did',0,'intval');
            if(M('goods')->delete($gid)){
                $data['status']=0;
                $this->ajaxReturn($data);
            }else{
                $data['status']=1;
                $this->ajaxReturn($data);
            }
        }
    }
    //艺术鉴赏视图
    public function appreciate(){
        $this->appreciate=M('appreciate')->order('create_time DESC')->select();
        $this->display();
    }
    //鉴赏品添加
    public function addAppreciate(){
        if (IS_AJAX) {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = '';
            $info = $upload->upload();
            $u = C('UPLOAD_PICTURE') . $info['file']['savepath'] . $info['file']['savename'];
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $this->ajaxReturn($u);
            }
        }else if(IS_POST){
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = '';
            $info = $upload->uploadOne($_FILES['icon']);
            $icon = $info['savepath'] . $info['savename'];
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $data = array(
                    'title' => I('title'),
                    'icon' => $icon,
                    'open_with' => I('open_with'),
                    'introduce' => I('introduce'),
                    'author' => I('author'),
                    'create_time' => time(),
                );
                //p($data);
                if(M('appreciate')->add($data)){
                    $this->success('鉴赏艺术品添加成功',U('Content/appreciate'));
                }else{
                    $this->error('鉴赏艺术品添加失败...');
                }
            }
        }else{
            $this->display('addAppreciate');
        }
    }
    //鉴赏品删除操作
    public function deleteAppreciate(){
        if(IS_AJAX){
            if(!isset($_POST['did'])){
                return false;
            }
            $gid=I('did',0,'intval');
            if(M('appreciate')->delete($gid)){
                $data['status']=0;
                $this->ajaxReturn($data);
            }else{
                $data['status']=1;
                $this->ajaxReturn($data);
            }
        }
    }
    //系统其他管理视图
    public function extra(){
        $this->extra=M('extra')->select();
        $this->display();
    }
    //系统内容添加
    public function addExtra(){
        if (IS_AJAX) {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = '';
            $info = $upload->upload();
            $u = C('UPLOAD_PICTURE') . $info['file']['savepath'] . $info['file']['savename'];
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $this->ajaxReturn($u);
            }
        }else if(IS_POST){
            $data = array(
                'title' => I('title'),
                'pid'=>I('pid'),
                'open_with' => I('open_with'),
                'introduce' => I('introduce'),
                'create_time' => time(),
            );
            //p($data);exit;
            if(M('extra')->add($data)){
                $this->success('系统文章发布成功',U('Content/extra'));
            }else{
                $this->error('系统文章发布失败...');
            }
        }else{
            $this->select=M('nav')->where('id IN(7,13)')->select();
            $this->display('addExtra');
        }
    }
	//首页艺术品陈列视图
    public function first(){
        $this->art=M('art')->where('pid IN(100,200)')->order('sort ASC')->select();
        $this->display();
    }
    //首页艺术品添加
    public function addFirst()
    {
         if(IS_POST){
            // p($_POST);exit;
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Public/Uploads/';
            $upload->savePath = '';
            $info = $upload->uploadOne($_FILES['icon']);
            $icon = $info['savepath'] . $info['savename'];
            if (!$info) {
                $this->error($upload->getError());
            }else {
                $data = array(
                    'title' => I('title'),
                    'icon' => $icon,
                    'open_with' => I('open_with'),
                    'introduce' => I('introduce'),
                    'sort' => I('sort'),
                    'pid' => I('pid'),
                    'create_time' => time(),
                );
                //p($data);
                if(M('art')->add($data)){
                    $this->success('首页艺术品添加成功',U('Content/first'));
                }else{
                    $this->error('首页艺术品添加失败...');
                }
            }
        }else{
            $this->display('addFirst');
        }
    }
    //首页艺术品删除操作
    public function deleteFirst(){
        if(IS_AJAX){
            if(!isset($_POST['did'])){
                return false;
            }
            $gid=I('did',0,'intval');
            if(M('art')->delete($gid)){
                $data['status']=0;
                $this->ajaxReturn($data);
            }else{
                $data['status']=1;
                $this->ajaxReturn($data);
            }
        }
    }
}
