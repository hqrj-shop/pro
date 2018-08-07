<?php
/**
 * Created by PhpStorm.
 * user: chailiexian
 * Date: 2018/8/6
 * Time: 22:08
 */

namespace app\login\controller;


use think\Request;
use think\Db;

class Index
{
    public function index()
    {
        return view('login');
    }
    public function login()
    {
        $posts = Request::instance()->post();
        //var_dump($posts);

        $password=Db::query('select password from user where user_name=?',[$posts['username']]);
       if($password[0]['password'] == $posts['password']){
            return "ok";
        }else{
            return "lose";
        }


    }
}