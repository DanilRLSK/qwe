<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Solder */

$this->title = 'Update Solder: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Solders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
