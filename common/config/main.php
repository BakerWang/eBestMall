<?php
return [
    'name' => 'eBestMall',  // 系统名称
    'version' => '1.0.0', // 系统版本
    'language'=>'zh-CN',    // 设置语言
    'timeZone'=>'Asia/Shanghai',    // 设置时区
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
            //'cachePath' => '@webroot/web/runtime/cache',   // 缓存路径
        ],
    ],
];
