<?php

namespace api\modules\v1\controllers;

use api\components\Controller;
use api\modules\v1\resources\Word;

class WordController extends Controller
{
    public $modelClass = Word::class;
}