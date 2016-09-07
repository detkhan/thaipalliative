<?php

namespace backend\modules\thaipalliative\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;

class ReportSec2Controller extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTable5($sitecode=null)
    {
      $dataArrayTable5Zone=self::GetZoneDisease('all');
      $dataArrayTable5Province=self::GetProvinceDisease($sitecode,'all');
      $render="table5";
      $url=$this->renderAjax($render, [
        'dataArrayTable5Zone' => $dataArrayTable5Zone,
        'dataArrayTable5Province' => $dataArrayTable5Province,
      ]);
      return  $url;
    }

public function actionTable6($sitecode=null)
{
$dataArrayTable6Zone=self::GetZoneDisease(1);
$dataArrayTable6Province=self::GetProvinceDisease($sitecode,1);
$render="table6";
$url=$this->renderAjax($render, [
'dataArrayTable6Zone' => $dataArrayTable6Zone,
'dataArrayTable6Province' => $dataArrayTable6Province,
]);
return  $url;
}

            public function actionTable7($sitecode=null)
            {
            $dataArrayTable7Zone=self::GetZoneDisease(2);
            $dataArrayTable7Province=self::GetProvinceDisease($sitecode,2);
            $render="table7";
            $url=$this->renderAjax($render, [
            'dataArrayTable7Zone' => $dataArrayTable7Zone,
            'dataArrayTable7Province' => $dataArrayTable7Province,
            ]);
            return  $url;
            }

            public function actionTable8($sitecode=null)
            {
            $dataArrayTable8Zone=self::GetZoneDisease(6);
            $dataArrayTable8Province=self::GetProvinceDisease($sitecode,6);
            $render="table8";
            $url=$this->renderAjax($render, [
            'dataArrayTable8Zone' => $dataArrayTable8Zone,
            'dataArrayTable8Province' => $dataArrayTable8Province,
            ]);
            return  $url;
            }
            public function actionTable9($sitecode=null)
            {
            $dataArrayTable9Zone=self::GetZoneDisease(4);
            $dataArrayTable9Province=self::GetProvinceDisease($sitecode,4);
            $render="table9";
            $url=$this->renderAjax($render, [
            'dataArrayTable9Zone' => $dataArrayTable9Zone,
            'dataArrayTable9Province' => $dataArrayTable9Province,
            ]);
            return  $url;
            }

            public function actionTable10($sitecode=null)
            {
            $dataArrayTable10Zone=self::GetZoneDisease(5);
            $dataArrayTable10Province=self::GetProvinceDisease($sitecode,5);
            $render="table10";
            $url=$this->renderAjax($render, [
            'dataArrayTable10Zone' => $dataArrayTable10Zone,
            'dataArrayTable10Province' => $dataArrayTable10Province,
            ]);
            return  $url;
            }

            public function actionTable11($sitecode=null)
            {
            $dataArrayTable11Zone=self::GetZoneDisease(3);
            $dataArrayTable11Province=self::GetProvinceDisease($sitecode,3);
            $render="table11";
            $url=$this->renderAjax($render, [
            'dataArrayTable11Zone' => $dataArrayTable11Zone,
            'dataArrayTable11Province' => $dataArrayTable11Province,
            ]);
            return  $url;
            }

            public function actionTable12($sitecode=null)
            {
            $dataArrayTable12Zone=self::GetZoneDisease(7);
            $dataArrayTable12Province=self::GetProvinceDisease($sitecode,7);
            $render="table12";
            $url=$this->renderAjax($render, [
            'dataArrayTable12Zone' => $dataArrayTable12Zone,
            'dataArrayTable12Province' => $dataArrayTable12Province,
            ]);
            return  $url;
            }

  public function actionTable13($sitecode=null)
  {
    $render='table13';
    $Disease='all';
    $datayear='2016';
    $table='13';
    $nametable='รวมทุกโรค';
$url=self::GetDataTable13to20($render,$Disease,$datayear,$table,$nametable,$sitecode);
return $url;
  }

  public function actionTable14($sitecode=null)
  {
    $render='table13';
    $Disease='1';
    $datayear='2016';
    $table='14';
    $nametable='เฉพาะกลุ่มโรค Cancer';
$url=self::GetDataTable13to20($render,$Disease,$datayear,$table,$nametable,$sitecode);
return $url;
  }

  public function actionTable15($sitecode=null)
  {
    $render='table13';
    $Disease='2';
    $datayear='2016';
    $table='15';
    $nametable='เฉพาะกลุ่มโรค End stage renal diseases';
$url=self::GetDataTable13to20($render,$Disease,$datayear,$table,$nametable,$sitecode);
return $url;
  }

  public function actionTable16($sitecode=null)
  {
    $render='table13';
    $Disease='6';
    $datayear='2016';
    $table='16';
    $nametable='เฉพาะกลุ่มโรค Frailty dementia';
$url=self::GetDataTable13to20($render,$Disease,$datayear,$table,$nametable,$sitecode);
return $url;
  }

  public function actionTable17($sitecode=null)
  {
    $render='table13';
    $Disease='4';
    $datayear='2016';
    $table='17';
    $nametable='เฉพาะกลุ่มโรค End stage lung diseases';
$url=self::GetDataTable13to20($render,$Disease,$datayear,$table,$nametable,$sitecode);
return $url;
  }

  public function actionTable18($sitecode=null)
  {
    $render='table13';
    $Disease='5';
    $datayear='2016';
    $table='18';
    $nametable='เฉพาะกลุ่มโรค Neurological diseases';
$url=self::GetDataTable13to20($render,$Disease,$datayear,$table,$nametable,$sitecode);
return $url;
  }

  public function actionTable19($sitecode=null)
  {
    $render='table13';
    $Disease='3';
    $datayear='2016';
    $table='19';
    $nametable='เฉพาะกลุ่มโรค End stage heart diseases';
$url=self::GetDataTable13to20($render,$Disease,$datayear,$table,$nametable,$sitecode);
return $url;
  }

  public function actionTable20($sitecode=null)
  {
    $render='table13';
    $Disease='7';
    $datayear='2016';
    $table='20';
    $nametable='เฉพาะกลุ่มโรคอื่นๆ';
$url=self::GetDataTable13to20($render,$Disease,$datayear,$table,$nametable,$sitecode);
return $url;
  }



  public function GetZoneDisease($Disease)
  {
    if($Disease=='all'){
  $dataDisease='>0';

    }else{
  $dataDisease="=$Disease";
    }
  $sqlControl = "SELECT
  zone_code,
  COUNT(DISTINCT ptid) as total
  FROM
  (SELECT
  a.sitecode,
  a.ptid,
  var27_province
  FROM
  `tbdata_1` a
  INNER JOIN
  `tbdata_2` b
  ON a.ptid=b.ptid
  WHERE
  var49 $dataDisease
  )as c
  INNER JOIN
  `all_hospital_thai` d
  ON c.sitecode=d.hcode
  WHERE
  sitecode IS NOT NULL
  AND sitecode != 0
  AND sitecode NOT IN ('A%','Z%','90%','91%','92%')
  GROUP BY zone_code
  ";
              $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
              return $dataProvider;
            }


            public function GetProvinceDisease($sitecode,$Disease)
            {
              if($Disease=='all'){
            $dataDisease='>0';

              }else{
            $dataDisease="=$Disease";
              }
  $sqlControl = "SELECT
  zone_code,
  provincecode,
  province,
  COUNT(DISTINCT ptid) as total
  FROM
  (SELECT
  a.sitecode,
  a.ptid,
  var27_province
  FROM
  `tbdata_1` a
  INNER JOIN
  `tbdata_2` b
  ON a.ptid=b.ptid
  WHERE
  var49 $dataDisease
  )as c
  INNER JOIN
  all_hospital_thai d
  ON c.sitecode=d.hcode
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

public function GetProvinceDiseaseMonth($provincecode,$Disease,$datayear,$parameterfill)
{
if($Disease=='all'){
$dataDisease='>0';

}else{
$dataDisease="=$Disease";
}
$sqlControl = "SELECT
sitecode,
zone_code,
monthname,
yearnumber,
provincecode,
province,
COUNT(DISTINCT ptid)  as total
FROM
(SELECT
a.sitecode as sitecode,
a.ptid as ptid,
IF(MONTH(var4)=0 OR ISNULL(var4) OR MONTH(var4)<2000,MONTH(a.create_date),MONTH(var4)) as monthname,
IF(YEAR(var4)=0 OR ISNULL(var4) OR YEAR(var4)<=2000 OR YEAR(var4)>=2100,YEAR(a.create_date),YEAR(var4)) as yearnumber,
var27_province
FROM
`tbdata_1` a
INNER JOIN
`tbdata_2` b
ON a.ptid=b.ptid
WHERE
var49 $dataDisease
)as c
INNER JOIN
all_hospital_thai d
ON c.sitecode=d.hcode
WHERE $parameterfill='$provincecode'
AND yearnumber='$datayear'
GROUP BY monthname
ORDER BY monthname ASC
";
$dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
return $dataProvider;
}


public function GetDataTable13to20($render,$Disease,$datayear,$table,$nametable,$sitecode)
{
$dataArrayTable13Zone=self::GetZoneDisease($Disease);
$parameter='zone_code';
$totaldata=count($dataArrayTable13Zone);
for ($i=0; $i < $totaldata; $i++) {
$zone_code=$dataArrayTable13Zone[$i][zone_code];
$dataArrayMonthZoneArray=self::GetProvinceDiseaseMonth("$zone_code",$Disease,$datayear,$parameter);
foreach ($dataArrayMonthZoneArray as $key) {
$dataArrayMonthZone[$zone_code][$key[monthname]]=$key[total];
}
}
$dataArrayTable13Province=self::GetProvinceDisease($sitecode,$Disease);
$parameterfill='provincecode';
foreach ($dataArrayTable13Province as $key2) {
$dataprovince=self::GetProvinceDiseaseMonth($key2[provincecode],$Disease,$datayear,$parameterfill);
foreach ($dataprovince as $key3) {
$dataArrayMonthProvince[$key2[provincecode]][$key3[monthname]]=$key3[total];
}
}
$url=$this->renderAjax($render, [
'dataArrayTable13Zone' => $dataArrayTable13Zone,
'dataArrayMonthZone' => $dataArrayMonthZone,
'dataArrayMonthProvince' => $dataArrayMonthProvince,
'dataArrayTable13Province' => $dataArrayTable13Province,
'nametable' => $nametable,
'table' => $table,
]);
return  $url;
}


}//class
