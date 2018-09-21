<?php

$currentCategory = 0;

foreach ($products as $product):

    if ($currentCategory !== $product->category->id):
        if ($currentCategory !== 0): ?>
            </div>
        <?php endif; ?>

        <div class="form-group row">
            <h3><?= $product->category->name ?></h3>
            <hr>

        <?php
        $currentCategory = $product->category->id;
    endif; ?>

    <span class="col-md-9"><?= $product->name ?></span>
    <span class="col-md-3 text-right"><?= number_format($product->price, 2, '.', ' ') ?></span>

    <?php if ($currentCategory === 0): ?>
    </div>
    <?php endif;

endforeach; ?>

</div>