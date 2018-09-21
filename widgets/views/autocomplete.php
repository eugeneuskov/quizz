<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

$items = ArrayHelper::map($programming, 'id', 'name')

?>


<div class="main-programming-wrapper">
    <div class="form-group row">
        <input type="text" class="form-control programming-value">

        <div class="dropdown">
            <?php foreach ($items as $key=> $item): ?>
                <span data-item="<?= $key ?>" data-value="<?= $item ?>" class="form-control programming-item"><?= $item ?></span>
            <?php endforeach; ?>
        </div>

        <div class="hidden">
            <?= Html::dropDownList('programming', 'null', $items) ?>
        </div>
    </div>
</div>

<?php
$this->registerJsFile('@web/js/autocomplete.js', ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerCssFile('@web/css/autocomplete.css');
?>