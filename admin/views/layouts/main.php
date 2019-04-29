<?php

/* @var $this \yii\web\View */
/* @var $content string */

use admin\assets\MetronicAsset;
use admin\assets\YiiAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

YiiAsset::register($this);
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
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled
m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize
m-brand--minimize m-footer--push m-aside--offcanvas-default">
<?php $this->beginBody() ?>
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

   <?= $this->render('header')?>

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

       <?= $this->render('left')?>
        <?= $this->render('content',['content'=>$content]) ?>
    </div>

    <!-- end:: Body -->

   <?= $this->render('footer')?>
</div>

<!-- end:: Page -->
<?= $this->render('right')?>
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->


<?php $this->registerJsFile('@web/app/js/dashboard.js', ['depends'=> MetronicAsset::class])?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
