<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/3/23
 * Time: 11:51
 */

namespace Home\Controller;
use Think\Controller;

class AppreciateController extends CommonController
{
    //艺术品鉴赏视图
    public function index(){
        //$appreciate=M('appreciate')->select();
        $count=M('appreciate')->count();
        $Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数k
        $Page->setConfig('header','共%TOTAL_ROW%条');
        $Page->setConfig('first','首页');
        $Page->setConfig('last','共%TOTAL_PAGE%页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $limit=$Page->firstRow.','.$Page->listRows;
        $appreciate=M('appreciate')->order('create_time DESC')->limit($limit)->select();
        foreach($appreciate as $k=>$v){
            $appreciate[$k]['introduce']=htmlspecialchars_decode($v['introduce']);
        }
        $this->appreciate=$appreciate;
        $this->page=$Page->show();
        $this->display();
    }
    //文章详情页
    public function article(){
        //p($_GET);exit;
        if(IS_GET){
            $m = M('appreciate');
            $result = $m->where('id='.I('id'))->find();
            $result['introduce']=htmlspecialchars_decode($result['introduce']);
            $this->assign(result,$result);
	    $this->comment=D('CommentView')->where(array('aid'=>I('id'),'pid'=>0))->select();
            $this->display();
        }
    }
    //评论发表
    public function replay(){
        if(IS_POST){
            if(!isset($_SESSION['tel'])){
                $this->redirect('User/login');
            }
            $data=array(
                'uid'=>$_SESSION[C('USER_AUTH_KEY')],
                'aid'=>I('aid'),
                'comment'=>I('comment'),
                'replay_time'=>time(),
		'pid'=>I('pid')
            );
	    $maxcid=M('comment')->where(array('aid'=>I('aid'),'pid'=>I('pid')))->field(array('MAX(cid)'=>mcid))->select();
	    $data['cid']=$maxcid[0][mcid]+1;
            if(M('comment')->add($data)){
                $this->ajaxReturn(1);
            }else{
                $this->ajaxReturn(0);
            }
        }else{
             $aid=I('aid');
	     $this->assign('aid',$aid);
	     $this->display();
	}
    }
	//点击次数
    public function clicknum(){
        if(IS_AJAX){
            $cid=I('id');
            $where=array('id'=>$cid);
            M('comment')->where($where)->setInc('clicknum');
            $data['clicknum']=M('comment')->where($where)->getField('clicknum');
            $data['status']=1;
            $this->ajaxReturn($data);
        }
    }
	public function watch(){
        $aid=I('aid');
        $cid=I('cid');
        //p($cid);exit;
        $this->total=D('CommentView')->where(array('aid'=>$aid,'pid'=>$cid))->select();
        //p($total);exit;
        $this->display();
    }
}
