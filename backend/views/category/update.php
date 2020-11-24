<?php

/**
 * @var yii\web\View $this
 * @var common\models\Category $model
 */

use yii\bootstrap4\Html;

$this->title = Yii::t('backend', 'Update') . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="category-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php if ($model->icon) { ?>
        <?= Html::img($model->icon, ['class' => 'img-thumbnail w-25 p-3']) ?>
    <?php } ?>
</div>
