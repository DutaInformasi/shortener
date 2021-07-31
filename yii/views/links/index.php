<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LinksExtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Links Exts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="links-ext-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Links Ext', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'alias',
            'url_string:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
