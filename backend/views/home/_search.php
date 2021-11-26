<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\HomeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'home_id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'policy_name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'built_date') ?>

    <?php // echo $form->field($model, 'home_type') ?>

    <?php // echo $form->field($model, 'home_age') ?>

    <?php // echo $form->field($model, 'membership_type') ?>

    <?php // echo $form->field($model, 'premium_selected') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
