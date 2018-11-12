<?php

use alpiiscky\feedback\FeedbackModule;
use yii\helpers\Url;
?>

<div class="feedback-default-index">
    <h1><?= FeedbackModule::t('feedback', 'Feedback Module') ?></h1>
    <p>
        <a href="<?= Url::to('/feedback/rules') ?>"><?= FeedbackModule::t('feedback', 'Feedback Rules') ?></a>
    </p>
</div>
