<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

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
            'alias',
            'url_string:url',
            [
                'header' => 'URL Shorten',
                'value' => function($model){
                    return Html::a(Url::base(true).'/'.$model->alias, Url::base(true).'/'.$model->alias, ['target' => '_blank']);
                },
                'format' => 'raw'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
