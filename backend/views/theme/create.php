<?php

/**
 * @var yii\web\View $this
 * @var common\models\Theme $model
 */

$this->title = Yii::t('backend', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Themes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
