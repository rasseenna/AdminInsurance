<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Policy;
use backend\models\Premium;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Motor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="motor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?php 

$policies=Policy::find()->where(['policy_type'=>'motor'])->all();

$listData=ArrayHelper::map($policies,'policy_name','policy_name');

echo $form->field($model, 'policy_name')->dropDownList(
        $listData,
        ['prompt'=>'Select...']
        );

        ?>


    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'colour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registration_year')->widget(\yii\jui\DatePicker::class, [
        //'language' => 'ru',
        'dateFormat' => 'php:d-m-Y',
        'clientOptions' => [
            'changeMonth' => true,
            'changeYear' => true,
            'showButtonPanel' => true,
          //  'minDate' => 'date("d-m-Y")',
            'yearRange' => '1990:date(Y)',
        ],
        'options' => ['class' => 'form-control', 'readOnly' => true, 'placeholder' => 'Enter the registration Date', 'value' => date('d-m-Y')],
    ])
    ?>

    <?= $form->field($model, 'registration_number')->textInput(['maxlength' => true]) ?>

    <?php 

$premiums=Premium::find()->all();

$listData=ArrayHelper::map($premiums,'name','name');

echo $form->field($model, 'premium_selected')->dropDownList(
        $listData,
        ['prompt'=>'Select...']
        );

        ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
