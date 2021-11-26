<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PolicySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Policies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Policy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'policy_id',
            'policy_type',
            'policy_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
