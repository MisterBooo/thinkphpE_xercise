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
        echo 'check';
    }



}