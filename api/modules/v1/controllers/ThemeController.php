<?php

namespace api\modules\v1\controllers;

use api\components\Controller;
use api\modules\v1\resources\Theme;
use Yii;
use yii\data\ActiveDataProvider;

class ThemeController extends Controller
{
    public $modelClass = Theme::class;

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function prepareDataProvider()
    {
        $request = Yii::$app->request;

        return new ActiveDataProvider([
            'query' => $this->modelClass::find()
                ->andFilterWhere(['category_id' => $request->get('category')])
                ->andFilterWhere(['level_id' => $request->get('level')])
        ]);
    }
}