<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\State */

$this->context->layout = '@admin-views/layouts/main';
$this->title = 'Create State';
$this->params['breadcrumbs'][] = ['label' => 'States', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="state-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
