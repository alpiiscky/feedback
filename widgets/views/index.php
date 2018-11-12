<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $feedbackModel \yii\base\DynamicModel */
/* @var $rules array */
?>

<?php $form = ActiveForm::begin(['id' => 'contact-form', 'action' => '/feedback/submit']); ?>

    <?php foreach ($rules as $attribute): ?>
        <?php
            switch ($attribute['type']) {
                case 'textInput':
                    echo $form->field($feedbackModel, $attribute['name'])->textInput()->label($attribute['label']);
                    break;
                case 'text':
                    echo $form->field($feedbackModel, $attribute['name'])->textarea(['rows' => 6])->label($attribute['label']);
                    break;
                case 'googleCaptcha':
                    echo $form->field($feedbackModel, $attribute['name'])->widget(\himiklab\yii2\recaptcha\ReCaptcha::class)->label($attribute['label']);
                    break;
            }
        ?>
    <?php endforeach; ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>

<?php ActiveForm::end(); ?>