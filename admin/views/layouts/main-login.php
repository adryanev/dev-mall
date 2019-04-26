<?php

/* @var $this \yii\web\View */
/* @var $content string */

use admin\assets\MetronicLoginAsset;
use admin\assets\YiiAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

MetronicLoginAsset::register($this);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->
    <?php $this->head() ?>
</head>
<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
<?php $this->beginBody() ?>
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-login m-login--signin  m-login--5" id="m_login" style="background-image: url(<?= Yii::getAlias('@web/app/media/img/bg/bg-3.jpg')?>);">
        <div class="m-login__wrapper-1 m-portlet-full-height">
            <div class="m-login__wrapper-1-1">
                <div class="m-login__contanier">
                    <div class="m-login__content">
                        <div class="m-login__logo">
                            <a href="#">
                                <?=Html::img('@web/app/media/img/logos/logo-2.png')?>
                            </a>
                        </div>
                        <div class="m-login__title">
                            <h3>Welcome to Devmall Admin Panel</h3>
                        </div>
                        <div class="m-login__desc">
                            Silahkan masuk untuk melanjutkan
                        </div>

                    </div>
                </div>
                <div class="m-login__border">
                    <div></div>
                </div>
            </div>
        </div>
        <?=$content ?>
    </div>
</div>

<!-- end:: Page -->

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
