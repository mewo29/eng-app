<?php

namespace api\modules\v1\resources;

class Category extends \common\models\Category
{
    public function fields()
    {
        return ['id', 'name', 'icon'];
    }
}