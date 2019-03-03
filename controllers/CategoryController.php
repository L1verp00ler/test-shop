<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 03.03.2019
 * Time: 12:05
 */

namespace app\controllers;

use app\models\Product;

class CategoryController extends AppController
{
    public function actionIndex() {
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        return $this->render('index', compact('hits'));
    }

}