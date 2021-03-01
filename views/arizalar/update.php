<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Arizalar */

$this->title = 'Suhbat vaqtni belgilash: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Arizalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="arizalar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
