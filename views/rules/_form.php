<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use alpiiscky\feedback\models\FeedbackRules;
use alpiiscky\feedback\FeedbackModule;

/* @var $this yii\web\View */
/* @var $model alpiiscky\feedback\models\FeedbackRules */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feedback-rules-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inputType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inputRules')->widget(\devgroup\jsoneditor\Jsoneditor::class, [
        'editorOptions' => [
            'modes' => ['code', 'form', 'text', 'tree', 'view'],
            'mode' => 'tree',
        ],
    ]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        FeedbackRules::STATUS_DISABLED => FeedbackModule::t('feedback', 'Disabled'),
        FeedbackRules::STATUS_ENABLED => FeedbackModule::t('feedback', 'Enabled')
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton(FeedbackModule::t('feedback', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
