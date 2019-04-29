<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */

?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">

    <?= "<?php " ?>$form = ActiveForm::begin(['options'=>[
        'class'=>['m-form m-form--fit m-form--label-align-right']
    ],
    'fieldConfig'=>['options'=>['class'=>'form-group m-form__group']]]); ?>

<?php foreach ($generator->getColumnNames() as $attribute) {
    if (in_array($attribute, $safeAttributes)) {
        echo "    <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
    }
} ?>
    <div class="form-group m-form__group">
        <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Simpan') ?>, ['class' => 'btn m-btn m-btn--gradient-from-brand m-btn--gradient-to-info']) ?>
        <?= "<?= " ?>Html::a(<?= $generator->generateString('Batal') ?>,['index'] ,['class' => 'btn m-btn btn-default']) ?>

    </div>

    <?= "<?php " ?>ActiveForm::end(); ?>

</div>
