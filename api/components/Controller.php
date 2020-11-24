<?php

namespace api\components;

use api\auth\HeaderAuth;
use yii\rest\ActiveController;

class Controller extends ActiveController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HeaderAuth::class,
        ];

        return $behaviors;
    }
}