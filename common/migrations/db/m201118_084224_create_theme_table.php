<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%theme}}`.
 */
class m201118_084224_create_theme_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%theme}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'level_id' => $this->integer(),
            'name' => $this->string(),
            'photo' => $this->string(),
        ]);

        $this->addForeignKey('fk_theme_category', '{{%theme}}', 'category_id', '{{%category}}', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk_theme_level', '{{%theme}}', 'level_id', '{{%level}}', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_theme_category', '{{%theme}}');
        $this->dropForeignKey('fk_theme_level', '{{%theme}}');
        $this->dropTable('{{%theme}}');
    }
}
