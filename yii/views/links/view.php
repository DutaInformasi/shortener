<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LinksExt */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Links Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="links-ext-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'alias',
            'url_string:url',
            [
                'attribute' => 'URL Shorten',
                'value' => function($model){
                    return Html::a(Url::base(true).'/'.$model->alias, Url::base(true).'/'.$model->alias, ['target' => '_blank']);
                },
                'format' => 'raw'
            ],
        ],
    ]) ?>

</div>
