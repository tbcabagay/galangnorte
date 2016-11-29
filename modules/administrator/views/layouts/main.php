<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;
use app\assets\FontAwesomeAsset;
use app\assets\BootboxAsset;

AdminAsset::register($this);
FontAwesomeAsset::register($this);
BootboxAsset::register($this);
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
<body class="wrap">
<?php $this->beginBody() ?>

    <?php
    NavBar::begin([
        'id' => 'mainNav',
        'innerContainerOptions' => ['class' => 'container-fluid'],
        'brandLabel' => Yii::$app->params['appTitle'],
        'brandUrl' => ['/administrator/default/index'],
        'brandOptions' => ['class' => 'page-scroll'],
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'About', 'url' => '#about', 'linkOptions' => ['class' => 'page-scroll']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                asd
            </div>
            <?= $content ?>
        </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
