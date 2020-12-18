<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Statistika */

$this->title = Yii::t('app', 'Update Statistika: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Statistikas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="statistika-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
