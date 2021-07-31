<?php

namespace app\controllers;

use app\models\LinksExt;
use yii\web\Controller;

class RedirectController extends Controller
{
    public function actionIndex($alias)
    {
        $link = LinksExt::findOne(['alias' => $alias]);

        if ($link == null) {
            return "Sorry, alias $alias not found";
        } else {
            return $this->redirect($link->url_string);
        }
    }
}
