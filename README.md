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
    'noticeEmail' => '', // от кого
    'noticeTheme' => 'Обратная связь', // тема
];
```

4. Выполнить мирацию 
```
php yii migrate --migrationPath=vendor/alpiiscky/yii2-feedback/migrations/
```

5. Добавить модуль
```php
'feedback' => [
            'class' => 'alpiiscky\feedback\FeedbackModule',
            'layout' => '@app/views/layouts/main',
        ],
```

Использование
-----

Динамические поля можно настроить по url, предварительно авторизовавшись админом (webvimark/user-management):
```php
/feedback/rules
```

```php
<?= \alpiiscky\feedback\widgets\FeedbackWidget::widget([])?>
```

Например, настройка для текстового поля:
 ```php
[
  {
    "rule": "string",
    "params": {
      "max": 50,
      "message": "'Please choose a username.'"
    }
  },
  {
    "rule": "required",
    "params": {
      "message": "Please choose a username."
    }
  }
]
```
