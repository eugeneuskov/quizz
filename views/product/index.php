<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

$categoryItems  = ArrayHelper::map($categories, 'id', 'name');
$categoryParams = [
    'title' => 'Choose the category',
    'prompt' => ' ',
    'options' =>[ (isset($dataProvider->query->where['id_category']) ? $dataProvider->query->where['id_category'] : null) => ['Selected' => true]],
];


$this->title = 'Products';

?>

<h1><?= Html::encode($this->title) ?></h1>


<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [

        'name',
        [
            'attribute' => 'category',
            'format' => 'html',
            'value' => function ($data) {
                return $data->category->name;
            },
            'filter' => Html::activeDropDownList(
                $searchModel,
                'category',
                $categoryItems,
                $categoryParams
            )
        ],
        'price',

        [
            'class' => 'yii\grid\ActionColumn',
            'buttons' => [
                'edit' => function ($url, $model) {
                    $customUrl = Yii::$app->getUrlManager()->createUrl(['/product/edit/' . $model['id']]);
                    return Html::a('<span>Edit</span>', $customUrl, [
                        'class' => 'btn btn-info',
                        'role' => 'button',
                        'title' => 'Edit'
                    ]);
                },
            ],
            'template' => '{edit}'
        ],
    ],
]); ?>