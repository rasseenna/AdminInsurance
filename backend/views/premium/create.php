<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Premium */

$this->title = 'Create Premium';
$this->params['breadcrumbs'][] = ['label' => 'Premia', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p>
<?= Html::a('Premium List', ['index'], ['class' => 'btn btn-primary']) ?>
</p>
<div class="premium-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
