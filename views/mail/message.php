<?php
/* @var $rules array */
/* @var $feedbackModel \yii\base\DynamicModel */

$index = 0;
?>

<p>У Вас новое сообщение с формы обратной связи:</p>

<?php foreach ($feedbackModel->attributes as $key => $attribute): ?>

    <p><?= $rules[$index]['label'] ?>: <?= $attribute ?></p>
    <?php $index++; ?>

<?php endforeach; ?>