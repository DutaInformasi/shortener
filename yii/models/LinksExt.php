<?php

namespace app\models;

use app\models\gii\Links;
use Yii;

class LinksExt extends Links
{
    public function rules()
    {
        return [
            [['url_string'], 'required'],
            [['alias'],'safe'],
            [['alias'], 'string', 'max' => 25],
            [['url_string'], 'string', 'max' => 255],
        ];
    }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        $random_string = Yii::$app->security->generateRandomString();
        $this->alias = substr($random_string,1,Yii::$app->params['link_length']);

        return true;
    }
}
