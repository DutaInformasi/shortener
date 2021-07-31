<?php

namespace app\models;

use app\models\gii\Links;
use Yii;

class LinksExt extends Links
{
    const SCENARIO_CREATE_ALIAS = 'create';
    const SCENARIO_UPDATE_ALIAS = 'update';

    public function rules()
    {
        return [
            [['alias','url_string'], 'required'],
            [['alias'], 'string', 'max' => 25],
            [['url_string'], 'string', 'max' => 255],
            ['url_string', 'unique', 'targetClass' => Links::class, 'on' => 'create'],
            ['alias', 'unique', 'targetClass' => Links::class, 'on' => 'update'],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_CREATE_ALIAS] = ['url_string'];
        $scenarios[self::SCENARIO_UPDATE_ALIAS] = ['alias', 'url_string'];

        return $scenarios;
    }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        if ($insert) {
            $this->alias = Yii::$app->security->generateRandomString(Yii::$app->params['link_length']);
        }

        return true;
    }
}
