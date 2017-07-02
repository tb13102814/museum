<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2016/12/29
 * Time: 14:44
 */

namespace Admin\Controller;
use Think\Controller;

class SyssetController extends CommonController
{
     //导航管理视图
     public function index(){
             $this->nav = M('nav')->order('id DESC')->select();
             $this->display();
     }
    //新增导航视图
    public function addNav()
    {
        if (IS_POST) {
            $data = array(
                'type'=>I('nav_style'),
                'title' => I('nav_title'),
                'url' => I('nav_url'),
                'open_with' => I('open_with') == '_bank' ? 1 : 0,
                'sort' => I('nav_sort'),
                'pid' => I('pid'),
            );
            if (M('nav')->add($data)) {
                $this->success('导航添加成功', U('Sysset/index'));
            } else {
                $this->error('导航添加失败...');
            }
        } else {
            //$select = M('nav')->order('id DESC')->select();
            //$this->select = unlimitSort($select, '&nbsp;&nbsp;&nbsp; ┠─ ');
            $this->display('addNav');
        }
    }
    //编辑修改导航
    public function editNav(){
        if(IS_GET){
            if (!isset($_GET['id'])) {
                return false;
            }
            $nid = I('id', 0, 'intval');
            $nav=M('nav')->find($nid);
            $this->ajaxReturn($nav);
        }else{
            $nid=I('nav_id',0,'intval');
            $data=array(
                'title'=>I('tit'),
                'sort'=>I('sort'),
            );
            if(M('nav')->where('id='.$nid)->save($data)){
                $this->success('导航修改成功');
            }else{
                $this->error('导航修改失败');
            }
        }
    }
    //删除操作
    public function deleteNav(){
        if(IS_AJAX){
            if(!isset($_POST['did'])){
                return false;
            }
            $gid=I('did',0,'intval');
            if(M('nav')->delete($gid)){
                $data['status']=0;
                $this->ajaxReturn($data);
            }else{
                $data['status']=1;
                $this->ajaxReturn($data);
            }
        }
    }
}
