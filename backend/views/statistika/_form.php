<?php

use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Statistika */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="statistika-form">

    <?php $form = ActiveForm::begin(); ?>


  <?=   $form->field($model, 'check')->checkbox(['uncheck' => '0', 'value' => '1']);?>

<!--    --><?//= $form->field($model, 'product_id')->dropDownList(
//        \yii\helpers\ArrayHelper::map(
//            \common\models\Products::find()->all(),
//            'id',
//            'title'
//        )
//    ) ?>


    <?php
    $model->start_date = date('d.m.Y H:i', $model->isNewRecord ? time() : $model->start_date);
    echo '<label class="control-label">Время</label>' . DateTimePicker::widget([
            'model' => $model,
            'attribute' => 'start_date',
            'name' => 'start_date',
            'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
            'value' => date('d.m.Y H:i'),
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'd.m.yyyy hh:ii'
            ]
        ]);
    ?>
    <?php
    $model->end_date = date('d.m.Y H:i', $model->isNewRecord ? time() : $model->end_date);
    echo '<label class="control-label">Время</label>' . DateTimePicker::widget([
            'model' => $model,
            'attribute' => 'end_date',
            'name' => 'end_date',
            'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
            'value' => date('d.m.Y H:i'),
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'd.m.yyyy hh:ii'
            ]
        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
