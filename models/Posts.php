<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 26.07.2017
 * Time: 10:07
 */

namespace app\models;
use yii\db\ActiveRecord;

class Posts extends ActiveRecord
{

    public static function tableName()
    {
        return 'tbl_posts';
    }
}