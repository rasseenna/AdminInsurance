<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Home */

$this->title = 'Create Home Insurance';
$this->params['breadcrumbs'][] = ['label' => 'Homes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p>
<?= Html::a('Home Insurance List', ['index'], ['class' => 'btn btn-primary']) ?>
</p>
<div class="home-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
