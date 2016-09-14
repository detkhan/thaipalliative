<?php

namespace backend\modules\thaipalliative\controllers;


use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;

class ReportSec1Controller extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTable32($total,$equipment)
    {
      $cancerbusi=self::GetDataTable29(1,'var56r1');
      $cancerpfear=self::GetDataTable29(1,'var56r2');
      $cancersocial =self::GetDataTable29(1,'var56r3');
//render
$render="table30";
$url=$this->renderAjax($render, [
'cancerhope' => $cancerhope,
'cancerfear' => $cancerfear,
'cancerunfinished' => $cancerunfinished,
]);
return $url;
public function GetDataTable32( , ){
  if
}

    }
}
