<?php

namespace api\modules\v1\resources;

use Yii;

class Theme extends \common\models\Theme
{
    public function fields()
    {
        $action = Yii::$app->controller->action->id;
        $fields = ['id', 'category_id', 'level_id', 'name', 'photo'];

        if ($action === 'view') {
            $fields[] = 'words';
        }

        return $fields;
    }
}