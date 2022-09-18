<div class="tours3 section-padding bg-lightnav">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(!empty($categories)):?>
                    <?php foreach ($categories as $category):?>
                        <h1 class="section-heading"><?=$category["name_".Yii::$app->language]?> </h1>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
        <div class="row">
            <?php if (!empty($models)):?>
                <?php foreach ($models as $model) : ?>
                    <?php
<<<<<<< HEAD
                    $image = \app\models\StaticFunctions::getImage('tours',$model->id,$model->images);
=======
                    $image = \app\models\StaticFunctions::getImage('tours', $model->id, $model->images);
>>>>>>> d0ea96568de1b654006eed07aef2ca24bd3e8dee
                    if (is_file($image)){
                        $image = "images/no_photo.png";
                    }
                    ?>
                    <div class="col-md-4">
                        <div class="square-flip">
<<<<<<< HEAD
                            <div class="square bg-img" data-background="<?=$image?>"> <span class="category"><a href="#"><?=$model['title_'.Yii::$app->language];?></a></span>
=======
                            <div class="square bg-img"><img id="dataimg" src="<?=$image?>" alt=""> <span class="category"><a href="#"><?=$model['title_'.Yii::$app->language];?></a></span>
>>>>>>> d0ea96568de1b654006eed07aef2ca24bd3e8dee
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h4><?=$model['title_'.Yii::$app->language];?></h4>
                                        <h6><?=$model->price?></h6>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2 bg-white">
                                <div class="square-container2">
                                    <h4><?=$model['title_'.Yii::$app->language];?></h4>
                                    <h6><?=$model->price?></h6>
                                    <p><?=$model['description_'.Yii::$app->language];?></p>
                                    <div class="row tour-list mb-30">
                                        <div class="col col-md-6">
                                            <ul>
                                                <li><i class="ti-time"></i><?=$model->period?>;</li>
                                                <li><i class="ti-user"></i> 10+</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="btn-line"><a href="<?=\yii\helpers\Url::to(["toursview/view", "id"=>$model->id])?>"><?=Yii::t("app", "more")?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif; ?>
        </div>
    </div>
</div>