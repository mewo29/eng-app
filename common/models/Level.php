<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%level}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $code
 *
 * @property Theme[] $themes
 */
class Level extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%level}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'code'], 'string', 'max' => 255],
            ['code', 'filter', 'filter' => 'strtoupper'],
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
            'code' => Yii::t('common', 'Code'),
        ];
    }

    /**
     * Gets query for [[Themes]].
     *
     * @return ActiveQuery
     */
    public function getThemes()
    {
        return $this->hasMany(Theme::class, ['level_id' => 'id']);
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
