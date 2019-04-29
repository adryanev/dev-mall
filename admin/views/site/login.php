<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$usernameTemplate = "\n{input}\n{hint}\n{error}\n";
?>

<!-- begin:: Page -->

        <div class="m-login__wrapper-2 m-portlet-full-height">
            <div class="m-login__contanier">
                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title">Login To Your Account</h3>
                    </div>
                    <?php $form = ActiveForm::begin(['id' => 'login-form','options' => ['class'=>'m-login__form m-form'],
                        'fieldConfig' => ['template'=>$usernameTemplate,'options'=>['class'=>'form-group m-form__group']]]); ?>


                    <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>'form-control m-input','placeholder'=>'Username']) ?>

                    <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control m-input','placeholder'=>'Password']) ?>

                    <?= $form->field($model, 'rememberMe',['options'=>['class'=>'row m-login__form-sub'],'labelOptions' => [ 'class' => 'm-checkbox m-checkbox--focus' ]])->checkbox(['template'=>'<div class="col m--align-left">{beginLabel}{input} {labelTitle}<span></span>{endLabel}{error}{hint}</div>']) ?>

                    <div class="m-login__form-action">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
