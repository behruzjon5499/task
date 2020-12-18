<?php

namespace backend\controllers;

use common\models\Import;
use common\models\ImportSearch;
use Yii;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * ImportController implements the CRUD actions for Import model.
 */
class ImportController extends Controller
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
     * Lists all Import models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ImportSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Import model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Import model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Import();

        if ($model->load(Yii::$app->request->post()) && $model->type == 1) {

            if (isset($model->party)) {
                $products = Import::find()->select("SUM(case when type = '2' then size else 0 end) - SUM(case when type = '1' then size else 0 end) as size, party,now_size, import.*")->where(['product_id' => $model->product_id])->andWhere(['party' => $model->party])->orderBy(['date'=>SORT_ASC])->limit(1)->one();
            } else {
                $products = Import::find()->select("SUM(case when type = '2' then size else 0 end) - SUM(case when type = '1' then size else 0 end) as size,,now_size,import.*")->where(['product_id' => $model->product_id])->orderBy(['date'=>SORT_ASC])->limit(1)->one();
            }
//            VarDumper::dump($products,12,true);
//                die();
            if ($products->now_size >= $model->size) {
                $products->now_size = $products->now_size - $model->size;
                $products->save(false);
                $model->save();
                if ($model->party) {
                    Yii::$app->session->setFlash('success',[ $products->party,Yii::t('app', 'chi partiyadan mahsulot sotildi qoldiqdagi mahsulot ' ), $products->now_size ]);
                    return $this->redirect(['view', 'id' => $model->id]);
                } else {
                    Yii::$app->session->setFlash('success', Yii::t('app', 'Mahsulot ombordan sotildi'));
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
            else {
                Yii::$app->session->setFlash('error', Yii::t('app', 'Mahsulot omborda qolmagan'));
                return $this->redirect(['index']);
            }
        }

        $model->save();

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Import model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Import model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Import model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Import the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Import::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
