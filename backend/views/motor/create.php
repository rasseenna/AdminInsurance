<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Motor */

$this->title = 'Create Motor Insurance';
$this->params['breadcrumbs'][] = ['label' => 'Motors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p>
<?= Html::a('Motor Insurance List', ['index'], ['class' => 'btn btn-primary']) ?>
</p>
<div class="motor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
