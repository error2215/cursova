<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Ця помилка виникла, коли сервер обробляв ваш запит.
    </p>
    <p>
        Будь ласка, зв'яжіться, якщо ви вважаєте, що це серверна помилка.
    </p>

</div>
