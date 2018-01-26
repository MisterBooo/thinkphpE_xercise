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

    public function check() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!trim($username)) {
            return show(0,'LoginController---用户名不能为空');
        }
        if(!trim($password)) {
            return show(0,'LoginController---密码不能为空');
        }

    }



}