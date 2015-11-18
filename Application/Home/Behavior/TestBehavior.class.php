<?php
/**
 * Created by PhpStorm.
 * User: egret
 * Date: 2015/11/17
 * Time: 18:25
 */

namespace Home\Behavior;
use Think\Behavior;

class TestBehavior
{
    public function run(&$params){
        if(C('DATABASE_USERNAME')) {
            echo 'RUNTEST BEdfadsfadsHAVIOR '.$params.BR;
        }
        else{
            echo 'Run Test Behavior No Params'.BR;
        }
    }
}