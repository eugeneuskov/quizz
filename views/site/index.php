<?php

/* @var $this yii\web\View */

$this->title = 'Yii Test App';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h2>Задачи 1 и 2</h2>

                <p>
                  Решение задачи 2 в списке по ссылке ниже, за основу взял пару Categories и Products<br>
                  на странице со списком Grid View со фильтрацией по связанным моделям<br>
                  при переходе на страницу редактирования [edit] - форма с одновременным редактированием двух тих моделей
                </p>
                <p><a class="btn btn-default" href="/products">Решение</a></p>

            </div>

            <div class="col-lg-3">
                <h2>Задача 3</h2>

                <p>
                  Решение задачи 2 в двух вариантах (по тем же моделям, что и задачи 1 и 2)
                  <ul>
                    <li>Запрос с использованием relation моделей</li>
                    <li>Запрос с использованием join</li>
                  </ul>
                  Исходные данные: две категории (School stuff и Books) и относящиеся к ним товары<br>
                  аналогично моделям profile и user соответсвенно по условию задачи
                </p>
                <p><a class="btn btn-default" href="/category">Решение</a></p>
            </div>

            <div class="col-lg-3">
                <h2>Задача 4</h2>

                <p>
                  К сожалению, виджет реализовать мне не удалось...<br>
                  Само же кэширование реализовано средствами Yii2 "из коробки"
                </p>

                <p><a class="btn btn-default" href="/programming">Решение</a></p>
            </div>

            <div class="col-lg-3">
              <h2>Задача 5</h2>

              <h4>Вариант запроса 1</h4>
              <p>
                SELECT g1.id, g2.id FROM goods g1<br>
                INNER JOIN goods g2 ON g1.name=g2.name AND g1.id<g2.id
              </p>

              <h4>Вариант запроса 2</h4>
              <p>
                SELECT LEAST(g1.id, g2.id) id1, GREATEST(g1.id, g2.id) id2<br>
                FROM goods g1<br>
                INNER JOIN goods g2 ON g1.name = g2.name<br>
                WHERE g1.id <> g2.id<br>
                GROUP BY LEAST(g1.id, g2.id), GREATEST(g1.id, g2.id)<br>
              </p>

              <p>Вариант 2 делает больше "движений", соответственно выполняться будет дольше варианта 1</p>

            </div>
        </div>

    </div>
</div>
