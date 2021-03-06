<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Salida */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salida-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Fecha')->textInput() ?>

    <?= $form->field($model, 'Encargado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cantidad')->textInput() ?>

    <?= $form->field($model, 'Mobyequipo_id')->textInput() ?>

    <?= $form->field($model, 'Lenteterm_id')->textInput() ?>

    <?= $form->field($model, 'Lentesterm_id')->textInput() ?>

    <?= $form->field($model, 'Accesorios_id')->textInput() ?>

    <?= $form->field($model, 'Aro_id')->textInput() ?>

    <?= $form->field($model, 'Nodocumento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Empleado_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
