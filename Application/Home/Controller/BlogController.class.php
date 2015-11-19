<?php
/**
 * Created by PhpStorm.
 * User: egret
 * Date: 2015/11/19
 * Time: 13:31
 */

namespace Home\Controller;

use Think\Controller;
define('BR','</br>');
class BlogController extends Controller
{
    //http://localhost/thinkphp_self/home.php/blog/read/id/2
    public function read($id=0){
        echo 'id = '.$id.BR;
        echo __EXT__;
    }
    //http://localhost/thinkphp_self/home.php/blog/archive/year/1000/month/10
    public function archive($year=2015,$month=11){
        echo 'year = '.$year.BR;
        echo 'month = '.$month.BR;
    }
}