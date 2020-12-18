<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = Yii::t('app', 'Update Products: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="products-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
