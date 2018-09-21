<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Search';
if ($model->search) {
  $this->title .= ' "' . $model->search . '"';
}

?>


<h1><?= Html::encode($this->title) ?></h1>

<?php

$form = ActiveForm::begin([
    'id' => 'category-search-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>


<?= $form->field($model, 'search')?>

<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>


<?= $html ?>

<!--
<hr>

<div class="form-group row">
  <?php /*foreach ($time as $key => $value): */?>

    <div class="col-md-6 row">
      <h4><?/*= $key */?></h4>
      <?php /*foreach ($value as $k => $item): */?>
        <div class="col-md-12 row">
          <span><?/*= $k */?>:</span>
          <span><?/*= $item */?></span>
        </div>
      <?php /*endforeach; */?>
    </div>

  <?php /*endforeach; */?>
</div>-->