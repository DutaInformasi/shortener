<?php

namespace app\controllers;

use app\models\gii\Links;
use yii\helpers\Url;
use yii\web\Controller;

class RedirectController extends Controller
{
    public function actionIndex($alias)
    {
        $link = Links::findOne(['alias' => $alias]);

        if ($link == null) {
            return "Sorry, alias $alias not found";
        } else {
            return $this->redirect($link->url_string);
        }
    }
}
