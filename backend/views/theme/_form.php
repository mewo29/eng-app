<?php

use common\models\Category;
use common\models\Level;
use common\models\Word;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/**
 * @var yii\web\View $this
 * @var common\models\Theme $model
 * @var yii\bootstrap4\ActiveForm $form
 * @var array|null $wordIds
 */
?>

<div class="theme-form">
    <?php $form = ActiveForm::begin(); ?>
        <div class="card">
            <div class="card-body">
                <?php echo $form->errorSummary($model); ?>

                <?php echo $form->field($model, 'category_id')->widget(Select2::class, [
                    'data' => Category::getList(),
                    'options' => ['placeholder' => ''],
                    'pluginOptions' => [
                        'allowClear' => false,
                    ],
                ]); ?>
                <?php echo $form->field($model, 'level_id')->widget(Select2::class, [
                    'data' => Level::getList(),
                    'options' => ['placeholder' => ''],
                    'pluginOptions' => [
                        'allowClear' => false,
                    ],
                ]); ?>
                <?php echo $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                <?php echo $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>
                <?php echo $form->field($model, 'wordIds')->widget(Select2::class, [
                    'data' => Word::getList(),
                    'options' => ['placeholder' => ''],
                    'pluginOptions' => [
                        'allowClear' => true,
                        'multiple' => true,
                    ],
                ]); ?>

            </div>
            <div class="card-footer">
                <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
</div>
