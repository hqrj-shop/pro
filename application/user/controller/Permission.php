<?php
/**
 * Created by PhpStorm.
 * User: chailiexian
 * Date: 2018/8/7
 * Time: 0:14
 */

namespace app\user\controller;


class Permission
{
    public function add()
    {
        $rbacObj = new Rbac();
        $data = [
            'name' => '商品列表',
            'status' => 1,
            'description' => '查看商品的所有列表',
            'path' => '/index/goods/list',
            'create_time' => time()
        ];
        $rbacObj->createPermission($data);
    }

}