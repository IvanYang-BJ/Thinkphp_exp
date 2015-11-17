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
        if(C('TEST_PARAM')) {
            echo 'RUNTEST BEHAVIOR '.$params;
        }
    }
}