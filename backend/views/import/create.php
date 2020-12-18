<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Import */

$this->title = Yii::t('app', 'Create Import');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Imports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="import-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
