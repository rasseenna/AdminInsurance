<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Insurance';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Home Insurance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'home_id',
            'username',
            'policy_name',
          //  'address',
           // 'built_date',
            'home_type',
            //'home_age',
            'membership_type',
            'premium_selected',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
