<?php


namespace app\controllers;


use app\models\ProductsSearch;
use Yii;
use app\models\Categories;
use app\models\Products;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class ProductController extends Controller
{
    /**
     * @param $id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionEdit($id)
    {
        if ($id) {

            $product = Products::findOne($id);
            if (!isset($product)) {
                throw new NotFoundHttpException('The product was not found.');
            }

            $category = Categories::findOne($product->id_category);
            if (!isset($category)) {
                throw new NotFoundHttpException('The product\'s category was not found.');
            }

            $postData = Yii::$app->request->post();
            if ($product->load($postData) && $category->load($postData)) {
                if ($product->save() && $category->save()) {
                    return $this->redirect(['/products']);
                }

            }

            return $this->render('edit', compact('product', 'category'));

        }

        throw new NotFoundHttpException('The product was not found.');
    }


    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $categories = Categories::find()->all();

        return $this->render('index', compact('searchModel', 'dataProvider', 'categories'));
    }


}