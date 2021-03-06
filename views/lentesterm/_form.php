<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Lentesterm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lentesterm-form">

    <?php $form = ActiveForm::begin(); ?>
<!--
        <?= $form->field($model, 'Precio_compra')->textInput() ?>

    <?= $form->field($model, 'Porcentaje_ganancia')->textInput() ?>

    <?= $form->field($model, 'Existencia')->textInput() ?>
    <?= $form->field($model, 'Precio_venta')->textInput() ?>
-->
    <?= $form->field($model, 'Graduacion_base')->textInput() ?>

    <?= $form->field($model, 'Material_id')->widget(Select2::classname(),[
        'data' => $mats,
        'options'=>['placeholder'=>'Seleccione el material'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>

    <?= $form->field($model, 'Tipo_id')->widget(Select2::classname(),[
        'data' => $tips,
        'options'=>['placeholder'=>'Seleccione el tipo'],
        'pluginOptions'=>['allowClear=>true'],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Registrar'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Cancelar'), ['inventario/mercaderia'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
