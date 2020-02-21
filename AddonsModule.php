<?php

namespace diandi\addons;

use yii;
use common\models\DdModules;

/**
 * plugins module definition class
 */
class AddonsModule extends \yii\base\Module
{

    public $addons = 'system';


    public $layout = '@vendor/yii-diandi/addons/views/layouts/main.php';

    /**
     *设置默认的控制器
     *  @inheritdoc
     */
    public $defaultRoute = 'default';


    /**
     * @var string Main layout using for module. Default to layout of parent module.
     * Its used when `layout` set to 'left-menu', 'right-menu' or 'top-menu'.
     */
    public $mainLayout = '@vendor/yii-diandi/addons/views/layouts/main.php';

    /**
     * 自动运行
     */
    public function init()
    {
        // 继承
        parent::init();
        $DdModules = new DdModules();
        $modules = $DdModules::find()->asArray()->all();

        foreach ($modules as $key => $value) {
            $initmodule[$value['name']] =
                [
                    'class' => "app\modules\\" . $value['name'] . "\Module",
                    // 'components' => Yii::getAlias('@backend') . '/modules/' . $value['name'] . '/config/main.php'
                ];
            $configFile = Yii::getAlias('@backend') . '/modules/' . $value['name'] . '/config/main.php';
            if (file_exists($configFile)) {
                \Yii::configure($this, require $configFile);
            }
        }
        $this->modules = $initmodule;
    }

   
}
