<?php

namespace api\modules\v1\resources;

class Word extends \common\models\Word
{
    public function fields()
    {
        return ['id', 'name', 'translation', 'transcription', 'example', 'sound'];
    }
}