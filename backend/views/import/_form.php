<?php


use kartik\datetime\DateTimePicker;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Import */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="import-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(
            \common\models\Products::find()->all(),
            'id',
            'title'
        )
    ) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'now_size')->textInput(['maxlength' => true]) ?>

    <?php
    $model->date = date('d.m.Y H:i', $model->isNewRecord ? time() : $model->date);
    echo '<label class="control-label">Время</label>' . DateTimePicker::widget([
            'model' => $model,
            'attribute' => 'date',
            'name' => 'date',
            'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
            'value' => date('d.m.Y H:i'),
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'd.m.yyyy hh:ii'
            ]
        ]);
    ?>
    <?= $form->field($model, 'type')
        ->dropDownList(['1'=>'export' , '2'=>'import'] ,
            $param = ['options' => [$model->status => ['Selected' => true]]]
        );
    ?>
    <?= $form->field($model, 'party')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
