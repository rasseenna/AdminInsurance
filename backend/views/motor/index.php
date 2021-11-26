<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MotorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Motor Insurance';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Motor Insurance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'motor_id',
            'username',
          //  'motor_type',
            'policy_name',
            'manufacturer',
            //'model',
            //'colour',
            //'registration_year',
            'registration_number',
            //'premium_selected',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
