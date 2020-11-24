<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%theme_word}}".
 *
 * @property int|null $theme_id
 * @property int|null $word_id
 *
 * @property Theme $theme
 * @property Word $word
 */
class ThemeWord extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%theme_word}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['theme_id', 'word_id'], 'integer'],
            [['theme_id'], 'exist', 'skipOnError' => true, 'targetClass' => Theme::class, 'targetAttribute' => ['theme_id' => 'id']],
            [['word_id'], 'exist', 'skipOnError' => true, 'targetClass' => Word::class, 'targetAttribute' => ['word_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'theme_id' => Yii::t('common', 'Theme ID'),
            'word_id' => Yii::t('common', 'Word ID'),
        ];
    }

    /**
     * Gets query for [[Theme]].
     *
     * @return ActiveQuery
     */
    public function getTheme()
    {
        return $this->hasOne(Theme::class, ['id' => 'theme_id']);
    }

    /**
     * Gets query for [[Word]].
     *
     * @return ActiveQuery
     */
    public function getWord()
    {
        return $this->hasOne(Word::class, ['id' => 'word_id']);
    }
}
