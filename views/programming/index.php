<?php

use yii\helpers\Html;
use app\widgets\AutoComplete;

$this->title = 'Rating Programming Languages';

?>

<h1><?= Html::encode($this->title) ?></h1>

<?= AutoComplete::widget() ?>