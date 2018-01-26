<?php
/**
 * Created by MisterBigbooo.
 * User: Zeno
 * Date: 2018/1/25
 * Time: 下午5:22
 */
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{


    public function index(){
        $this->display();
    }

    public function check(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (!trim($username)){
            show(0,'用户名不能为空');
        }
        if (!trim($password)){
            show(0,'密码不能为空');
        }

    }



}