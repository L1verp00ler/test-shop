<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 02.03.2019
 * Time: 13:22
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getProducts() {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

}