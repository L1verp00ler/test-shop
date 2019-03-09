<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 09.03.2019
 * Time: 15:11
 */

namespace app\controllers;

use app\models\Product;
use Yii;

class ProductController extends AppController
{
    public function actionView($id) {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        //$product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        return $this->render('view', compact('product'));
    }

}