<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = $model-><?= $generator->getNameAttribute() ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="m-portlet">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    <?=$this->title?>
                </h3>
            </div>
        </div>

    </div>

    <div class="m-portlet__body">

        <div class="m-section">
            <div class="m-section__content">
                <div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view">

                    <h1><?= "<?= " ?>Html::encode($this->title) ?></h1>

                    <p>
                        <?= "<?= " ?>Html::a(<?= $generator->generateString('Update') ?>, ['update', <?= $urlParams ?>], ['class' => 'btn m-btn m-btn--gradient-from-info m-btn--gradient-to-warning']) ?>
                        <?= "<?= " ?>Html::a(<?= $generator->generateString('Delete') ?>, ['delete', <?= $urlParams ?>], [
                        'class' => 'btn m-btn m-btn--gradient-from-warning m-btn--gradient-to-danger',
                        'data' => [
                        'confirm' => <?= $generator->generateString('Are you sure you want to delete this item?') ?>,
                        'method' => 'post',
                        ],
                        ]) ?>
                    </p>

                    <?= "<?= " ?>DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                    <?php
                    if (($tableSchema = $generator->getTableSchema()) === false) {
                        foreach ($generator->getColumnNames() as $name) {
                            echo "            '" . $name . "',\n";
                        }
                    } else {
                        foreach ($generator->getTableSchema()->columns as $column) {
                            $format = $generator->generateColumnFormat($column);
                            echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
                        }
                    }
                    ?>
                    ],
                    ]) ?>

                </div>

            </div>
        </div>
    </div>
</div>
