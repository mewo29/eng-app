<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%word}}`.
 */
class m201118_084245_create_word_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%word}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'translation' => $this->string(),
            'transcription' => $this->string(),
            'example' => $this->string(),
            'sound' => $this->string(),
        ]);

        $this->createTable('{{%theme_word}}', [
            'theme_id' => $this->integer(),
            'word_id' => $this->integer(),
        ]);

        $this->addForeignKey('fk_theme_word_word', '{{%theme_word}}', 'word_id', '{{%word}}', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk_theme_word_theme', '{{%theme_word}}', 'theme_id', '{{%theme}}', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_theme_word_word', '{{%theme_word}}');
        $this->dropForeignKey('fk_theme_word_theme', '{{%theme_word}}');

        $this->dropTable('{{%theme_word}}');
        $this->dropTable('{{%word}}');
    }
}
