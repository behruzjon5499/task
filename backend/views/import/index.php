<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ImportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Imports');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
td{
    text-align: center;
}
</style>
<div class="import-index">
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success">
            <?= Yii::$app->session->getFlash('success') ?>
            <?= Yii::$app->session->getFlash('error') ?>
        </div>
    <?php endif; ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product.title',
            'price',
            'size',
            'now_size',
            [
                'attribute'=>'type',
                'format' => 'html',
                'filter'=> $roles = [1=>'export',2=>'impot'],
                'content'=>function($model) {
                    $type = [1=>'export',2=>'import'];

                    return $type [ $model->type ];
                }
            ],
            'date:date',
            'party',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
