<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StatistikaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Statistikas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statistika-index">


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
            [
                'attribute' => 'product_id',
                'value' => function (\common\models\Statistika $model) {
                    return Html::a($model->product->title, ['statistika/view', 'product_id' => $model->product->id,'id'=>$model->id]);
                },
                'format' => 'raw',
            ],
            'start_date:date',
            'end_date:date',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
