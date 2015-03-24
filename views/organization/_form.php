<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Organization */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organization-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'address2')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'postcode')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'state_id')->textInput() ?>

    <?= $form->field($model, 'contact_person')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'contact_phone')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'contact_email')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
