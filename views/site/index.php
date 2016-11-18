<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = Yii::$app->params['appTitle'];
?>

<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">Welcome To Galang Norte<br>Van Rental</h1>
            <hr>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Your way to the<br>GLOBALLY IMPORTANT AGRICULTURAL HERITAGE SYSTEMS<br>and SATOYAMA sites in Ifugao, Philippines</h2>
                <hr class="light">
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">At Your Service</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-car text-primary sr-icons"></i>
                    <h3>Car / Van Rental</h3>
                    <p class="text-muted">Toyota Super Grandia (10 seater)</p>
                    <p class="text-muted">Toyota GL (12 seater)</p>
                    <p class="text-muted">Toyota Fortuner (4 seater)</p>
                    <p class="text-muted">Nissan Urvan Escapade (12 seater)</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-map text-primary sr-icons"></i>
                    <h3>Tour Guiding To</h3>
                    <p class="text-muted">Batad Rice Terraces</p>
                    <p class="text-muted">Hungduan (Hapao Rice Terraces)</p>
                    <p class="text-muted">Mayoyao Rice Terraces</p>
                    <p class="text-muted">Bangaan Rice Terraces</p>
                    <p class="text-muted">Nagacadan Rice Terraces (Kiangan, Ifugao)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
-->

<section id="clients" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Clients</h2>
                <hr class="light">
            </div>
        </div>
    </div>
    <div class="container">
        <ul class="timeline">
            <li>
                <div class="timeline-image">
                    <?= Html::img('@web/img/AYAD.jpg', ['class' => 'img-circle img-responsive']) ?>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Australian Youth Ambassadors for Development</h4>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <?= Html::img('@web/img/SATOYAMA.jpg', ['class' => 'img-circle img-responsive']) ?>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Satoyama Meister Training Program</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image">
                    <?= Html::img('@web/img/KANAZAWA_UNIVERSITY.jpg', ['class' => 'img-circle img-responsive']) ?>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Kanazawa University, Ishikawa Japan</h4>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <?= Html::img('@web/img/PHILIPPINES.jpg', ['class' => 'img-circle img-responsive']) ?>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Philippine Government Projects</h4>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image">
                    <h4>Be Part<br>Of Our<br>Story!</h4>
                </div>
            </li>
        </ul>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x sr-contact"></i>
                <p>123-456-6789</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
            </div>
        </div>
    </div>
</section>