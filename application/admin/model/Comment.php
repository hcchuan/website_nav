<?php
/**
 *  Guojiz网址导航系统
 *	www.guojiz.com
 *  作者：梦雨
 *  @ QQ50361804
 */
namespace app\admin\model;

use think\Model;
class Comment extends Model
{
   
    function edit($data)
    {
        $result = $this->isUpdate(true)->allowField(true)->save($data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    function batches($act, $params)
    {
        if ($act == 'delete') {
            $result = $this->destroy($params);
        }
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}