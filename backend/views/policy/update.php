<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Policy */


$this->title = 'Update Policy: ' . $model->policy_name;
$this->params['breadcrumbs'][] = ['label' => 'Policies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->policy_id, 'url' => ['view', 'id' => $model->policy_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<p>
<?= Html::a('Members List', ['index'], ['class' => 'btn btn-primary']) ?>
</p>
<div class="policy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
