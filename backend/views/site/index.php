<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

// $this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Welcome To Smart Insurance System!</h1>
    </div>
 <?php   //echo $webroot = Yii::app()->baseUrl;
 ?>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-2">
                
                <?= Html::a('Total Members', ['../backend/member'], ['class' => 'btn btn-lg btn-success']) ?>                
            </div>
            <div class="col-lg-2">
                
                <?= Html::a('Motor Insurance', ['../backend/motor'], ['class' => 'btn btn-lg btn-success']) ?>
            </div>
            <div class="col-lg-2">
                
                <?= Html::a('Home Insurance', ['../backend/home'], ['class' => 'btn btn-lg btn-success']) ?>
            </div>
            <div class="col-lg-2">
                
                <?= Html::a('Total Policy Types', ['../backend/policy'], ['class' => 'btn btn-lg btn-success']) ?>
            </div>
            <div class="col-lg-2">
                
                <?= Html::a('Premium Available', ['../backend/premium'], ['class' => 'btn btn-lg btn-success']) ?>
            </div>
        </div>

    </div>
</div>
