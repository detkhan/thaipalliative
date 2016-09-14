<?php

namespace backend\modules\thaipalliative\controllers;


use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;

class ReportSec4Controller extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTable32()
    {
$dataArrayTable32Oxigen=self::GetOxigen();
$dataArrayTable32Syring=self::GetSyring();
$dataArrayTable32Bed=self::GetBed();
$dataArrayTable32Pdrug=self::GetPdrug();
$dataArrayTable32Tank=self::GetTank();
$dataArrayTable32Suction=self::GetSuction();
$dataArrayTable32Monkeybar=self::GetMonkeybar();
$dataArrayTable32Wheels=self::GetWheels();


    $render="table32";
    $url=$this->renderAjax($render, [
      'dataArrayTable32Oxigen' => $dataArrayTable32Oxigen,
      'dataArrayTable32Syring' => $dataArrayTable32Syring,
      'dataArrayTable32Bed' => $dataArrayTable32Bed,
      'dataArrayTable32Pdrug' => $dataArrayTable32Pdrug,
      'dataArrayTable32Tank' => $dataArrayTable32Tank,
      'dataArrayTable32Suction' => $dataArrayTable32Suction,
      'dataArrayTable32Monkeybar' => $dataArrayTable32Monkeybar,
      'dataArrayTable32Wheels' => $dataArrayTable32Wheels,

    ]);
    return  $url;
  }
public function GetOxigen(){

      $sqlControl = "SELECT
      COUNT(var33r1c2) AS total
      FROM tbdata_3
      WHERE var33r1c2 = 1";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }
public function GetSyring() {
   $sqlControl = "SELECT
   COUNT(var33r4c2) AS total
   FROM tbdata_3
   WHERE var33r4c2 = 1";
   $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
   return $dataProvider;
}
public function GetBed() {
   $sqlControl = "SELECT
   COUNT(var33r5c2) AS total
   FROM tbdata_3
   WHERE var33r5c2 = 1";
   $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
   return $dataProvider;
}
public function GetPdrug(){
  $sqlControl = "SELECT
  COUNT(var33r6c2) AS total
  FROM tbdata_3
  WHERE var33r6c2 = 1";
  $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
  return $dataProvider;
}
public function GetTank(){
  $sqlControl = "SELECT
  COUNT(var33r2c2) AS total
  FROM tbdata_3
  WHERE var33r2c2 = 1";
  $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
  return $dataProvider;
}
public function GetSuction(){
  $sqlControl = "SELECT
  COUNT(var33r7c2) AS total
  FROM tbdata_3
  WHERE var33r7c2 = 1";
  $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
  return $dataProvider;
}
public function GetMonkeybar(){
  $sqlControl = "SELECT
  COUNT(var33r8c2) AS total
  FROM tbdata_3
  WHERE var33r8c2 = 1";
  $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
  return $dataProvider;
}
public function GetWheels(){
  $sqlControl = "SELECT
  COUNT(var33r9c2) AS total
  FROM tbdata_3
  WHERE var33r9c2 = 1";
  $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
  return $dataProvider;
}

/*
      tbdata_3
*/
    }//class
