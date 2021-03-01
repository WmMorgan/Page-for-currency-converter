<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Arizalar */

$this->title = 'Create Arizalar';
$this->params['breadcrumbs'][] = ['label' => 'Arizalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arizalar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
