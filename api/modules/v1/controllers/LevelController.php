<?php

namespace api\modules\v1\controllers;

use api\components\Controller;
use api\modules\v1\resources\Level;

class LevelController extends Controller
{
    public $modelClass = Level::class;
}