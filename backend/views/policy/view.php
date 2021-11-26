<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Policy */

$check_type = $model->policy_type;
if($check_type=='motor'){
    $name = 'Motor';
} else {
    $name = 'Home';
}
$this->title = $name;
$this->params['breadcrumbs'][] = ['label' => 'Policies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="policy-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Policy List', ['index'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Update', ['update', 'id' => $model->policy_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->policy_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Create Policy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'policy_id',
            'policy_type',
            'policy_name',
        ],
    ]) ?>

</div>
