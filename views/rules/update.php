<?php

use yii\helpers\Html;
use alpiiscky\feedback\FeedbackModule;

/* @var $this yii\web\View */
/* @var $model alpiiscky\feedback\models\FeedbackRules */

$this->title = FeedbackModule::t('feedback', 'Update Feedback Rules: {nameAttribute}', [
    'nameAttribute' => '' . $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => FeedbackModule::t('feedback', 'Feedback Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = FeedbackModule::t('feedback', 'Update');
?>
<div class="feedback-rules-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
