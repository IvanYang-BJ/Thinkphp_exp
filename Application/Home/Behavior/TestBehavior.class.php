<?php
/**
 * Created by PhpStorm.
 * User: egret
 * Date: 2015/11/17
 * Time: 18:25
 */

namespace Home\Behavior;


class TestBehavior
{
    public function run(&$params){
       echo "In TestBehavior";
        /* if(C('INDEX')) {
            echo 'RUNTEST BEHAVIOR '.$params;
        }
        else{
            echo 'Run Test Behavior No Params';
        }*/
    }
}