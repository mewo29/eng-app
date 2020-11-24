<?php

use yii\db\Migration;

/**
 * Class m201123_050430_seed
 */
class m201123_050430_seed extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%category}}', [
            'id' => 1,
            'name' => 'Фразовые глаголы',
            'icon' => 'https://englex.ru/wp-content/uploads/phrasal-verbs.png'
        ]);

        $this->insert('{{%category}}', [
            'id' => 2,
            'name' => 'Вводные слова и конструкции',
            'icon' => 'https://englex.ru/wp-content/uploads/introductory-words-in-english.png'
        ]);

        $this->insert('{{%level}}', [
            'id' => 1,
            'name' => 'Начальный',
            'code' => 'A1'
        ]);

        $this->insert('{{%level}}', [
            'id' => 2,
            'name' => 'Элементарный',
            'code' => 'A2'
        ]);

        $this->insert('{{%level}}', [
            'id' => 3,
            'name' => 'Средний',
            'code' => 'B1'
        ]);

        $this->insert('{{%level}}', [
            'id' => 4,
            'name' => 'Средне-продвинутый ',
            'code' => 'B2'
        ]);

        $this->insert('{{%level}}', [
            'id' => 5,
            'name' => 'Продвинутый',
            'code' => 'C1'
        ]);

        $this->insert('{{%level}}', [
            'id' => 6,
            'name' => 'Владение в совершенстве',
            'code' => 'C2'
        ]);

        $this->insert('{{%theme}}', [
            'id' => 1,
            'category_id' => 1,
            'level_id' => 3,
            'name' => 'Люди и общество',
            'photo' => 'https://englex.ru/wp-content/uploads/people-and-society.png',
        ]);

        $this->insert('{{%theme}}', [
            'id' => 2,
            'category_id' => 1,
            'level_id' => 3,
            'name' => 'Наука и технологии',
            'photo' => 'https://englex.ru/wp-content/uploads/science-and-technology.png',
        ]);

        $this->insert('{{%theme}}', [
            'id' => 3,
            'category_id' => 1,
            'level_id' => 4,
            'name' => 'Еда и напитки',
            'photo' => 'https://englex.ru/wp-content/uploads/food-and-drink.png',
        ]);

        $this->insert('{{%theme}}', [
            'id' => 4,
            'category_id' => 2,
            'level_id' => 2,
            'name' => 'Эмоции и свое отношение',
            'photo' => '',
        ]);

        $this->insert('{{%theme}}', [
            'id' => 5,
            'category_id' => 2,
            'level_id' => 2,
            'name' => 'Частичное согласие',
            'photo' => '',
        ]);

        $this->insert('{{%word}}', [
            'id' => 1,
            'name' => 'to ask after',
            'translation' => 'интересоваться новостями, состоянием здоровья',
            'transcription' => '',
            'example' => 'Nino asked after Katrina’s health.',
            'sound' => 'https://notificationsounds.com/storage/sounds/file-sounds-1151-swiftly.mp3',
        ]);

        $this->insert('{{%word}}', [
            'id' => 2,
            'name' => 'to fall for',
            'translation' => 'верить во что-то, влюбиться в кого-то',
            'transcription' => '',
            'example' => 'Johnny seems to have really fallen for Vanessa.',
            'sound' => '',
        ]);

        $this->insert('{{%word}}', [
            'id' => 3,
            'name' => 'to go down (as)',
            'translation' => 'оставаться в памяти (про человека)',
            'transcription' => '',
            'example' => 'Freddie Mercury is gone down as a very talented musician.',
            'sound' => '',
        ]);

        $this->insert('{{%word}}', [
            'id' => 4,
            'name' => 'to break down',
            'translation' => 'сломаться',
            'transcription' => '',
            'example' => 'Yesterday my car broke down right on the road.',
            'sound' => '',
        ]);

        $this->insert('{{%word}}', [
            'id' => 5,
            'name' => 'to come up with',
            'translation' => 'придумать, предложить (план, идею)',
            'transcription' => '',
            'example' => 'He needs some time to come up with the plot of the novel.',
            'sound' => 'https://notificationsounds.com/storage/sounds/file-sounds-1154-done-for-you.mp3',
        ]);

        $this->insert('{{%word}}', [
            'id' => 6,
            'name' => 'to leave out',
            'translation' => 'не включать (в состав)',
            'transcription' => '',
            'example' => 'The meal leaves out salt.',
            'sound' => '',
        ]);

        $this->insert('{{%word}}', [
            'id' => 7,
            'name' => 'to take to',
            'translation' => 'начать любить что-то, начать делать что-то регулярно',
            'transcription' => '',
            'example' => 'I have taken to eat porridge in the morning.',
            'sound' => '',
        ]);

        $this->insert('{{%word}}', [
            'id' => 8,
            'name' => 'sad to say',
            'translation' => 'к сожалению, к моему большому сожалению',
            'transcription' => '',
            'example' => 'Sad to say, we don’t have anything to offer you.',
            'sound' => '',
        ]);

        $this->insert('{{%word}}', [
            'id' => 9,
            'name' => 'fortunately',
            'translation' => 'к счастью',
            'transcription' => '',
            'example' => 'Fortunately, I managed to complete my test before the bell rang.',
            'sound' => '',
        ]);

        $this->insert('{{%word}}', [
            'id' => 10,
            'name' => 'sadly',
            'translation' => 'к сожалению',
            'transcription' => '',
            'example' => 'Sadly, they missed the train, so they had to find a place to stay that night.',
            'sound' => 'https://notificationsounds.com/storage/sounds/file-sounds-1156-percussion-sound.mp3',
        ]);

        $this->insert('{{%word}}', [
            'id' => 11,
            'name' => 'in a way',
            'translation' => 'в некотором смысле, отчасти',
            'transcription' => '',
            'example' => 'In a way, I share your point of view, but I am not sure about it.',
            'sound' => '',
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 1,
            'word_id' => 1,
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 1,
            'word_id' => 2,
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 1,
            'word_id' => 3,
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 2,
            'word_id' => 4,
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 2,
            'word_id' => 5,
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 3,
            'word_id' => 6,
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 3,
            'word_id' => 7,
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 3,
            'word_id' => 7,
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 4,
            'word_id' => 8,
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 4,
            'word_id' => 9,
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 4,
            'word_id' => 10,
        ]);

        $this->insert('{{%theme_word}}', [
            'theme_id' => 5,
            'word_id' => 11,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%category}}', [
            'id' => [1, 2]
        ]);

        $this->delete('{{%level}}', [
            'id' => [1, 2, 3, 4, 5, 6]
        ]);

        $this->delete('{{%theme}}', [
            'id' => [1, 2, 3, 4, 5]
        ]);

        $this->delete('{{%word}}', [
            'id' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
        ]);

        $this->delete('{{%theme_word}}', [
            'theme_id' => [1, 2, 3, 4, 5]
        ]);
    }
}
