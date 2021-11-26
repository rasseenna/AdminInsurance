<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Policy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="policy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'policy_type')->dropdownList(['Motor' => 'Motor', 'Home' => 'Home'], ['prompt' => '---Select Policy Type---']) ?>

    <?= $form->field($model, 'policy_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
