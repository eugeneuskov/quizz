<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


$this->title = 'Edit product' . $product->name;

?>

<h1><?= HTML::encode($this->title) ?></h1>

<?php

$form = ActiveForm::begin([
    'id' => 'product-edit-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>


<?= $form->field($product, 'name')?>
<?= $form->field($product, 'price', ['inputOptions' => ['value' => Yii::$app->formatter->asDecimal($product->price)]])?>

<?= $form->field($category, 'name') ?>

<?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>