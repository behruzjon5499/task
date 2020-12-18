<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Import */

$this->title = Yii::t('app', 'Update Import: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Imports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="import-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
