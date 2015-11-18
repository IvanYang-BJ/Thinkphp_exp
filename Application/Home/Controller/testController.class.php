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
class TestController extends Controller
{
    public function _before_echoTest(){
        echo 'before<br/>';
    }

    public function echoTest(){
        echo'echoTest'.BR;
    }

    public function _after_echoTest(){
        echo 'after<br/>';
    }

}