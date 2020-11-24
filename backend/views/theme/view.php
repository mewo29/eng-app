<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var common\models\Theme $model
 */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Themes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-view">
    <div class="card">
        <div class="card-header">
            <?php echo Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?php echo Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </div>
        <div class="card-body">
            <?php echo DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'category_id',
                    'level_id',
                    'name',
                    'photo',
                    
                ],
            ]) ?>
        </div>
    </div>
</div>
