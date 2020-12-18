<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Statistika */
/* @var $products common\models\Export */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Statistikas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="statistika-view">

        <table class="table table-striped table-bordered detail-view">

             <tr>
                <th>Product</th>
                <td><?= $products->product->title ?></td>
                <th>Выручка</th>
                <td><?= $products->summa ?></td>
                <th>Себестоимость</th>
                <td><?= $products->xarajat ?></td>
                <th>Прибыль</th>
                <td><?= $products->foyda ?></td>
            </tr>
        </table>
</div>
