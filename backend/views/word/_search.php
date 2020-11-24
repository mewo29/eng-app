<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\Word $model
 * @var yii\bootstrap4\ActiveForm $form
 */
?>

<div class="word-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php echo $form->field($model, 'id') ?>
    <?php echo $form->field($model, 'name') ?>
    <?php echo $form->field($model, 'translation') ?>
    <?php echo $form->field($model, 'transcription') ?>
    <?php echo $form->field($model, 'example') ?>
    <?php // echo $form->field($model, 'sound') ?>

    <div class="form-group">
        <?php echo Html::submitButton(Yii::t('backend', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?php echo Html::resetButton(Yii::t('backend', 'Reset'), ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
