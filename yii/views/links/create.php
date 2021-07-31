<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LinksExt */

$this->title = 'Create Links Ext';
$this->params['breadcrumbs'][] = ['label' => 'Links Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="links-ext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
