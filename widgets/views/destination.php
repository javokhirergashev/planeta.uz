<section class="works section-padding">
    <div class="container">
        <div class="row">

            <div class="section-head text-center col-sm-12">
                <h6>Our Portfolio</h6>
                <h4>Latest <span>Creative</span> Work</h4>
            </div>
            <?php
                $filters = ['.graphic',  '.brand', '.web']
            ?>


            <!-- filter links -->
            <div class="filtering text-center mb-30 col-sm-12">
                <div class="filter">
                    <?php if (!empty($filters)):?>
                        <?php foreach ($filters as $filter):?>
                    <?php if (!empty($models)):?>
                        <?php foreach ($models as $model):?>
                                <span data-filter="<?=$filter?>" class="active"><?=$model["name_".Yii::$app->language];?></span>
                            <?php endforeach;?>
                    <?php endif;?>
                        <?php endforeach;?>
                    <?php endif;?>

                </div>

            </div>

            <div class="clearfix"></div>

            <!-- gallery -->
            <div class="gallery full-width" style="position: relative; height: 760px;">
                    <?php if (!empty($models)):?>
                    <?php foreach ($models as $model):?>

                    <?php
                        $img = \app\models\StaticFunctions::getImage("tours_category", $model->id, $model->images);
                    ?>
                <!-- gallery item -->
                <div class="col-lg-4 col-md-6 items graphic" style="position: absolute; left: 0px; top: 0px;">
                    <div class="item-img">
                        <img src="<?=$img?>" alt="image">
                        <div class="item-img-overlay">
                            <div class="overlay-info full-width">
                                <p><?=$model["name_".Yii::$app->language];?></p>
<!--                                <h6>Creative Web Design</h6>-->
                                <a href="img/portfolio/1.jpg" class="popimg">
                                    <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                    <?php endforeach;?>
                <?php endif;?>
            </div>

        </div>
    </div>
</section>