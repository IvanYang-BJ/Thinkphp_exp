<?php
/**
 * Created by PhpStorm.
 * User: egret
 * Date: 2015/12/25
 * Time: 16:47
 */

namespace Home\Controller;

use Think\Controller;

define("DEFAULT_VERSION", "v2.5.6-105");
define("EGRET_URL", "http://update.runtime.egret.com/egret-runtime/v1/");
define('LATEST', 'v1.5.5-146');
class EgretController extends Controller
{
    public function test(){
        $apps = array(
            "9392" => array(
                "name" => "QQ浏览器",
                "key" => "SvrQXChbehbbB2Y6hS7ak",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "10016" => array(
                "name" => "1758",
                "key" => "MWYTulsKV3DMswn97j3AE",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "10044" => array(
                "name" => "猎豹浏览器",
                "key" => "eWQ5pfNkAX2XdjOb16qAW",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "10269" => array(
                "name" => "滴滴打车",
                "key" => "NzEbKPRNDWFyuM8Uqycal",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "10675" => array(
                "name" => "新浪微博",
                "key" => "u7gNpC42RjY8gpl3shrl1",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "10835" => array(
                "name" => "QQ游戏大厅",
                "key" => "tntRZ57PDpFqBnwafCKc3",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "10950" => array(
                "name" => "琵琶网",
                "key" => "LEMOCdpK2gvSKfOOP8OBB",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "11007" => array(
                "name" => "小米手机页游",
                "key" => "aALe3QosWi9RMqAoF1xvS",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "11010" => array(
                "name" => "360手机助手",
                "key" => "2blvms6igmwIHpIozXiXu",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "11014" => array(
                "name" => "欧朋浏览器",
                "key" => "dc9jUuGtgOVzURgTcLigE",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "11017" => array(
                "name" => "猎豹浏览器国际版",
                "key" => "BRCcupapFciDW4VSahHt6",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "11018" => array(
                "name" => "傲游浏览器",
                "key" => "3TPoNo4YOPGO2ERSP16sv",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "11076" => array(
                "name" => "4399",
                "key" => "Ens43MiyZ5DqAPJBtRpWY",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => "v2.0.4-71",
                "ver_dev" => DEFAULT_VERSION,
            ),
            "11107" => array(
                "name" => "巴朵",
                "key" => "DWQUTaiBPDhc4jkZ65QtO",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "11199" => array(
                "name" => "68玩",
                "key" => "u2SdRgDKCj1RmSmpcmyfs",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => "v2.5.1-83",
                "ver_dev" => "v2.5.1-83",
            ),
            "18184" => array(
                "name" => "白鹭渠道",
                "key" => "5WErFhz1xSXk36FEfAxUG",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18190" => array(
                "name" => "萝卜玩",
                "key" => "mmkZ2rPHg681otIv1aEAx",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18191" => array(
                "name" => "百度浏览器",
                "key" => "SjPpORqfMwxiWSjHh2pwE",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18198" => array(
                "name" => "test14",
                "key" => "qTn8quYCPuBLgHpJgiKHM",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18220" => array(
                "name" => "点玩锁屏",
                "key" => "ntYyx9Zq7HNHreTzvJnF4",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18221" => array(
                "name" => "金石创娱runtime",
                "key" => "7AAXWka8zMiRQwY7cdMph",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18224" => array(
                "name" => "test2020",
                "key" => "z15WjNxgSTMMMq6VuBhWd",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18226" => array(
                "name" => "左岸科技",
                "key" => "qfHdsloPH2oNzGFMbPLQG",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18227" => array(
                "name" => "test2121",
                "key" => "pLrOTODX39sL3TdlVHgH4",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18230" => array(
                "name" => "kingsgame",
                "key" => "C4SsmP8BQvOwxqrvpR4Yw",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18242" => array(
                "name" => "YY",
                "key" => "IGLHXhQJNVWZ9MDOgI4RN",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18246" => array(
                "name" => "欢乐园游戏",
                "key" => "Z4ub4ZpWrqHl28y4zubpL",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18255" => array(
                "name" => "爱微游",
                "key" => "vXFsv4dlEnYmhTEzbEsEO",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18273" => array(
                "name" => "虎虎游戏",
                "key" => "CYfy5A7tA9gDRzcFqYrgQ",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18275" => array(
                "name" => "达派助手",
                "key" => "4uA1grXGrKMIzwQF7EHt9",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18278" => array(
                "name" => "玩吧游戏平台",
                "key" => "kdMFfbBMvQaSHrpFMyIQu",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18287" => array(
                "name" => "猎豹2",
                "key" => "ckcyZnpg53RrFHiHM2aTv",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18295" => array(
                "name" => "7724游戏",
                "key" => "xN4yG3CtYucEOmtr7MKam",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18311" => array(
                "name" => "9158",
                "key" => "SXLKnQr2pVvGvQbCd42yq",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18319" => array(
                "name" => "07073游戏网H5游戏",
                "key" => "fSkRgZDUdQZkdZAneogfM",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18323" => array(
                "name" => "微用",
                "key" => "d48I6qBvQwkuhVtDiPaGZ",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18326" => array(
                "name" => "魔方加加",
                "key" => "p48iEipnE7gTZ3BxqOtiS",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18331" => array(
                "name" => "洋葱轻游戏",
                "key" => "CLMtaLELio9Hv2oXYO1pv",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18334" => array(
                "name" => "豆米游戏",
                "key" => "lpXKQNNCGMTeIwqnFi8lF",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18342" => array(
                "name" => "豆豆游戏",
                "key" => "vPO27lrD9Dsb4UGlNChUg",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18348" => array(
                "name" => "全时尚讯",
                "key" => "xG7ZxaYDfsdphCvYgUUvx",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18354" => array(
                "name" => "九游",
                "key" => "UT5lV69hF2fS5kXGbnSaq",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18357" => array(
                "name" => "putaogame",
                "key" => "ivrNVQe3HdTpBjx7bG6YL",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18375" => array(
                "name" => "游玩互动",
                "key" => "lwZ9WBRigtefRkfVmiS49",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18377" => array(
                "name" => "龙跃星云",
                "key" => "qavDB9MO1xTKrlTVDOShZ",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => "v2.5.7-721",
                "ver_dev" => "v2.5.7-721",
            ),
            "18385" => array(
                "name" => "xiaomogame",
                "key" => "ukdOIzKrKVf9QimybIjFH",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18387" => array(
                "name" => "RuntimeTest",
                "key" => "XpiDphB5yoRQb5a3qyXJ8",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18391" => array(
                "name" => "酷我",
                "key" => "pkslkEwtElqCtVYXZM84I",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18399" => array(
                "name" => "嗨乐科技",
                "key" => "En7tB2jMUCIrsgz84F9UpK",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => "v2.5.0-81",
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18400" => array(
                "name" => "腾飞游戏",
                "key" => "ZyyDZz1AIegq6MNODMYYO",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => "v2.5.0-81",
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18415" => array(
                "name" => "游戏集合",
                "key" => "AFNlkd8gtweEhnHj7hKjR",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => "v2.5.1-83",
                "ver_dev" => "v2.5.1-83",
            ),
            "18420" => array(
                "name" => "yoyo卡箱联运",
                "key" => "f5AY3tcGYbBFDLazt2ZYj",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18427" => array(
                "name" => "游戏宅人",
                "key" => "vz6qDPLEOJsftu7puldAT",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18432" => array(
                "name" => "Timebt",
                "key" => "NfjIRGy1AlqmWKSaASAuP",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18452" => array(
                "name" => "嗨聊",
                "key" => "2lFgTe5SMVXvFE3Jd6WtU",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18461" => array(
                "name" => "咪咕游戏",
                "key" => "luY8jE33oNoGQnEVlfk7C",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18509" => array(
                "name" => "广州七升网络科技有限公司",
                "key" => "4uuqQtSJf98LqBHvLreL8",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18520" => array(
                "name" => "约战",
                "key" => "x59d8V5n1VH6DvbG7MwmP",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => "v2.5.4-94",
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18547" => array(
                "name" => "疯神榜",
                "key" => "mmwPpaDh3ggBOGcLRXQ1v",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "18557" => array(
                "name" => "一起玩吧",
                "key" => "PgrrgRDwQRONYVzB33kjn",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "20378" => array(
                "name" => "wasu",
                "key" => "avkQxg8WHRjUQOrLGiLwU",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            "20390" => array(
                "name" => "360游戏大厅",
                "key" => "iEF71AmNa3tKV8QLIbTPi",
                "dev" => "0",
                "url" => EGRET_URL,
                "ver" => DEFAULT_VERSION,
                "ver_dev" => DEFAULT_VERSION,
            ),
            '18429' => array(
                'name' => '07073lianyun',
                'key' => 'dDyVgdTQ5Z6XYMvJgC3FZ',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.4-71',
                'ver_dev' => 'v2.0.4-71'),

            '18427' => array(
                'name' => 'gamezhai',
                'key' => 'vz6qDPLEOJsftu7puldAT',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.4-71',
                'ver_dev' => 'v2.0.4-71'),

            '18385' => array(
                'name' => 'xiaomogame',
                'key' => 'ukdOIzKrKVf9QimybIjFH',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18420' => array(
                'name' => 'yoyo',
                'key' => 'f5AY3tcGYbBFDLazt2ZYj',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18278' => array(
                'name' => 'youdiwanba',
                'key' => 'kdMFfbBMvQaSHrpFMyIQu',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.4-71',
                'ver_dev' => 'v2.0.4-71'),

            '18273' => array(
                'name' => 'jiumeng',
                'key' => 'CYfy5A7tA9gDRzcFqYrgQ',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18391' => array(
                'name' => 'kuwo',
                'key' => 'pkslkEwtElqCtVYXZM84I',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18220' => array(
                'name' => 'dianwan',
                'key' => 'ntYyx9Zq7HNHreTzvJnF4',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18377' => array(
                'name' => 'biubiu',
                'key' => 'qavDB9MO1xTKrlTVDOShZ',
                'dev' => '1',
                'url' => EGRET_URL,
                'ver' => 'v2.5.6-105',
                'ver_dev' => 'v2.5.6-105'),

            '18326' => array(
                'name' => 'mofang',
                'key' => 'p48iEipnE7gTZ3BxqOtiS',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.4-68'),

            '18319' => array(
                'name' => '07073',
                'key' => 'fSkRgZDUdQZkdZAneogfM',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '11107' => array(
                'name' => 'baduogame',
                'key' => 'DWQUTaiBPDhc4jkZ65QtO',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18354' => array(
                'name' => '9you',
                'key' => 'UT5lV69hF2fS5kXGbnSaq',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18342' => array(
                'name' => 'doudougame',
                'key' => 'vPO27lrD9Dsb4UGlNChUg',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18275' => array(
                'name' => 'dapai',
                'key' => '4uA1grXGrKMIzwQF7EHt9',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18342' => array(
                'name' => 'doudougame',
                'key' => 'vPO27lrD9Dsb4UGlNChUg',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18275' => array(
                'name' => 'dapai',
                'key' => '4uA1grXGrKMIzwQF7EHt9',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18357' => array(
                'name' => 'putaogame',
                'key' => 'ivrNVQe3HdTpBjx7bG6YL',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.4-71',
                'ver_dev' => 'v2.0.4-71'),

            '18190' => array(
                'name' => 'luobowan',
                'key' => 'mmkZ2rPHg681otIv1aEAx',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '10950' => array(
                'name' => 'pipa',
                'key' => 'LEMOCdpK2gvSKfOOP8OBB',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470n'),

            '18349' => array(
                'name' => 'yoyo',
                'key' => 'K58BIGDuAK2pqNDMPVlGw',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18226' => array(
                'name' => 'zuoan',
                'key' => 'qfHdsloPH2oNzGFMbPLQG',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '18331' => array(
                'name' => 'onion',
                'key' => 'CLMtaLELio9Hv2oXYO1pv',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.2-520',
                'ver_dev' => 'v2.0.2-520'),

            '11199' => array(
                'name' => '68wan',
                'key' => 'u2SdRgDKCj1RmSmpcmyfs',
                'dev' => '1',
                'url' => EGRET_URL,
                'ver' => 'v1.7.2-325'),

            '18242' => array(
                'name' => 'yy',
                'key' => 'IGLHXhQJNVWZ9MDOgI4RN',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v1.7.3-440'),

            '11231' => array(
                'name' => '1905',
                'key' => 'OmkOUBwxmTSIOZlFx7A2V',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11230' => array(
                'name' => 'myapp',
                'key' => '9Zs7ed53zbVrFu5SQsFfa',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11229' => array(
                'name' => '7724',
                'key' => 'px26BKxvUb74jvMJPhASr',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11180' => array(
                'name' => 'gaonengfan',
                'key' => 'X1OXjJpTTGNwyFcSuiNWW',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11076' => array(
                'name' => '4399',
                'key' => 'obs43MiyZ5mqAPYVeRqUY',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11021' => array(
                'name' => 'qtplay',
                'key' => 'EWKmpDfQdriyIcmQ5W2ql',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11020' => array(
                'name' => 'sdo',
                'key' => 'nedIp8L7Hgh3L2lKA79Sb',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11018' => array(
                'name' => 'maxthon',
                'key' => '3TPoNo4YOPGO2ERSP16sv',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.1-487',
                'ver_dev' => 'v2.0.1-487'),

            '11017' => array(
                'name' => 'liebaoen',
                'key' => 'BRCcupapFciDW4VSahHt6',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11014' => array(
                'name' => 'opera',
                'key' => 'dc9jUuGtgOVzURgTcLigE',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-464',
                'ver_dev' => 'v2.0.0-464'),


            '11012' => array(
                'name' => 'baidu',
                'key' => 'ih9XabUZSUyL7eEIvk8Y9',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11011' => array(
                'name' => 'ireader',
                'key' => '2UMpYyMdT2dNnZufNuCvb',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11010' => array(
                'name' => '360mobile',
                'key' => '2blvms6igmwIHpIozXiXu',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11009' => array(
                'name' => 'taobao',
                'key' => 'T1exl5N8K16xhcbCkWhzh',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11008' => array(
                'name' => 'uc',
                'key' => 'WImcPoSlDiEFzsYOmLJH4',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '11007' => array(
                'name' => 'mi',
                'key' => 'aALe3QosWi9RMqAoF1xvS',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.5.4-94',
                'ver_dev' => 'v2.5.4-94'),

            '10835' => array(
                'name' => 'qqgame',
                'key' => 'tntRZ57PDpFqBnwafCKc3',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '10675' => array(
                'name' => 'sina',
                'key' => 'u7gNpC42RjY8gpl3shrl1',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.5.4-94',
                'ver_dev' => 'v2.5.7-709'),

            '10547' => array(
                'name' => 'firefox',
                'key' => 'j04peRiR1dDymoeyeYQe',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v1.7.2-325'),

            '10319' => array(
                'name' => '7k7k',
                'key' => 'JZQzoqPNfMLJ3XH5618BL',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '10269' => array(
                'name' => 'didi',
                'key' => 'NzEbKPRNDWFyuM8Uqycal',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '10097' => array(
                'name' => 'huosu',
                'key' => 'lXu7pUOLglZpVcdRXoZgs',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '10096' => array(
                'name' => '360game',
                'key' => 'ZWdLDCSuvTSNJSMQZitiE',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '10044' => array(
                'name' => 'liebaocn',
                'key' => 'eWQ5pfNkAX2XdjOb16qAW',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '10043' => array(
                'name' => 'yoyo',
                'key' => 'JkuBxtQh46iAiCibCsPgE',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.0-470',
                'ver_dev' => 'v2.0.0-470'),

            '10016' => array(
                'name' => '1758',
                'key' => 'MWYTulsKV3DMswn97j3AE',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v1.7.1-300'),

            '9392' => array(
                'name' => 'qqbrower',
                'key' => 'SvrQXChbehbbB2Y6hS7ak',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '8617' => array(
                'name' => 'lianwifi',
                'key' => 'M5p6Kxw9sbfZdqpKjX4ho',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => LATEST),

            '2000' => array(
                'name' => 'mi',
                'key' => '3321031F35156D389B0B272910695E3F',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v1.5.5-112',
                'ver_dev' => 'v1.7.3-389'),

            '1758' => array(
                'name' => '1758',
                'key' => '145830EDD5C2432ED1D83806E3849787',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v1.6.1-197'),

            '9166' => array(
                'name' => 'egret',
                'key' => 'Z2LnKzxk22jNw7UNknpDU',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.5.7-107',
                'ver_dev' => 'v2.5.7-107'),


            '18388' => array(
                'name' => 'IvanYang',
                'key' => 'tiqHJpfPCpVtLQkQJqOlK',
                'dev' => '0',
                'url' => EGRET_URL,
                'ver' => 'v2.0.4-71',
                'ver_dev' => 'v2.0.4-71'),
        );

        foreach($apps as $key=>$value){
            echo $key.'    ';
            foreach($value as $a => $b){

                if($a == 'name' || $a == 'ver' || $a == 'ver_dev'){
                    echo $b.'    ';
                }

            }
            echo BR;
        }
    }
}