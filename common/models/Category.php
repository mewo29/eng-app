<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $icon
 *
 * @property Theme[] $themes
 */
class Category extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'name' => Yii::t('common', 'Name'),
            'icon' => Yii::t('common', 'Icon'),
        ];
    }

    /**
     * Gets query for [[Themes]].
     *
     * @return ActiveQuery
     */
    public function getThemes()
    {
        return $this->hasMany(Theme::class, ['category_id' => 'id']);
    }

    public static function getList()
    {
        return self::find()
            ->asArray()
            ->select(['name'])
            ->indexBy('id')
            ->column();
    }
}
