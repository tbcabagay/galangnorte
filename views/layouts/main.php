<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\FontAwesomeAsset;
use app\assets\ScrollRevealAsset;
use app\assets\MagnificPopupAsset;
use app\assets\CreativeAsset;

AppAsset::register($this);
FontAwesomeAsset::register($this);
ScrollRevealAsset::register($this);
MagnificPopupAsset::register($this);
CreativeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">
<?php $this->beginBody() ?>

    <?php
    NavBar::begin([
        'id' => 'mainNav',
        'innerContainerOptions' => ['class' => 'container-fluid'],
        'containerOptions' => ['id' => 'bs-example-navbar-collapse-1'],
        'brandLabel' => Yii::$app->params['appTitle'],
        'brandUrl' => '#page-top',
        'brandOptions' => ['class' => 'page-scroll'],
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'About', 'url' => '#about', 'linkOptions' => ['class' => 'page-scroll']],
            ['label' => 'Services', 'url' => '#services', 'linkOptions' => ['class' => 'page-scroll']],
            ['label' => 'Clients', 'url' => '#clients', 'linkOptions' => ['class' => 'page-scroll']],
            ['label' => 'Contact', 'url' => ['/site/contact'], 'linkOptions' => ['class' => 'page-scroll']],
            /*Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )*/
        ],
    ]);
    NavBar::end();
    ?>

    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
