<?php
namespace app\controllers;
use app\models\StaticFunctions;

use app\models\Tours;

use app\models\ToursCategory;
class CategoryController extends GeneralController
{
    public function actionView($id)
    {
        $models = Tours::find()->where(['category_id' => $id,])->all();
        $categories = ToursCategory::find()->where(['status' => 1,])->all();
//        debug($models);
        if (empty($models)) {
            $this->redirect('/web/error/view');
        } else
//            $image = StaticFunctions::getImage('tours',$model->id,$model->images);
            return $this->render('view', compact('models','categories'));
    }
}