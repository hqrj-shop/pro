<?php
/**
 * Created by PhpStorm.
 * User: chailiexian
 * Date: 2018/8/7
 * Time: 0:15
 */

namespace app\user\controller;


class Role
{
    //添加角色
    public function add()
    {
        $rbacObj = new Rbac();
        $data = [
            'name' => '商品管理员',
            'status' => 1,
            'description' => '商品管理员负责商品的查看修改删除等操作',
            'sort_num' => 10,
            'parent_id' => 1
        ];
        $rbacObj->createRole($data);
    }



    public function give_role_premission()
    {
        $rbacObj = new Rbac();
        $rbacObj->assignRolePermission(1, [1, 2]);
    }




}