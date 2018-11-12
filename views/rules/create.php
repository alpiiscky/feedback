<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model alpiiscky\feedback\models\FeedbackRules */

$this->title = Yii::t('app', 'Create Feedback Rules');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Feedback Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-rules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
