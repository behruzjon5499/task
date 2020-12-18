<?php

namespace backend\controllers;

use common\models\Import;
use common\models\Statistika;
use common\models\StatistikaSearch;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * StatistikaController implements the CRUD actions for Statistika model.
 */
class StatistikaController extends Controller
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
     * Lists all Statistika models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StatistikaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionStatistika($id)
    {


        $statistika = Statistika::find()->where(['id' => $id])->one();


        $products = Import::find()->select("SUM(case when type = '2' then import.size * import.price else 0 end) as summa, SUM(case when type = '1' then import.size * import.price else 0 end)  as xarajat, SUM(case when type = '1' then import.size * import.price else 0 end) - SUM(case when type = '2' then import.size * import.price else 0 end) as foyda, import.*")->innerJoin('statistika', 'import.product_id = statistika.product_id')->where(['between', 'import.date', $statistika->start_date, $statistika->end_date])->all();


        return $this->render('view', [
            'products' => $products
        ]);
    }

    /**
     * Displays a single Statistika model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($product_id, $id)
    {

        $statistika = Statistika::find()->where(['id' => $id])->one();
//      $products = Export::find()->where(['product_id' => $id])->andwhere(['between', 'date', $statistika->start_date, $statistika->end_date])->all();


        $products = Import::find()->select("SUM(case when type = '2' then import.size * import.price else 0 end) as summa, SUM(case when type = '1' then import.size * import.price else 0 end)  as xarajat, SUM(case when type = '1' then import.size * import.price else 0 end) - SUM(case when type = '2' then import.size * import.price else 0 end) as foyda, import.*")->innerJoin('statistika', 'import.product_id = statistika.product_id')->where(['import.product_id' => $product_id])->andWhere(['between', 'import.date', $statistika->start_date, $statistika->end_date])->one();

//            VarDumper::dump($products, 12, true);
//        die();

        return $this->render('view', [
            'products' => $products
        ]);
    }

    /**
     * Creates a new Statistika model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Statistika();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model->check == 1) {

                $products = Import::find()->select("SUM(case when type = '2' then import.size * import.price else 0 end) as summa, SUM(case when type = '1' then import.size * import.price else 0 end)  as xarajat, SUM(case when type = '1' then import.size * import.price else 0 end) - SUM(case when type = '2' then import.size * import.price else 0 end) as foyda, import.*")->where(['between', 'import.date', $model->start_date, $model->end_date])->groupBy('product_id')->all();
                $statistika = Import::find()->select("SUM(case when type = '2' then import.size * import.price else 0 end) as summa, SUM(case when type = '1' then import.size * import.price else 0 end)  as xarajat, SUM((case when type = '1' then import.size * import.price else 0 end) - (case when type = '2' then import.size * import.price else 0 end)) as foyda, import.* ")->where(['between', 'import.date', $model->start_date, $model->end_date])->one();
//                VarDumper::dump($statistika, 12, true);
//                die();

                return $this->render('statistika', [
                    'products' => $products,
                    'model' => $model,
                    'statistika' => $statistika
                ]);
            } else {
                $products = Import::find()->select("SUM(case when type = '2' then import.size * import.price else 0 end) as summa, SUM(case when type = '1' then import.size * import.price else 0 end)  as xarajat, SUM(case when type = '1' then import.size * import.price else 0 end) - SUM(case when type = '2' then import.size * import.price else 0 end) as foyda, import.*")->innerJoin('statistika', 'import.product_id = statistika.product_id')->where(['import.product_id' => $model->product_id])->andWhere(['between', 'import.date', $model->start_date, $model->end_date])->one();
                return $this->render('view', [
                    'products' => $products
                ]);
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Statistika model.
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
     * Deletes an existing Statistika model.
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
     * Finds the Statistika model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Statistika the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Statistika::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
