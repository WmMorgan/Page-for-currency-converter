<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Arizalar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="arizalar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
//    echo $form->field($model, 'name')->textInput(['maxlength' => true]);
//
//    echo $form->field($model, 'familyname')->textInput(['maxlength' => true]);
//
//    echo $form->field($model, 'address')->textInput(['maxlength' => true]);
//
//    echo $form->field($model, 'countryoforigin')->textInput(['maxlength' => true]);
//
//    echo $form->field($model, 'email')->textInput(['maxlength' => true]);
//
//    echo $form->field($model, 'phonenumber')->textInput(['maxlength' => true]);
//
//    echo $form->field($model, 'age')->textInput();
//
//    echo $form->field($model, 'hired')->textInput(['maxlength' => true]);

    echo $form->field($model, 'status')->dropDownList(['Yangi'=>'Yangi', 'Intervyu belgilangan'=>'Intervyu belgilangan', 'Qabul qilingan'=>'Qabul qilingan', 'Qabul qilinmagan'=>'Qabul qilinmagan']);

    echo $form->field($model, 'suhbatvaqti_note')->textarea(['rows' => '6']);
?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
