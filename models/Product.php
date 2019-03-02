<?php
/**
 * Created by PhpStorm.
 * User: AAA
 * Date: 02.03.2019
 * Time: 13:32
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}