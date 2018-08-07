<?php
/**
 * Created by PhpStorm.
 * User: chailiexian
 * Date: 2018/8/7
 * Time: 0:15
 */

namespace app\user\controller;


use think\Request;

class User
{
public function index()
{
    return view('register');
}
public function register()
{
    $posts = Request::instance()->post();
    $info  = Db::table('user')->where('user_name',$posts['user_name'])->find();
    $data=[
        'user_name'=>$posts['user_name'],
        'password' =>$posts['password'],
        'status'   =>1
    ];
    if(empty($info)){
        $res = Db::table('user')->insert($data);
        if($res){
            return ['result'=>1,'msg'=>'注册成功'];
        }else{
            return ['result'=>0,'msg'=>'注册失败'];
        }
    }else{
        return ['result'=>0,'msg'=>'用户名不能重复'];
    }
}

    public function give_user_role()
    {
        $rbacObj = new Rbac();
        $rbacObj->assignUserRole(1, [1, 2]);
    }
}