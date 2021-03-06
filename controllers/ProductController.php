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
use yii\web\HttpException;

class ProductController extends AppController
{
    public function actionView($id) {
        //$id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if (!$product) {
            throw new HttpException(404, 'Такого товара не существует...');
        }

        //$product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
    }

}