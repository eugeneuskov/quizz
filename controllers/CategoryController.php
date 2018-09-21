<?php


namespace app\controllers;


use app\models\Categories;
use app\models\Products;
use app\models\SearchCategoryForm;
use Yii;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $categories = null;
        $html = null;
        $time = [];

        $model = new SearchCategoryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            /* query with relation */
            $queryRelationStart = strtotime('now');
            $categories = Categories::find()
                ->with('products')
                ->andWhere(['like', 'name', $model->search])
                ->all();
            $queryRelationEnd = strtotime('now');

            $templateRelationStart = strtotime('now');
            $html .= $this->renderPartial('_relation', compact('categories'));
            $templateRelationEnd = strtotime('now');


            /* query with join */
            $queryJoinStart = strtotime('now');
            $products = Products::find()
                ->joinWith('category cat')
                ->orderBy(['id_category' => SORT_ASC])
                ->andWhere(['like', 'cat.name', $model->search])
                ->all();
            $queryJoinEnd = strtotime('now');

            $templateJoinStart = strtotime('now');
            $html .= $this->renderPartial('_join', compact('products'));
            $templateJoinEnd = strtotime('now');


            /*
            $time = [
                'query' => [
                    'relation' => $queryRelationEnd - $queryRelationStart,
                    'join' => $queryJoinEnd - $queryJoinStart
                ],
                'template' => [
                    'relation' => $templateRelationEnd - $templateRelationStart,
                    'join' => $templateJoinEnd - $templateJoinStart
                ]
            ];
            */
        }



        return $this->render('index', compact('data', 'model', 'html', 'time'));
    }

}