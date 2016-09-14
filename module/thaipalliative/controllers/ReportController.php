<?php

namespace backend\modules\thaipalliative\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\modules\thaipalliative\controllers\ReportSec1Controller;
use backend\modules\thaipalliative\controllers\FilterController;

class ReportController extends Controller
{
    public function actionIndex()
    {
      $render="report";
      $url=$this->render($render, [
        'totalall' => $totalall,
        'totalsite' => $totalsite,
      ]);

    return  $url;
    }

    public function actionShowReport($sitecode,$zonecode,$provincecode,$date_start,$date_end)
    {
      $data=self::Chackdata($sitecode,$zonecode,$provincecode,$date_start,$date_end);
      $render="showreport";
      $url=$this->renderAjax($render, [
        'data' => $data,
      ]);

    return  $url;
    }

    public function Chackdata($sitecode,$zonecode,$provincecode,$date_start,$date_end)
    {
      if($date_start==="" ||$date_end===""){
        $date_start="2015-01-01";
        $date_end=date("Y-m-d");
      }
      if(trim($sitecode)===""){
        $checkdatasite=1;
        if($provincecode==0){
          $checkdataprovince=1;
          $hosname="เขตบริการสุขภาพ เขตที่ ".$zonecode;
          $zone_code=$zonecode;
          $data[]=array("hosname"=>$hosname ,"checkdatasite"=>$checkdatasite ,"sitecode"=>$sitecode, "zonecode"=>$zonecode, "provincecode"=>$provincecode, "date_start"=>$date_start, "date_end"=>$date_end);
        }else{
          $checkdataprovince=2;
          $provincecoderaw=explode(":",$provincecode);
          $provincecode=$provincecoderaw[0];
          $hosname="จังหวัด ".$provincecoderaw[1];
          $zonecode=$zonecode;
          $data[]=array("hosname"=>$hosname ,"checkdatasite"=>$checkdatasite ,"sitecode"=>$sitecode, "zonecode"=>$zonecode, "provincecode"=>$provincecode, "date_start"=>$date_start, "date_end"=>$date_end);
        }
      }else{
        $checkdatasite=2;
        $sitecoderaw=explode(":",$sitecode);
        $sitecode=$sitecoderaw[0];
        $hosname=$sitecoderaw[1];
      $datacheckzonecode=FilterController::GetDataHospital($sitecode);
      $zonecode=$datacheckzonecode[0][zone_code];
      $data[]=array("hosname"=>$hosname ,"checkdatasite"=>$checkdatasite ,"sitecode"=>$sitecode, "zonecode"=>$zonecode, "provincecode"=>$provincecode, "date_start"=>$date_start, "date_end"=>$date_end);
      }
return $data;

    }
}//class
