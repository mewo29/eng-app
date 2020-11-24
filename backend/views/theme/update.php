<?php

/**
 * @var yii\web\View $this
 * @var common\models\Theme $model
 */

use yii\bootstrap4\Html;

$this->title = Yii::t('backend', 'Update') . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Themes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="theme-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php if ($model->photo) { ?>
        <?= Html::img($model->photo, ['class' => 'img-thumbnail w-25 p-3']) ?>
    <?php } ?>

</div>
