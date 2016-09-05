<?php

namespace backend\modules\thaipalliative\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class ReportSec2Controller extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTable5($sitecode=null)
    {
      $dataArrayTable5Zone=self::GetZone();
      $dataArrayTable5Province=self::GetProvince($sitecode);
      $render="table5";
      $url=$this->renderAjax($render, [
        'dataArrayTable5Zone' => $dataArrayTable5Zone,
        'dataArrayTable5Province' => $dataArrayTable5Province,
      ]);
      return  $url;
    }

    public function GetZone()
    {
        $sqlControl = "SELECT
    sitecode,
    zone_code,
    COUNT(DISTINCT ptid) as total
    FROM
    `tbdata_1` a
    INNER JOIN
    `all_hospital_thai` b
    ON a.sitecode COLLATE utf8_unicode_ci=b.hcode COLLATE utf8_unicode_ci
    WHERE
    sitecode IS NOT NULL
    AND sitecode != 0
    AND sitecode NOT IN ('A%','Z%','90%','91%','92%')
    GROUP BY zone_code
      ";
        $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
        return $dataProvider;
      }


      public function GetProvince($sitecode)
      {
          $sqlControl = "SELECT
zone_code,          
province,
COUNT(DISTINCT ptid) as total
FROM
tbdata_1 a
INNER JOIN
all_hospital_thai b
ON a.sitecode=b.hcode
WHERE
zone_code=
(SELECT
zone_code
FROM
`all_hospital_thai`
WHERE
hcode='$sitecode')
GROUP BY province
";
          $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
          return $dataProvider;
        }




}//class
