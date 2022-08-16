<?php

namespace app\widgets;

use app\models\Contacts;
use yii\bootstrap4\Widget;

class Contact extends Widget
{
    public function run()
    {
        $models = Contacts::find()->all();
        return $this->render('contact', compact('models'));
    }
}