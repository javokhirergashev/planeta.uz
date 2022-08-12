<?php

namespace app\widgets;

use yii\bootstrap5\Widget;
use app\models\Contacts;

class Footer extends Widget
{
    public function run()
    {
        $models = Contacts::find()->all();
        return $this->render('footer', compact("models"));
    }
}