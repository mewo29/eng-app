<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%word}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $translation
 * @property string|null $transcription
 * @property string|null $example
 * @property string|null $sound
 *
 * @property ThemeWord[] $themeWords
 */
class Word extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%word}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'translation', 'transcription', 'example', 'sound'], 'string', 'max' => 255],
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
            'translation' => Yii::t('common', 'Translation'),
            'transcription' => Yii::t('common', 'Transcription'),
            'example' => Yii::t('common', 'Example'),
            'sound' => Yii::t('common', 'Sound'),
        ];
    }

    /**
     * Gets query for [[ThemeWords]].
     *
     * @return ActiveQuery
     */
    public function getThemeWords()
    {
        return $this->hasMany(ThemeWord::class, ['word_id' => 'id']);
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
