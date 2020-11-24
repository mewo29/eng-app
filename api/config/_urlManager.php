<?php

use yii\rest\UrlRule;
use yii\web\UrlManager;

return [
    'class' => UrlManager::class,
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'enableStrictParsing' => true,
    'rules' => [
        // Api
        ['class' => UrlRule::class, 'controller' => 'v1/theme', 'pluralize' => true],
        ['class' => UrlRule::class, 'controller' => 'v1/category', 'pluralize' => true],
        ['class' => UrlRule::class, 'controller' => 'v1/level', 'pluralize' => true],
        ['class' => UrlRule::class, 'controller' => 'v1/word', 'pluralize' => true],
    ]
];
