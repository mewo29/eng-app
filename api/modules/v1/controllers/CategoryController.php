<?php

namespace api\modules\v1\controllers;

use api\components\Controller;
use api\modules\v1\resources\Category;

class CategoryController extends Controller
{
    public $modelClass = Category::class;
}