<?php

use common\widgets\MyActiveForm;
use yii\helpers\Html;
use app\models\CoreSettings;
use common\models\DdMenuCate;
use common\components\Upload;

$settings = Yii::$app->settings;
$menucate = DdMenuCate::find()->orderBy('sort')->asArray()->all();
/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">
    <?php $setting = CoreSettings::getKeysValue(''); ?>
    <?= Html::a('<span class="logo-mini"> '.$setting['abbreviation'].'</span><span class="logo-lg">' .$settings->get('Website', 'name').'</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <ul class="nav navbar-nav navbar-left">
            <?php foreach ($menucate as $key => $value): ?> 
            <li><a href="/backend/system/welcome/<?= $value['mark'] ?>"><?= $value['name'] ?></a></li>
            
            <?php endforeach; ?>
        </ul>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= Upload::tomdia(Yii::$app->user->identity->avatar) ?>" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
                    </a>
                    <ul class="dropdown-menu" role="menu" style="width: 100%;">
                        <li><a href="#" class="fa fa-ofuser-circle-o">我的账号</a></li>
                        <li>	 <?= Html::a(
    '退出登录',
    ['/site/logout'],
    ['data-method' => 'post', 'class' => '']
) ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
