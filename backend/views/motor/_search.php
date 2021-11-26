<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MotorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="motor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'motor_id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'motor_type') ?>

    <?= $form->field($model, 'policy_name') ?>

    <?= $form->field($model, 'manufacturer') ?>

    <?php // echo $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'colour') ?>

    <?php // echo $form->field($model, 'registration_year') ?>

    <?php // echo $form->field($model, 'registration_number') ?>

    <?php // echo $form->field($model, 'premium_selected') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
