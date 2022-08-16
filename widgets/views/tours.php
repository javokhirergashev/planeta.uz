<section class="blog section-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="section-head text-center col-sm-12">
                <h6>Our Blog</h6>
                <h4>Latest <span>News</span></h4>
            </div>
            <?php if (!empty($models)):?>
            <?php foreach ($models as $model):?>
                    <?php
                        $packimg = \app\models\StaticFunctions::getImage("tours", $model->id, $model->images)
                    ?>
            <div class="col-lg-4">
                <div class="item hover3d mb-md50">
                    <div class="post-img">
                        <div class="img hover3d-child">
                            <img src="<?=$packimg?>" alt="">
                        </div>
                        <div class="tag">
                            <a href="#0"><span class="icon"><i class="fas fa-tags"></i></span> Business</a>
                        </div>
                    </div>
                    <div class="cont">
                        <h6><a href="blog-single.html"><?=$model["title_".Yii::$app->language]?></a></h6>
                        <p><?=$model["description_".Yii::$app->language]?></p>
                        <div class="info">
                            <span class="author"><?=$model->price?></span>
                            <a href="<?=\yii\helpers\Url::to(["price/view", "id"=>$model->id])?>" class="right"><span class="icon">more</a>
                        </div>
                    </div>
                </div>
            </div>
                <?php endforeach;?>
            <?php endif;?>

        </div>
    </div>
</section>