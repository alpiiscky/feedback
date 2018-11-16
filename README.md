Модуль обратной связи с динамическими полями
=======================================
Форма обратной связи с возможностью добавления динамичных полей и встроенной гугл капчей

Installation
------------

Для установки выполните

```
php composer.phar require --prefer-dist alpiiscky/yii2-feedback "*"
```

или

```
composer require --prefer-dist alpiiscky/yii2-feedback "*"
```

или добавьте

```
"alpiiscky/yii2-feedback": "*"
```

в `composer.json`.

Настройка
-----

Модуль имеет следующие зависимости:

```php
    "yiisoft/yii2": "~2.0.0",
    "himiklab/yii2-recaptcha-widget": "*",
    "himiklab/yii2-sortable-grid-view-widget" : "*",
    "devgroup/yii2-jsoneditor": "*",
    "webvimark/module-user-management": "^1.0"
```
и следовательно, 

1. необходимо настроить yii2 согласно инструкциям:

```php
https://github.com/himiklab/yii2-recaptcha-widget
https://github.com/webvimark/user-management
```
и выполнить миграцию для user-management

2. настроить swiftmailer

3. в params.php указать
```php
<?php

return [
    'adminEmail' => '', // куда отправить
    'noticeEmail' => '', // smtp-адрес
    'noticeTheme' => 'Обратная связь', // тема
];
```



Использование
-----

Динмаические поля можно настроить по url, предварительно авторизовавшись админом:
```php
/feedback/rules
```

```php
<?= \alpiiscky\feedback\widgets\FeedbackWidget::widget([])?>
```