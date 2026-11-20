<?php

use craft\helpers\App;
use modules\sites\src\EditableSites;

return [
    'id' => App::env('CRAFT_APP_ID') ?: 'CraftCMS',
    'components' => [
        'sites' => [
            'class' => EditableSites::class,
        ],
        'response' => [
            'class' => \craft\web\Response::class,
            'on beforeSend' => function(\yii\base\Event $event) {
                $headers = $event->sender->headers;
                $headers->set('X-Content-Type-Options', 'nosniff');
                $headers->set('X-Frame-Options', 'SAMEORIGIN');
                $headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
                $headers->set('Permissions-Policy', 'camera=(), microphone=(), geolocation=()');
            },
        ],
    ],
    'modules' => [
        'ckeditorcustomcolors' => [
            'class' => \modules\ckeditorcustomcolors\CKEditorCustomColors::class,
        ],
    ],
    'bootstrap' => [
        'ckeditorcustomcolors',
    ],
];
