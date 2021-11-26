<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Premium */

$this->title = 'Update Premium: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Premia', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->premium_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<p>
<?= Html::a('Premium List', ['index'], ['class' => 'btn btn-primary']) ?>
</p>
<div class="premium-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
