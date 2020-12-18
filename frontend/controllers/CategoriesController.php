<?php

namespace frontend\controllers;

use common\models\Categories;
use common\models\Products;
use Symfony\Component\Console\Helper\ProcessHelper;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * DocumentController implements the CRUD actions for Document model.
 */
class CategoriesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Document models.
     * @return mixed
     */
    public function actionIndex()
    {
        $categories = Categories::find()->all();
        return $this->render('index', [
            'categories' => $categories
        ]);
    }

    public function actionView($id)
    {
        $products = Products::find()->where(['category_id' => $id])->one();
        $categories = Categories::find()->all();
        return $this->render('view', [
            'categories' => $categories,
            'products' => $products
        ]);
    }

}
