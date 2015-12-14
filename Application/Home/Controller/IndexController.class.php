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
        echo $_SERVER["HTTP_REFERER"].BR;

        //$User = new \Home\Model\UserModel();
        $UserSelect = D('User');
        $UserInfoFind = $UserSelect->where('id=3')->find();
        //$UserSelect->name='jkljkl';
        //$UserSelect->save();
        echo $UserInfoFind['id'].BR;
        echo $UserInfoFind['name'].BR;
        echo $UserInfoFind['age'].BR;
        echo 'UserInfoSelect'.BR;
        $UserInfoSelect = $UserSelect->field('name,age')->select();
        echo $UserInfoSelect[1]['id'].BR;
        echo $UserInfoSelect[1]['name'].BR;
        echo $UserInfoSelect[1]['age'].BR;

        echo "UserInfoFind".BR;
        dump($UserInfoFind);
        echo "UserInfoSelect".BR;
        dump($UserInfoSelect);




        $fields = $UserSelect->getDbFields();
        /*foreach ($fields as $key => $value){
            echo $key.'  '.$value.BR;
        }*/


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
    //空方法，所有没有定义的action都会跳转至这个方法
    //http://10.0.7.83/Thinkphp_self/trunk/home.php/Index/beijing
    public function _empty($name){
        $this->city($name);
    }
    protected function city($name){
        echo 'City is '.$name.BR;
    }
}