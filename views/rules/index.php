<?php

use yii\helpers\Html;
use yii\grid\GridView;
use alpiiscky\feedback\FeedbackModule;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = FeedbackModule::t('feedback', 'Feedback Rules');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-rules-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(FeedbackModule::t('feedback', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= \himiklab\sortablegrid\SortableGridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'inputType',
            'inputRules:ntext',
            'sequence',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
