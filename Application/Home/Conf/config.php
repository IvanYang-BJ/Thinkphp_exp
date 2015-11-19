<?php
return array(
	//'配置项'=>'配置值'
    'CONFIG_NAME' => 'Config_name',
    'CONFIG_VALUE' => 'Config_value',
    'CONFIG_ARRAY' => array(
        'CONFIG_ARRAY_ITEM_ONE' => 'ITEM_VALUE1',
        'CONFIG_ARRAY_ITEM_TWO' => 'ITEM_VALUE2',
        ),
    'LOAD_EXT_CONFIG' => 'user,database',
    'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES'=>array(
        'news/:year/:month/:day' => array(
            'News/archive',
            'status=1'
        ),
        'news/:id'               => 'News/read',
        'news/read/:id'          => '/news/:1',
        ),
    'CONTROLLER_LEVEL' => 1,
    'URL_HTML_SUFFIX'=>'',
    'TMPL_ACTION_ERROR' => '/Home/Tpl/success.tpl',
    'TMPL_ACTION_SUCCESS' => '/Home/Tpl/success.tpl'
);