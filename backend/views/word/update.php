<?php

/**
 * @var yii\web\View $this
 * @var common\models\Word $model
 */

use yii\bootstrap4\Html;

$this->title = Yii::t('backend', 'Update') . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Words'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="word-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php if ($model->sound) { ?>
        <?= Html::tag('audio', '', ['src' => $model->sound, 'controls' => true]) ?>
    <?php } ?>
</div>
