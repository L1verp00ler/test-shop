<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 10.03.2019
 * Time: 0:21
 */

namespace app\models;

use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($product, $qty = 1) {
        echo 'Worked!';
    }

}