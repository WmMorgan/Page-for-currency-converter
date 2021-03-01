<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArizaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="arizalar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'familyname') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'countryoforigin') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'phonenumber') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'hired') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'suhbatvaqti_note') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
