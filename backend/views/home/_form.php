<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Policy;
use backend\models\Premium;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Home */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="home-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?php 

$policies=Policy::find()->where(['policy_type'=>'home'])->all();

$listData=ArrayHelper::map($policies,'policy_name','policy_name');

echo $form->field($model, 'policy_name')->dropDownList(
        $listData,
        ['prompt'=>'Select...']
        );

        ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'built_date')->widget(\yii\jui\DatePicker::class, [
        //'language' => 'ru',
        'dateFormat' => 'php:d-m-Y',
        'clientOptions' => [
            'changeMonth' => true,
            'changeYear' => true,
            'showButtonPanel' => true,
          //  'minDate' => 'date("d-m-Y")',
            'yearRange' => '1950:date(Y)',
        ],
        'options' => ['class' => 'form-control', 'readOnly' => true, 'placeholder' => 'Enter the house Built Date', 'value' => date('d-m-Y')],
    ])
    ?>

    <?= $form->field($model, 'home_type')->dropdownList(['Single Floor' => 'Single Floor', 'Double Floor' => 'Double Floor', 'Flat' => 'Flat'], ['prompt' => '---Select Home Type---']) ?>

    <?= $form->field($model, 'home_age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'membership_type')->dropdownList(['Family' => 'Family', 'Individual' => 'Individual'], ['prompt' => '---Select Membership Type---']) ?>

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
