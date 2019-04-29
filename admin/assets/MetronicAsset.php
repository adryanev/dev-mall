<?php


namespace admin\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

class MetronicAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'vendors/perfect-scrollbar/css/perfect-scrollbar.css',
        'vendors/tether/dist/css/tether.css',
        'vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css',
        'vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css',
        'vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
        'vendors/bootstrap-daterangepicker/daterangepicker.css',
        'vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css',
        'vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css',
        'vendors/bootstrap-select/dist/css/bootstrap-select.css',
        'vendors/select2/dist/css/select2.css',
        'vendors/nouislider/distribute/nouislider.css',
        'vendors/owl.carousel/dist/assets/owl.carousel.css',
        'vendors/owl.carousel/dist/assets/owl.theme.default.css',
        'vendors/ion-rangeslider/css/ion.rangeSlider.css',
        'vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css',
        'vendors/dropzone/dist/dropzone.css',
        'vendors/summernote/dist/summernote.css',
        'vendors/bootstrap-markdown/css/bootstrap-markdown.min.css',
        'vendors/animate.css/animate.css',
        'vendors/toastr/build/toastr.css',
        'vendors/jstree/dist/themes/default/style.css',
        'vendors/morris.js/morris.css',
        'vendors/chartist/dist/chartist.min.css',
        'vendors/sweetalert2/dist/sweetalert2.min.css',
        'vendors/socicon/css/socicon.css',
        'vendors/vendors/line-awesome/css/line-awesome.css',
        'vendors/vendors/flaticon/css/flaticon.css',
        'vendors/vendors/metronic/css/styles.css',
        'vendors/vendors/fontawesome5/css/all.min.css',
        'demo/base/style.bundle.css'


    ];

    public $js = [
        'vendors/popper.js/dist/umd/popper.js',
        'vendors/js-cookie/src/js.cookie.js',
        'vendors/moment/min/moment.min.js',
        'vendors/tooltip.js/dist/umd/tooltip.min.js',
        'vendors/perfect-scrollbar/dist/perfect-scrollbar.js',
        'vendors/wnumb/wNumb.js',
        'vendors/jquery.repeater/src/lib.js',
        'vendors/jquery.repeater/src/jquery.input.js',
        'vendors/jquery.repeater/src/repeater.js',
        'vendors/jquery-form/dist/jquery.form.min.js',
        'vendors/block-ui/jquery.blockUI.js',
        'vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js',
        'vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js',
        'vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
        'vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js',
        'vendors/bootstrap-daterangepicker/daterangepicker.js',
        'vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js',
        'vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js',
        'vendors/bootstrap-maxlength/src/bootstrap-maxlength.js',
        'vendors/bootstrap-switch/dist/js/bootstrap-switch.js',
        'vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js',
        'vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js',
        'vendors/bootstrap-select/dist/js/bootstrap-select.js',
        'vendors/select2/dist/js/select2.full.js',
        'vendors/typeahead.js/dist/typeahead.bundle.js',
        'vendors/handlebars/dist/handlebars.js',
        'vendors/inputmask/dist/jquery.inputmask.bundle.js',
        'vendors/inputmask/dist/inputmask/inputmask.date.extensions.js',
        'vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js',
        'vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js',
        'vendors/nouislider/distribute/nouislider.js',
        'vendors/owl.carousel/dist/owl.carousel.js',
        'vendors/autosize/dist/autosize.js',
        'vendors/clipboard/dist/clipboard.min.js',
        'vendors/ion-rangeslider/js/ion.rangeSlider.js',
        'vendors/dropzone/dist/dropzone.js',
        'vendors/summernote/dist/summernote.js',
        'vendors/markdown/lib/markdown.js',
        'vendors/bootstrap-markdown/js/bootstrap-markdown.js',
        'vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js',
        'vendors/jquery-validation/dist/jquery.validate.js',
        'vendors/jquery-validation/dist/additional-methods.js',
        'vendors/js/framework/components/plugins/forms/jquery-validation.init.js',
        'vendors/bootstrap-notify/bootstrap-notify.min.js',
        'vendors/js/framework/components/plugins/base/bootstrap-notify.init.js',
        'vendors/toastr/build/toastr.min.js',
        'vendors/jstree/dist/jstree.js',
        'vendors/raphael/raphael.js',
        'vendors/morris.js/morris.js',
        'vendors/chartist/dist/chartist.js',
        'vendors/chart.js/dist/Chart.bundle.js',
        'vendors/js/framework/components/plugins/charts/chart.init.js',
        'vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js',
        'vendors/vendors/jquery-idletimer/idle-timer.min.js',
        'vendors/waypoints/lib/jquery.waypoints.js',
        'vendors/counterup/jquery.counterup.js',
        'vendors/es6-promise-polyfill/promise.min.js',
        'vendors/sweetalert2/dist/sweetalert2.min.js',
        'vendors/js/framework/components/plugins/base/sweetalert2.init.js',
        'demo/base/scripts.bundle.js',
        'app/js/dashboard.js'

    ];

    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class

    ];
}