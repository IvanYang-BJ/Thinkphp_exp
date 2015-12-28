<?php
/**
 * Created by PhpStorm.
 * User: egret
 * Date: 2015/11/18
 * Time: 16:09
 */
/*
 * 前置和后置操作指的是在执行某个操作方法之前和之后会自动调用的方法，不过仅对访问控制器有效。
 * */
namespace Home\Controller;

use Think\Controller;
define('BR','<br>');
define("DEFAULT_VERSION", "v2.5.6-105");
define("EGRET_URL", "http://update.runtime.egret.com/egret-runtime/v1/");
define('LATEST', 'v1.5.5-146');
class TestController extends Controller
{

    public function _before_echoTest(){
        echo 'before<br/>';
    }
    public function _before_echoTestSecond(){
        echo 'before echo Test Second!<br/>';
    }
    public function echoTest(){


    }

    public function echoTestSecond(){
        echo 'echoTestSecond'.BR;
    }
    public function _after_echoTestSecond(){
        echo 'After echo Test Second!<br/>';
    }
    public function _after_echoTest(){
        echo 'after<br/>';
    }
    public function resultSuccess(){
        echo "Success".BR;
    }

    public function resultError(){
        echo "Error".BR;
    }
}