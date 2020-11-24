<?php

/**
 * @var yii\web\View $this
 * @var common\models\Word $model
 */

$this->title = Yii::t('backend', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Words'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="word-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
