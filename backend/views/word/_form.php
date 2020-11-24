<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\Word $model
 * @var yii\bootstrap4\ActiveForm $form
 */
?>

<div class="word-form">
    <?php $form = ActiveForm::begin(); ?>
        <div class="card">
            <div class="card-body">
                <?php echo $form->errorSummary($model); ?>

                <?php echo $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                <?php echo $form->field($model, 'translation')->textInput(['maxlength' => true]) ?>
                <?php echo $form->field($model, 'transcription')->textInput(['maxlength' => true]) ?>
                <?php echo $form->field($model, 'example')->textInput(['maxlength' => true]) ?>
                <?php echo $form->field($model, 'sound')->textInput(['maxlength' => true]) ?>
                
            </div>
            <div class="card-footer">
                <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
</div>
