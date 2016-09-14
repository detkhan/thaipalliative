<?php

namespace backend\modules\thaipalliative\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class FilterController extends Controller
{

    public function actionProvince($zone_code)
    {
      $dataprovince=self::GetDataProvince($zone_code);
      $render="filter_province";
      $url=$this->renderAjax($render, [
        'dataprovince' => $dataprovince,
      ]);

    return  $url;
    }

    public function actionHospital($hcode)
    {
      $datahospital=self::GetDataHospital($hcode);
      foreach ($datahospital as $key) {
        $hcode=$key[hcode];
        $hosname=$key[name];
      $json_data[]=array(
      "hcode"=>"$hcode",
      "hname"=>"$hosname",
       );
     }
      $data= json_encode($json_data);

    return  $data;
    }

    public function GetDataProvince($zone_code)
    {
      $sqlControl = "SELECT
provincecode,
province
FROM
`all_hospital_thai`
WHERE
zone_code='$zone_code'
GROUP BY provincecode";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetDataHospital($hcode)
    {
      $sqlControl = "SELECT
  hcode,
  `name`,
  zone_code
  FROM
  `all_hospital_thai`
  WHERE
  hcode LIKE '%$hcode%'
OR `name` LIKE '%$hcode%'
";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }
}//class
