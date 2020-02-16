<?php

namespace diandi\addons;

use common\models\DdModules;
use yii;

/**
 * plugins module definition class
 */
class Module extends AddonsModule
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\addons\controllers';

    public $_addonName;
    /**
     * 自动运行
     */
    public function init()
    {
        // 继承
        parent::init();
    }
}
