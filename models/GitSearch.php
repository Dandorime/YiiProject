<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class GitSearch extends ActiveRecord
{
    public static function tableName()
    {
        return 'gitsearch';
    }

}