<?php

namespace app\controllers;

use app\models\LinksExt;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class RedirectController extends Controller
{
    public function actionIndex($alias=null)
    {
        $link = LinksExt::findOne(['alias' => $alias]);

        if ($link == null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        } else {
            return $this->redirect($link->url_string);
        }
    }
}
