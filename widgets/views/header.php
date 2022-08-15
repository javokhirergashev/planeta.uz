<nav class="navbar navbar-expand-lg">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="#">
            <img src="/frontend-files/img/logo-light.png" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php if (!empty($models)):?>
                    <?php foreach ($models as $model) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=$model->link?>"><?=$model['name_'.Yii::$app->language]?></a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
                <li class="nav-item dropdown">
                    <span class="nav-link"> <i class="fas fa-globe"></i></span>
                    <ul class="dropdown-menu last">
                        <?php
                        foreach (Yii::$app->params['language'] as $key => $value){
                            echo "<li class='dropdown-item'><a href='".\yii\helpers\Url::to(['site/ozgar',"til"=>$key])."'>".$value."</a></li>";
                        }
                        ?>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>

<!-- End Navbar ====
======================================= -->


<!-- =====================================
==== Start Header -->

<header class="header valign bg-img" data-overlay-dark="5" data-background="frontend-files/img/bg2.jpg" data-stellar-background-ratio="0.5">

    <div class="container">
        <div class="row">
            <div class="full-width text-center caption mt-30">
                <h4>We Are Creative</h4>
                <h1>Creative Digital Agency</h1>
                <p>A single place to share, curate and discover visual that tells a story.</p>
                <a href="#0" class="butn butn-light mt-30">
                    <span>Learn More</span>
                </a>
                <a href="#0" class="butn butn-bg mt-30">
                    <span>Get Started</span>
                </a>
            </div>
        </div>
    </div>
</header>