<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Motor */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Motors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="motor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Motor List', ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->motor_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->motor_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Create New Motor Insurance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'motor_id',
            'username',
          //  'motor_type',
            'policy_name',
            'manufacturer',
            'model',
            'colour',
            'registration_year',
            'registration_number',
            'premium_selected',
        ],
    ]) ?>

</div>
