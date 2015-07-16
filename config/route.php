<?php
/**
 * Created by PhpStorm.
 * User: fujianguo
 * Date: 15/7/13
 * Time: 下午7:32
 */

return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules'=>[
        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
        'admin/login' => 'admin/default/login',
        'admin/logout' => 'admin/default/logout',
        'admin/error' => 'admin/default/error',
        '/login'=>'site/login',

    ],
];