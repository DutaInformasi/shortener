<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LinksExt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="links-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url_string')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
