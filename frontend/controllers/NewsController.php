<?php

namespace frontend\controllers;

use common\models\News;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;
use yii\web\Controller;

/**
 * DocumentController implements the CRUD actions for Document model.
 */
class NewsController extends Controller
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
        $news = News::find()->all();
        return $this->render('index', [
            'news' => $news
        ]);
    }

    public function actionView($id)
    {
        $new = News::find()->where(['id' => $id])->one();
        $news = News::find()->all();
        return $this->render('view', [
            'new' => $new,
             'news' => $news
        ]);
    }

}
