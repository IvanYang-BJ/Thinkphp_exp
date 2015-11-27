<?php
//访问控制器负责外部交互响应，通过URL请求响应，
//而事件控制器负责内部的事件响应，并且只能在内部调用，所以是和外部隔离的。
namespace Home\Controller;
use Think\Controller;
define('BR','<br>');
class IndexController extends Controller {
    public function index(){
        //A方法说明：
        //默认情况下，A方法实例化的是默认控制器层（Controller），

        //$userEvent = new \Home\Event\UserEvent();   //实例化方法正确
        //$userEvent = A(Event/User);               //实例化方法错误
        $userEvent = A('User','Event');               //实例化方法正确
        $userEvent->login();
        //$test= A(Test);                             //实例化方法正确
        $test = new \Home\Controller\TestController();//实力化方法正确
        echo BR;
        $test->echoTest();
        echo $_SERVER["HTTP_REFERER"];

        $id = I('get.id','','number_int');
        echo BR.$id.BR;
    }
    public function resultSuccess(){
        echo "Success".BR;
        return 'success';
    }

    public function resultError(){
        echo "Error".BR;
    }
}