<?php

namespace app\widgets;

use yii\bootstrap4\Widget;

class Signup extends Widget
{
    public function run()
    {
        return $this->render('signup');
    }
}