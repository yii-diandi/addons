<?php

namespace diandi\addons\controllers;

use backend\controllers\BaseController;
use yii\web\Controller;

/**
 * Default controllers for the `plugins` module
 */
class DefaultController extends BaseController
{
    /**
     * 子模块默认首页
     * @return string
     */
    public function actionIndex()
    {

        $this->layout = "@backend/views/layouts/plugins-base";

        return $this->render('index');
    }

   
}
