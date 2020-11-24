<?php

namespace common\models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%theme}}".
 *
 * @property int $id
 * @property int|null $category_id
 * @property int|null $level_id
 * @property string|null $name
 * @property string|null $photo
 *
 * @property Category $category
 * @property Level $level
 * @property ThemeWord[] $themeWords
 */
class Theme extends ActiveRecord
{
    public $wordIds = [];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%theme}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'level_id'], 'required'],
            [['category_id', 'level_id'], 'integer'],
            [['name', 'photo'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
            [['level_id'], 'exist', 'skipOnError' => true, 'targetClass' => Level::class, 'targetAttribute' => ['level_id' => 'id']],
            ['wordIds', 'each', 'rule' => ['integer']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'category_id' => Yii::t('common', 'Category'),
            'level_id' => Yii::t('common', 'Level'),
            'name' => Yii::t('common', 'Name'),
            'photo' => Yii::t('common', 'Photo'),
            'wordsCount' => Yii::t('common', 'Words Count'),
            'wordIds' => Yii::t('common', 'Words'),
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Level]].
     *
     * @return ActiveQuery
     */
    public function getLevel()
    {
        return $this->hasOne(Level::class, ['id' => 'level_id']);
    }

    /**
     * Gets query for [[ThemeWords]].
     *
     * @return ActiveQuery
     */
    public function getThemeWords()
    {
        return $this->hasMany(ThemeWord::class, ['theme_id' => 'id']);
    }

    /**
     * Gets query for [[Words]].
     *
     * @return ActiveQuery
     */
    public function getWords()
    {
        return $this->hasMany(Word::class, ['id' => 'word_id'])->via('themeWords');
    }

    public function getWordsCount()
    {
        return $this->getWords()->count();
    }

    public function afterSave($insert, $changedAttributes)
    {
        $this->updateWords();
        parent::afterSave($insert, $changedAttributes);
    }

    private function updateWords()
    {
        ThemeWord::deleteAll(['theme_id' => $this->id]);

        if ($this->wordIds) {
            $bulkInsertArray = [];
            foreach ($this->wordIds as $wordId) {
                $bulkInsertArray[] = [
                    'word_id' => $wordId,
                    'theme_id' => $this->id,
                ];
            }

            if (count($bulkInsertArray) > 0) {
                $columnNameArray = ['word_id', 'theme_id'];
                Yii::$app->db->createCommand()
                    ->batchInsert(
                        ThemeWord::tableName(), $columnNameArray, $bulkInsertArray
                    )
                    ->execute();
            }
        }
    }
}
