<section class="testimonials-grid section-padding">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-sm-12">
                <h6>Our Clients</h6>
                <h4>What're <span>Clients</span> Says?</h4>
            </div>

            <div class="owl-carousel owl-theme col-lg-12">
                <?php if (!empty($models)):?>
                <?php foreach ($models as $model):?>

                        <?php
                        $img = \app\models\StaticFunctions::getImage("testimonials", $model->id, $model->images)
                        ?>
                <div class="item">
                    <span class="icon"><i class="fas fa-quote-left"></i></span>
                    <p><?=$model['comment_'.Yii::$app->language]?></p>
                    <div class="info">
                        <div class="img">
                            <img src="<?=$img?>" alt="">
                        </div>
                        <h6><?=$model->name?> <span><?=$model->email?></span></h6>
                    </div>
                </div>
                    <?php endforeach;?>
                <?php endif;?>
<!--                <div class="item">-->
<!--                    <span class="icon"><i class="fas fa-quote-left"></i></span>-->
<!--                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>-->
<!--                    <div class="info">-->
<!--                        <div class="img">-->
<!--                            <img src="frontend-files/img/client/2.jpg" alt="">-->
<!--                        </div>-->
<!--                        <h6>Sam Martin <span>Envato Customer</span></h6>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <span class="icon"><i class="fas fa-quote-left"></i></span>-->
<!--                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>-->
<!--                    <div class="info">-->
<!--                        <div class="img">-->
<!--                            <img src="frontend-files/img/client/3.jpg" alt="">-->
<!--                        </div>-->
<!--                        <h6>Sam Martin <span>Envato Customer</span></h6>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <span class="icon"><i class="fas fa-quote-left"></i></span>-->
<!--                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>-->
<!--                    <div class="info">-->
<!--                        <div class="img">-->
<!--                            <img src="frontend-files/img/client/4.jpg" alt="">-->
<!--                        </div>-->
<!--                        <h6>Sam Martin <span>Envato Customer</span></h6>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <span class="icon"><i class="fas fa-quote-left"></i></span>-->
<!--                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>-->
<!--                    <div class="info">-->
<!--                        <div class="img">-->
<!--                            <img src="frontend-files/img/client/3.jpg" alt="">-->
<!--                        </div>-->
<!--                        <h6>Sam Martin <span>Envato Customer</span></h6>-->
<!--                    </div>-->
<!--                </div>-->
            </div>

        </div>
    </div>
</section>