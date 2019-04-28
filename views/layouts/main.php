<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="main-header border-bottom-shadow-style">
    <div class="container">
        <nav class="navigation">
            <div class="nav-logo"><a href="<?= Url::to(['site/index']); ?>" class="header-logo">Турнір юних інформатиків</a></div>
            <?php
            echo Menu::widget([
                'items' => [
                    ['label' => 'Головна', 'url' => ['site/index']],
                    ['label' => 'Галарея', 'url' => ['gallery/categories']],
                    ['label' => 'Правила', 'url' => ['site/services']],
                    ['label' => 'Роботи учасників', 'url' => ['site/contacts']],
                    ['label' => 'Контакти', 'url' => ['site/contacts']],
                ],
                'options' => [
                    'class' => 'main-navigation',
                ],
                'activeCssClass' => 'nav-url active',
                'itemOptions' => array('class' => 'nav-url')
            ]);
            ?>
        </nav>
    </div>
</div>

<?= $content ?> 

<footer class="main-footer">
    <div class="container">
        <div class="footer-wrap">
            <div class="footer-info">
                <ul class="footer-info-nav">
                    <li><a href="http://">Про сайт</a></li>
                    <li><a href="http://">Реклама</a></li>
                    <li><a href="http://">Контакти</a></li>
                    <li><a href="http://">Про сайт</a></li>
                    <li><a href="http://">Реклама</a></li>
                    <li><a href="http://">Контакти</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
