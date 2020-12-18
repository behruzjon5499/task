<?php
return [
    'timezone' => 'Asia/Tashkent',
    'sourceLanguage' => 'uz',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
            'cachePath' => Yii::getAlias('@common') . '/cache', // общий кеш для backend / frontend в папке frontend/web/cache
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,
                    //'js' => ['js/jquery_1.11.3.js'] // тут путь до Вашего экземпляра jquery
                    'js' => ['js/jquery-3.2.1.min.js'], // тут путь до Вашего экземпляра jquery
                ],
            ],
        ],
    ],
    'language'=>'ru-RU',
];
