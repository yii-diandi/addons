<?php

namespace app\modules\addons\controllers;

use yii\web\Controller;

/**
 * Default controllers for the `plugins` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
