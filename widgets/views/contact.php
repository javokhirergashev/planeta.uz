<!-- Contact -->
<section class="contact section-padding">
    <div class="container">
        <div class="row mb-90">
            <div class="col-md-6 mb-60">

                <h3 id="white"><?=Yii::t("app", "contactt1")?></h3>
                <p><?=Yii::t("app", "contactp")?></p>
                <?php if (!empty($models)): ?>
                <?php foreach ($models as $model): ?>
                <div class="phone-call mb-30">
                    <div class="icon"><span class="flaticon-phone-call"></span></div>
                    <div class="text">
                        <p><?=Yii::t("app", "tel")?></p> <a href="#"><?=$model->first_phone?></a>
                    </div>
                </div>
                <div class="phone-call mb-30">
                    <div class="icon"><span class="flaticon-message"></span></div>
                    <div class="text">
                        <p><?=Yii::t("app", "email")?></p> <a href="mailto:info@luxuryhotel.com"><?=$model->email?></a>
                    </div>
                </div>
                <div class="phone-call">
                    <div class="icon"><span class="flaticon-placeholder"></span></div>
                    <div class="text">
                        <p><?=Yii::t('app','location')?></p><a href="#"><?=$model->addres?></a>
                    </div>
                </div>
                    <?php endforeach;?>
                <?php endif; ?>


                <?php if (!empty($models)): ?>
                    <?php foreach ($models as $model): ?>
                        <div class="footer-social-links mb-90 mb-xs-40">
                            <a href="<?=$model->facebook_link?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i> <span class="sr-only">Facebook profile</span></a>
                            <a href="<?=$model->tweetter_link?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i> <span class="sr-only">Twitter profile</span></a>
                            <a href="<?=$model->telegram_link?>" title="Telegram" target="_blank"><i class="fab fa-telegram"></i> <span class="sr-only">Behance profile</span></a>
                            <a href="<?=$model->instagram_link?>" title="Instagram" target="_blank"><i class="fab fa-instagram"></i> <span class="sr-only">Pinterest profile</span></a>
                        </div>
                    <?php endforeach;?>
                <?php endif; ?>

            </div>
            <div class="col-md-5 mb-30 offset-md-1">
                <div class="sidebar">
                    <div class="right-sidebar">
                        <div class="right-sidebar item">
                            <h2>Get in touch</h2>
                            <form method="post" class="right-sidebar item-form contact__form" action="https://duruthemes.com/demo/html/travol/mail.php">
                                <!-- form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                                    </div>
                                </div>
                                <!-- form elements -->
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" id="input_name" placeholder="<?=Yii::t('app','name')?>*" name="name" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" id="input_surname" placeholder="<?=Yii::t("app", "surname")?>*" name="surname" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="number" id="input_tel" placeholder="<?=Yii::t("app", "tel")?>*" name="Subject" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="datetime-local" id="input_data" placeholder="<?=Yii::t("app", "data")?>" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="email" id="input_email" placeholder="<?=Yii::t("app", "email")?>*" name="email" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <select id="select" data-aos="fade-up">
                                            <option disabled selected><?= Yii::t("app", "category1")?></option>
                                            <?php if(!empty($contacts)):?>
                                                <?php foreach ($contacts as $contact):?>
                                                    <option><?=$contact["title_".Yii::$app->language];?></option>
                                                <?php endforeach;?>
                                            <?php endif;?>
                                        </select>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea name="message" id="message" cols="30" rows="4" placeholder="<?=Yii::t("app", "message")?> *" required></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button id="submit" onclick="getValue()" class="butn-dark"><a href="#0"><span><?=Yii::t("app", "send")?></span></a></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map Section -->
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.3887826246428!2d71.67176781987831!3d40.994862971703405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc97ea63ce0450313!2zNDDCsDU5JzQxLjUiTiA3McKwNDAnMzMuNiJF!5e0!3m2!1sru!2s!4v1663476203777!5m2!1sru!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>