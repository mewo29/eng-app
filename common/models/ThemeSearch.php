<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Theme;

/**
 * ThemeSearch represents the model behind the search form about `common\models\Theme`.
 */
class ThemeSearch extends Theme
{
    public $wordsCount;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'level_id'], 'integer'],
            [['name', 'photo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Theme::find()
            ->joinWith('themeWords');

        $subQuery = ThemeWord::find()
            ->select('theme_id, count(theme_id) as wordsCount')
            ->groupBy('theme_id');
        $query->leftJoin(['wordsCount' => $subQuery], 'wordsCount.theme_id = theme.id');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
            'level_id' => $this->level_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
