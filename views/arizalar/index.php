<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ArizaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Arizalar Ro\'yxati';
echo Breadcrumbs::widget([
    'itemTemplate' => "<li><i>{link} / </i></li><br>", // template for all links
    'links' => [
//        [
//            'label' => 'Post Category',
//            'url' => ['post-category/view', 'id' => 10],
//            'template' => "<li><b>{link}</b></li>\n", // template for this link only
//        ],
//        ['label' => 'Sample Post', 'url' => ['post/edit', 'id' => 1]],
        ['label'=> $this->title,
        'template'=> '<span class="is-active"> {link}</span>'],
    ],
]);
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

