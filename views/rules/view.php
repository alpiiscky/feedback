<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use alpiiscky\feedback\FeedbackModule;

/* @var $this yii\web\View */
/* @var $model alpiiscky\feedback\models\FeedbackRules */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => FeedbackModule::t('feedback', 'Feedback Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-rules-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(FeedbackModule::t('feedback', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(FeedbackModule::t('feedback', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => FeedbackModule::t('feedback', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'inputType',
            'inputRules:ntext',
            'sequence',
            'status',
        ],
    ]) ?>

</div>
