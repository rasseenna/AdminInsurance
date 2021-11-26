<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Motor */

$this->title = 'Update Motor Insurance: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Motors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->motor_id, 'url' => ['view', 'motor_id' => $model->motor_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<p>
<?= Html::a('Motor Insurance List', ['index'], ['class' => 'btn btn-primary']) ?>
</p>
<div class="motor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
