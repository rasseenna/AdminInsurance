<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Home */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Homes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="home-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Home Insurance List', ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->home_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->home_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Create New Home Insurance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'home_id',
            'username',
            'policy_name',
            'address',
            'built_date',
            'home_type',
            'home_age',
            'membership_type',
            'premium_selected',
        ],
    ]) ?>

</div>
