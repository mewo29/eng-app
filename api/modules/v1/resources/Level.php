<?php

namespace api\modules\v1\resources;

class Level extends \common\models\Level
{
    public function fields()
    {
        return ['id', 'name', 'code'];
    }
}