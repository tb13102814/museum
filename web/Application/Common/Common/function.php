<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/1/17
 * Time: 15:32
 */
function p($arr){
    echo '<pre>'.print_r($arr,true).'<pre>';
}

//校验验证码
function check_verify($code, $id = ""){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}

//无限极分类（父类子类合并）
function unlimitSort($data,$html=' ┠─ ',$sid=0,$level=0){
    $res=array();
    foreach($data as $k=>$v){
        if($v['pid']==$sid){
            $v['level']=$level+1;
            $v['html']=str_repeat($html,$level);
            $res[]=$v;
            $res=array_merge($res,unlimitSort($data,$html,$v['id'],$level+1));
        }
    }
    return $res;
}

//组合多维数组
function rule_merge($rule,$group=0,$pid=0){
    $result=array();
    foreach($rule as $v){
        if(is_array($group)){
            $v['is_checked']=in_array($v['id'],$group)?1:0;
        }
        if($v['pid']==$pid){
            $v['child']=rule_merge($rule,$group,$v['id']);
            $result[]=$v;
        }
    }
    return $result;
}
//截取文章
function cutArticle($data,$cut=0,$str="....")
{

    $data=htmlspecialchars_decode($data);//去除html标记
    //$pattern = "/&[a-zA-Z]+;/";//去除特殊符号
    //$data=preg_replace($pattern,'',$data);
    if(!is_numeric($cut)){
        return $data;
    }
    if($cut>0) {
        $data = mb_strimwidth($data, 0, $cut, $str);
        return $data;
    }
}
function merge_arr($art,$num=0){
    $grandfather=$father=array();
    foreach($art as $k){
        $father[]=$k;
        if(count($father)==4){
            $grandfather[$num]=$father;
            //unset($k);
        }else{
            $grandfather[$num+1]=$father;
        }
    }
    return $grandfather;
}