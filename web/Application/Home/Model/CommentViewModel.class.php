<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2016/12/26
 * Time: 14:56
 */
namespace Home\Model;
use Think\Model\ViewModel;
class CommentViewModel extends ViewModel{
    public $viewFields=array(
        'comment'=>array(
            'id','aid','cid','comment','replay_time','clicknum',
            '_type'=>'LEFT'
        ),
        'user'=>array(
            'username','img',
            '_on'=>'user.id=comment.uid'
        ),
    );
}
