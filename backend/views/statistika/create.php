<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Statistika */

$this->title = Yii::t('app', 'Create Statistika');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Statistikas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statistika-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
