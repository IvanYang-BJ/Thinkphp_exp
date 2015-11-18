<?php
namespace Home\Controller;
use Think\Controller;
define('BR','<br>');
class IndexController extends Controller {
    public function index(){
        $home_config_name = C('CONFIG_NAME');
        $home_config_value = C('CONFIG_VALUE');
        $home_config_null = C('CONFIG_NULL',null,'Not Config');
        $home_config_array_item_one = C('CONFIG_ARRAY.CONFIG_ARRAY_ITEM_ONE');

        C('CONFIG_ARRAY.CONFIG_ARRAY_ITEM_TWO','33333');
        $home_config_array_item_two = C('CONFIG_ARRAY.CONFIG_ARRAY_ITEM_TWO');
        $this->show('CONFIG_NAME is '.$home_config_name.'<br>');
        $this->show('CONFIG_VALUE is '.$home_config_value.'<br>');
        $this->show('CONFIG_NULL is '.$home_config_null.'<br>');
        $this->show('home_config_array_item_one is '.$home_config_array_item_one.'<br>');
        $this->show('home_config_array_item_two is '.$home_config_array_item_two.'<br>');


        $username = C('USERNAME');
        $password = C('PASSWORD');
        $this->show('Username is '.$username.'<br>');
        $this->show('Password is '.$password.'<br>');
        $databaseName = C('DATABASE_NAME');
        $databaseUsername = C('DATABASE_USERNAME');
        $databasePassword = C('DATABASE_PASSWORD');
        $this->show('Database Name is '.$databaseName.BR);
        $this->show('Database Username is '.$databaseUsername.BR);
        $this->show('Database Password is '.$databasePassword.BR);

        //http://localhost/thinkphp_self/?m=Home&c=Index&a=index&var_normal=sdfsafadsfads
        $var_normal = $_GET['var_normal'];
        $this->show('var_normal is '.$var_normal.BR);
        //http://localhost/thinkphp_self/home.php/Index/index?var_pathinfo=dsfadjksfjdksa;jfdksla;
        $var_pathinfo = $_GET['var_pathinfo'];
        $this->show('var_pathinfo is '.$var_pathinfo.BR);
        $this->show('URL_MODEL is '. C(URL_MODEL).BR);
        $this->show('Begin Behavior'.BR);
        tag('my_tag',$databaseName);
        //\Think\Hook::listen('my_tag');
        $this->show('End Behavior'.BR);

        $path_parts = pathinfo("/www/htdocs/index.html");
        echo $path_parts["dirname"] . BR;
        echo $path_parts["basename"] . BR;
        echo $path_parts["extension"] . BR;
    }
}