<?php

/* @var $this yii\web\View */
/* @var $model common\models\Statistika */
/* @var $products common\models\Export */
/* @var $statistika common\models\Export */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Statistikas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="statistika-view">
    <h2> Boshlandi: <?= date('F d Y,  H:i', $model->start_date) ?></h2>
    <h2> Tugadi: <?= date('F d Y, H:i', $model->end_date) ?></h2>
    <table class="table table-striped table-bordered detail-view">
        <?php foreach ($products as $product): ?>
            <tr>
                <th>Product</th>
                <td><?= $product->product->title ?></td>
                <th>Выручка</th>
                <td><?= $product->summa ?></td>
                <th>Себестоимость</th>
                <td><?= $product->xarajat ?></td>
                <th>Прибыль</th>
                <td><?= $product->foyda ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <table class="table table-striped table-bordered detail-view">
        <tr>
            <th>Product</th>
            <td><?= $statistika->product->title ?></td>
            <th>Выручка</th>
            <td><?= $statistika->summa ?></td>
            <th>Себестоимость</th>
            <td><?= $statistika->xarajat ?></td>
            <th>Прибыль</th>
            <td><?= $statistika->foyda ?></td>
        </tr>

    </table>


</div>
