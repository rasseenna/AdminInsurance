<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Home */

$this->title = 'Update Home Insurance: ' . $model->home_id;
$this->params['breadcrumbs'][] = ['label' => 'Homes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->home_id, 'url' => ['view', 'home_id' => $model->home_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<p>
<?= Html::a('Home Insurance List', ['index'], ['class' => 'btn btn-primary']) ?>
</p>
<div class="home-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
