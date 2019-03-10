<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 10.03.2019
 * Time: 0:15
 */

namespace app\controllers;

use app\models\Cart;
use app\models\Product;
use Yii;

class CartController extends AppController
{
    public function actionAdd() {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        if (!$product) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product);
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }

}