<?php foreach ($categories as $category): ?>

  <div class="form-group row">
    <h3><?= $category->name ?></h3>
    <hr>

      <?php foreach ($category->products as $product): ?>

        <span class="col-md-9"><?= $product->name ?></span>
        <span class="col-md-3 text-right"><?= number_format($product->price, 2, '.', ' ') ?></span>

      <?php endforeach; ?>
  </div>

<?php endforeach; ?>