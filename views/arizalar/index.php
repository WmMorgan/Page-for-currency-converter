<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ArizaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Arizalar Ro\'yxati';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arizalar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- <?= Html::a('Create Arizalar', ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'familyname',
            'address',
            'countryoforigin',
            'email:email',
            'phonenumber',
            'age',
            'hired',
            'status',
            'suhbatvaqti_note',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

