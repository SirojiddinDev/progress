<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'modules' => [
            'class' => 'common\modules\Markaz',
        ],
    ],


//    'assetManager' => [
//        'bundles' => [
//            'yii\bootstrap\BootstrapAsset' => [
//                'css' => [],
//            ],
//        ],
//    ],
];
