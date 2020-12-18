<?php

namespace frontend\controllers;

use common\models\Services;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;
use yii\web\Controller;

/**
 * DocumentController implements the CRUD actions for Document model.
 */
class ServicesController extends Controller
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
        $services = Services::find()->all();
        return $this->render('index', [
            'services' => $services
        ]);
    }

    public function actionView($id)
    {
        $service = Services::find()->where(['id' => $id])->one();
        $services = Services::find()->orderBy(['id'=>SORT_ASC])->limit(3)->all();
        return $this->render('view', [
            'services' => $services,
            'service' => $service

        ]);
    }

}
