<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Accesorios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accesorios-form">

    <?php $form = ActiveForm::begin(); ?>
<!--
       <?= $form->field($model, 'Precio_compra')->textInput() ?>

    <?= $form->field($model, 'Existencia')->textInput() ?>
    
    <?= $form->field($model, 'Precio_venta')->textInput() ?>
-->
    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descripcion')->textarea(['rows' => 6]) ?>

 
    <?= $form->field($model, 'Porcentaje_ganancia')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Registrar'), ['class' => 'btn btn-success']) ?>
        <?php 
        if($inv == 1){
            echo Html::a(Yii::t('app', 'Cancelar'), ['entrada/createinacc', 'id' => 0], ['class' => 'btn btn-danger']);
        }
        else if($inv == 3)
        {
             echo  Html::a(Yii::t('app', 'Cancelar'), ['detallecompra/create','id'=> $ido, 'op'=>$op , 'idp' => 0], ['class' => 'btn btn-danger']);
        }
        ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
