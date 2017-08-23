<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'db' => [
            'class' => env('DB_CLASS', 'yii\db\Connection'),
            'dsn' => env('DB_DSN', 'mysql:host=localhost;port=3306;dbname=c9'),
            'username' => env('DB_USERNAME', 'hdushku'),
            'password' => env('DB_PASSWORD', ''),
            'tablePrefix' => env('DB_TABLE_PREFIX', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'enableSchemaCache' => env('DB_SCHEMA_CACHE', false),
            'schemaCacheDuration' => env('DB_SCHEMA_CACHE_DURATION', 3600),
            'enableQueryCache' => env('DB_QUERY_CACHE', true),
            'queryCacheDuration' => env('DB_QUERY_CACHE_DURATION', 3600),
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
                'clients' => [
                //    'google' => [
                 //       'class' => 'yii\authclient\clients\GoogleOpenId'
                 //   ],
                    'github' => [
                        'class' => 'yii\authclient\clients\GitHub',
                        'clientId' => '812ad73e61e4191a45a7',
                        'clientSecret' => '2e4b56e6423dcd64c921d1e6bde5488ba02b07b5',
                    ],
                ],    
            ],
            
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'dektrium\user\models\User',
            'loginUrl' => ['/user/security/login'],
            'enableAutoLogin' => true,
        ],
        'authManager' => [
            'class' => 'dektrium\rbac\components\DbManager',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@base/views/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => explode(',', env('APP_ADMINS', 'admin')),
        ],
        'rbac' => [
            'class' => 'dektrium\rbac\RbacWebModule',
        ],
    ],
];
