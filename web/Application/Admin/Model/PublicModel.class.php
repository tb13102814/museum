<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2017/4/28
 * Time: 16:15
 */

namespace Admin\Model;
use Think\Model;

class PublicModel extends Model
{
    public function delOperation($table,$where){
        return M('$table')->where($where)->delete();
    }

}