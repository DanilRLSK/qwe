<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Solder */

$this->title = 'Create Solder';
$this->params['breadcrumbs'][] = ['label' => 'Solders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
