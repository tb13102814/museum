<?php
/**
 * Created by PhpStorm.
 * User: GD01302
 * Date: 2016/12/26
 * Time: 14:56
 */
namespace Admin\Model;
use Think\Model\RelationModel;
class AdminModel extends RelationModel{
    //关联查询管理员所属的用户组
    protected $tableName='admin';
    protected $_link=array(
        'auth_group'=>array(
            'mapping_type'=>self::MANY_TO_MANY,
            'foreign_key'=>'uid',
            'relation_foreign_key'=>'group_id',
            'relation_table'=>'m_auth_group_access',
        )
    );
}