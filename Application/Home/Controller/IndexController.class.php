<?php
/**
 * Created by MisterBigbooo.
 * User: Zeno
 * Date: 2018/1/25
 * Time: 下午3:24
 */

namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller{

//    public function _before_index(){
//        echo '_before_index<br />';
//    }

    public function index($id = 0){
//        echo 'ok<br />';
//        print_r($_GET);
        echo "id :  $id ";
    }


//    public function _after_index(){
//        echo '_after_index<br />';
//    }
//
//    public function test(){
//
//        echo 'test';
//    }
}