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

        /*echo "UserInfoFind".BR;
        dump($UserInfoFind);
        echo "UserInfoSelect".BR;
        dump($UserInfoSelect);*/

        //$User = new \Home\Model\UserModel();
        $UserSelect = D('User');
        $UserInfoFind = $UserSelect->where('id=3')->find();
        //$UserSelect->name='jkljkl';
        //$UserSelect->save();
        echo $UserInfoFind['id'].BR;
        echo $UserInfoFind['name'].BR;
        echo $UserInfoFind['age'].BR;
        echo 'UserInfoSelect'.BR;
        $UserSelect = D('User');
        $UserInfoSelect = $UserSelect->field('name,age')->select();
        echo count($UserInfoSelect).BR;
        dump($UserInfoSelect[0]);
        echo $UserInfoSelect[0]['id'].BR;
        echo $UserInfoSelect[0]['name'].BR;
        echo $UserInfoSelect[0]['age'].BR;


        $User = M('User');
        $mapor['name|address'] = 'TESTAR';
        $UserOr = $User->where($mapor)->select();
        echo '$UserOr'.BR;
        dump($UserOr);

        $mapand['name&address'] = array('TESTAR1111','TESTAR','_multi'=>true);
        $UserAnd = $User->where($mapand)->select();
        echo '$UserAnd'.BR;
        dump($UserAnd);

        $UserByName = $User->getByName('testList1');
        echo '$UserByName'.BR;
        dump($UserByName);

        $UserByAge = $User->getByAge('34');
        echo '$UserByAge'.BR;
        dump($UserByAge);

        $UserFieldByName = $User->getFieldByName('testList1','id');
        echo '$UserFieldByName'.BR;
        dump($UserFieldByName);

        $UserSelectSQL = $User->select(false);
        dump($UserSelectSQL);

        //$data['id'] = '6';
        //$data['name'] = 'TESTAR';
        //$data['age'] = '241244';
        //$data['test'] = 'test';
        //$User->where('id<>10')->save($data);
        //$User->where('id=3')->setInc('age',4);

        //$User->where('age>30')->order('age asc')->limit('5')->delete();

        /*$User->create();
        $User->name='TestAR';
        $User->age='45';
        $User->add();*/

/*        //1 字符串查询方式
        $User45 = $User->where('age=45 and name=\'TestAR\'')->select();
        dump($User45);

        //2 使用数组作为查询方式
        $condition['age'] = '24';
        //$condition['name'] = '';
        $User24 = $User->where($condition)->select();
        dump($User24);

        //3 使用对象方式查询
        $conditionClass = new \stdClass();
        $conditionClass->age = '24';
        $UserClass = $User->where($conditionClass)->select();
        dump($UserClass);

        //表达式查询
        $condition['age'] = array('gt',25);
        $User24 = $User->where($condition)->select();
        dump($User24);*/





        /*单条数据创建
         * if($User->create($data)){
            $result = $User->field('age')->add();
            if($result){
                $insertId = $result;
                echo $insertId;
            }
        }*/

        /*//多条数据创建
        $dataList[] = array('name'=>'testList1','age'=>'34');
        $dataList[] = array('name'=>'testList2','age'=>'35');
        $dataList[] = array('name'=>'testList3','age'=>'36');

        $User->addAll($dataList);
        //dump($User);*/



        /*$fields = $UserSelect->getDbFields();
        foreach ($fields as $key => $value){
            echo $key.'  '.$value.BR;
        }*/


        $id = I('get.id','','number_int');
        echo BR.$id.BR;
    }

    public function a(){
        $array['name'] = 'yy';
        $array['email'] = '1257@11.com';
        $array['phone'] = '123321123123';
        //$name = 'Thinkphp';
        $this->assign($array);
        $this->display('a');

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