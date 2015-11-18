<?php
/**
 * Created by PhpStorm.
 * User: egret
 * Date: 2015/11/18
 * Time: 16:18
 */
//访问控制器负责外部交互响应，通过URL请求响应，
//而事件控制器负责内部的事件响应，并且只能在内部调用，所以是和外部隔离的。


namespace Home\Event;


class UserEvent
{
    public function login(){
        echo "Login Logic here";
    }

    public function logout(){
        echo "Logout Logic here";
    }
}