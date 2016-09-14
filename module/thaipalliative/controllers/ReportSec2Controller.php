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

    public function actionTable5($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
    {
      $render="table5";
      $Disease='all';
      $table='5';
      $nametable='รวมทุกโรค';
      $url=self::GetDataTable5to12($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$render,$table,$nametable);
      return  $url;
    }


public function actionTable6($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
{
  $render="table5";
  $Disease=1;
  $table='6';
  $nametable='เฉพาะกลุ่มโรค Cancer ทุกประเภท';
  $url=self::GetDataTable5to12($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$render,$table,$nametable);
  return  $url;
}

            public function actionTable7($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
            {
              $render="table5";
              $Disease=2;
              $table='7';
              $nametable='เฉพาะกลุ่มโรค End stage renal diseases';
              $url=self::GetDataTable5to12($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$render,$table,$nametable);
              return  $url;
            }

            public function actionTable8($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
            {
              $render="table5";
              $Disease=6;
              $table='8';
              $nametable='เฉพาะกลุ่มโรค Trauma';
              $url=self::GetDataTable5to12($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$render,$table,$nametable);
              return  $url;
            }
            public function actionTable9($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
            {
              $render="table5";
              $Disease=4;
              $table='9';
              $nametable='เฉพาะกลุ่มโรค End stage lung diseases';
              $url=self::GetDataTable5to12($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$render,$table,$nametable);
              return  $url;
            }

            public function actionTable10($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
            {
              $render="table5";
              $Disease=5;
              $table='10';
              $nametable='เฉพาะกลุ่มโรค Neurological diseases';
              $url=self::GetDataTable5to12($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$render,$table,$nametable);
              return  $url;
            }

            public function actionTable11($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
            {
              $render="table5";
              $Disease=3;
              $table='11';
              $nametable='เฉพาะกลุ่มโรค End stage heart diseases';
              $url=self::GetDataTable5to12($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$render,$table,$nametable);
              return  $url;
            }

            public function actionTable12($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
            {
              $render="table5";
              $Disease=7;
              $table='12';
              $nametable='เฉพาะกลุ่มโรคอื่นๆ';
              $url=self::GetDataTable5to12($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$render,$table,$nametable);
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

  public function actionTable21($sitecode=null)
  {
  $Disease='all';
  $table="21";
  $nametable="รวมทุกโรค";
  $url=self::GetDataTable21to28($table,$nametable,$Disease,$sitecode);
  return  $url;
  }

  public function actionTable22($sitecode=null)
  {
  $Disease='1';
  $table="22";
  $nametable="กลุ่มโรค Cancer";
  $url=self::GetDataTable21to28($table,$nametable,$Disease,$sitecode);
  return  $url;
  }



  public function actionTable23($sitecode=null)
  {
  $Disease='2';
  $table="23";
  $nametable="กลุ่มโรค End stage renal diseases";
  $url=self::GetDataTable21to28($table,$nametable,$Disease,$sitecode);
  return  $url;
  }

  public function actionTable24($sitecode=null)
  {
  $Disease='6';
  $table="24";
  $nametable="กลุ่มโรค Frailty dementia";
  $url=self::GetDataTable21to28($table,$nametable,$Disease,$sitecode);
  return  $url;
  }

  public function actionTable25($sitecode=null)
  {
  $Disease='4';
  $table="25";
  $nametable="กลุ่มโรค End stage lung diseases";
  $url=self::GetDataTable21to28($table,$nametable,$Disease,$sitecode);
  return  $url;
  }

  public function actionTable26($sitecode=null)
  {
  $Disease='5';
  $table="26";
  $nametable="กลุ่มโรค Neurological diseases";
  $url=self::GetDataTable21to28($table,$nametable,$Disease,$sitecode);
  return  $url;
  }

  public function actionTable27($sitecode=null)
  {
  $Disease='3';
  $table="27";
  $nametable="กลุ่มโรค End stage heart diseases";
  $url=self::GetDataTable21to28($table,$nametable,$Disease,$sitecode);
  return  $url;
  }

  public function actionTable28($sitecode=null)
  {
  $Disease='7';
  $table="28";
  $nametable="กลุ่มโรคอื่นๆ";
  $url=self::GetDataTable21to28($table,$nametable,$Disease,$sitecode);
  return  $url;
  }

  public function GetDataTable5to12($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$render,$table,$nametable)
  {
    $data=self::PackData($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end);
    $dataArrayTable5Zone=self::GetZoneDisease($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
    $dataArrayTable5Province=self::GetProvinceDisease($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
    $dataArrayTable5Sitecode=self::GetSitecodeDisease($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
    $dataArrayTable5Zone2=self::GetZoneDisease($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
    $dataArrayTable5Province2=self::GetProvinceDisease($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
    $dataArrayTable5Sitecode2=self::GetSitecodeDisease($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
    $url=$this->renderAjax($render, [
      'dataArrayTable5Zone' => $dataArrayTable5Zone,
      'dataArrayTable5Province' => $dataArrayTable5Province,
      'dataArrayTable5Zone2' => $dataArrayTable5Zone2,
      'dataArrayTable5Province2' => $dataArrayTable5Province2,
      'dataArrayTable5Sitecode' => $dataArrayTable5Sitecode,
      'dataArrayTable5Sitecode2' => $dataArrayTable5Sitecode2,
      'data' => $data,
      'table' => $table,
      'nametable' => $nametable,
    ]);
    return  $url;
  }

public function CheckDate($date_start,$date_end,$dateno)
{
  if($dateno=="yes"){
    $datesql="AND create_date BETWEEN '$date_start' AND '$date_end'";
  }else{
    $datesql="";
  }
  return $datesql;
}
  public function PackData($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
  {
  $data[]=array("hosname"=>$hosname ,"checkdatasite"=>$checkdatasite ,"sitecode"=>$sitecode, "zonecode"=>$zonecode, "provincecode"=>$provincecode, "date_start"=>$date_start, "date_end"=>$date_end);
  return $data;
  }
  public function CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
  {
    if($dateno=="yes"){
      $datesql="AND create_date BETWEEN '$date_start' AND '$date_end'";
    }else{
      $datesql="";
    }
    if($checkdatasite==2){
      $data="sitecode ='$sitecode' $datesql";
    }
    else if($provincecode!=0){
      $data="provincecode ='$provincecode' $datesql";
    }
    else{
      $data="zone_code ='$zonecode' $datesql";
    }
    return $data;
  }



  public function GetZoneDisease($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
  {
    $data=self::CheckDate($date_start,$date_end,$dateno);
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
  var27_province,
  a.create_date
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
  sitecode IS NOT NULL $data
  AND sitecode != 0
  AND sitecode NOT IN ('A%','Z%','90%','91%','92%')
  GROUP BY zone_code
  ";
              $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
              return $dataProvider;
            }


            public function GetProvinceDisease($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
            {
              $data=self::CheckDate($date_start,$date_end,$dateno);
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
  var27_province,
  a.create_date
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
  zone_code='$zonecode' $data
  GROUP BY province
  ";
  //echo $sqlControl;
  //exit();
  $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
  return $dataProvider;
              }

              public function GetSitecodeDisease($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
              {
                $data=self::CheckDate($date_start,$date_end,$dateno);
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
    var27_province,
    a.create_date
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
    sitecode='$sitecode' $data
    ";
    //echo $sqlControl;
    //exit();
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


public function GetDataTable13to20($render,$Disease,$datayear,$table,$nametable,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
{
$dataArrayTable13Zone=self::GetZoneDisease($Disease,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
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


public function GetAgeZone($Disease,$nametype,$filter,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
{

$data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
$fildvalue=$data;
if($Disease=='all'){
$dataDisease='>0';

  }else{
$dataDisease="=$Disease";
  }
  $sqlControl = "SELECT
  codename,
  COUNT(DISTINCT ptid) as total
  FROM
  (SELECT
  zone_code,
  provincecode,
  province,
  '$nametype' as codename,
  var11 as sex,
  var6 as birthday,
  var73new as agefilter,
  sitecode,
  age,
  ptid,
  create_date
  FROM
  (SELECT
  a.sitecode,
  a.ptid as ptid,
  a.var11,
  var6,
  var7,
  REPLACE(REPLACE(REPLACE(var73,'ปี',''),'ึ',''),'ุ','') as var73new,
  format(((DATEDIFF(CURDATE(),var6))/365),2) as age,
  a.create_date
  FROM
  `tbdata_1` a
  INNER JOIN
  `tbdata_2` b
  ON a.ptid=b.ptid
  WHERE
  var49 $dataDisease
  AND concat('',var7 * 1) = var7
  AND var7 $filter
  AND a.var11 >0
  )as c
  INNER JOIN
  all_hospital_thai d
  ON c.sitecode=d.hcode
  WHERE
    $fildvalue
    AND sitecode != 0
    AND sitecode NOT IN ('A%','Z%','90%','91%','92%')
  UNION
  SELECT
  zone_code,
  provincecode,
  province,
  '$nametype' as codename,
  var11 as sex,
  var6 as birthday,
  var73new as agefilter,
  sitecode,
  age,
  ptid,
  create_date
  FROM
  (SELECT
  a.sitecode,
  a.ptid as ptid,
  a.var11,
  var6,
  var7,
  REPLACE(REPLACE(REPLACE(var73,'ปี',''),'ึ',''),'ุ','') as var73new,
  format(((DATEDIFF(CURDATE(),var6))/365),2) as age,
  a.create_date
  FROM
  `tbdata_1` a
  INNER JOIN
  `tbdata_2` b
  ON a.ptid=b.ptid
  WHERE
  var49 $dataDisease
  AND concat('',var7 * 1) <> var7
  AND
  concat('',var73 * 1) = var73
  AND var73 $filter
  AND a.var11 >0
  )as c
  INNER JOIN
  all_hospital_thai d
  ON c.sitecode=d.hcode
  WHERE
    $fildvalue
    AND sitecode != 0
    AND sitecode NOT IN ('A%','Z%','90%','91%','92%')
  UNION
  SELECT
  zone_code,
  provincecode,
  province,
  '$nametype' as codename,
  var11 as sex,
  var6 as birthday,
  var73new as agefilter,
  sitecode,
  age,
  ptid,
  create_date
  FROM
  (SELECT
  sitecode,
  ptid,
  var11,
  var6,
  var7,
  var73new,
  age,
  create_date
  FROM
  (SELECT
  a.sitecode,
  a.ptid as ptid,
  a.var11,
  var6,
  var7,
  REPLACE(REPLACE(REPLACE(var73,'ปี',''),'ึ',''),'ุ','') as var73new,
  format(((DATEDIFF(CURDATE(),var6))/365),2) as age,
  a.create_date
  FROM
  `tbdata_1` a
  INNER JOIN
  `tbdata_2` b
  ON a.ptid=b.ptid
  WHERE
  var49 $dataDisease
  AND concat('',var7 * 1) <> var7
  AND
  concat('',var73 * 1) <> var73
  AND a.var11 >0
  )as c
  WHERE
  concat('',var73new * 1) = var73new
  AND var73new $filter
  )as d
  INNER JOIN
  all_hospital_thai e
  ON d.sitecode=e.hcode
  WHERE
    $fildvalue
    AND sitecode != 0
    AND sitecode NOT IN ('A%','Z%','90%','91%','92%')
  UNION
  SELECT
  zone_code,
  provincecode,
  province,
  '$nametype' as codename,
  var11 as sex,
  var6 as birthday,
  var73new as agefilter,
  sitecode,
  age,
  ptid,
  create_date
  FROM
  (SELECT
  sitecode,
  ptid,
  var11,
  var6,
  var7,
  var73new,
  age,
  create_date
  FROM
  (SELECT
  a.sitecode,
  a.ptid as ptid,
  a.var11,
  var6,
  var7,
  REPLACE(REPLACE(REPLACE(var73,'ปี',''),'ึ',''),'ุ','') as var73new,
  format(((DATEDIFF(CURDATE(),var6))/365),2) as age,
  a.create_date
  FROM
  `tbdata_1` a
  INNER JOIN
  `tbdata_2` b
  ON a.ptid=b.ptid
  WHERE
  var49 $dataDisease
  AND concat('',var7 * 1) <> var7
  AND
  concat('',var73 * 1) <> var73
  AND a.var11 >0
  )as c
  WHERE
  concat('',var73new * 1) <> var73new
  AND age $filter
  )as d
  INNER JOIN
  all_hospital_thai e
  ON d.sitecode=e.hcode
  WHERE
    $fildvalue
    AND sitecode != 0
    AND sitecode NOT IN ('A%','Z%','90%','91%','92%')
  )as alldata
  ";
  $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
  return $dataProvider;
}

public function GetDataTable21to28($table,$nametable,$Disease,$sitecode)
{
$dataArrayTable21Zone=self::GetZoneDisease($Disease);
$fildvaluezone="sitecode IS NOT NULL";
$test[]=self::GetAgeZone($Disease,'<40','<40','zone_code',$fildvaluezone);
$test[]=self::GetAgeZone($Disease,'40+','BETWEEN 40 AND 49','zone_code',$fildvaluezone);
$test[]=self::GetAgeZone($Disease,'50+','BETWEEN 50 AND 59','zone_code',$fildvaluezone);
$test[]=self::GetAgeZone($Disease,'60+','BETWEEN 60 AND 69','zone_code',$fildvaluezone);
$test[]=self::GetAgeZone($Disease,'70+','BETWEEN 70 AND 79','zone_code',$fildvaluezone);
$test[]=self::GetAgeZone($Disease,'80+','>79','zone_code',$fildvaluezone);
$datacount=count($test);
for ($i=0; $i <$datacount ; $i++) {
foreach ($test[$i] as $key) {
$dataarray[$key[zone_code]][$key[codename]][$key[sex]]=$key[total];
}
}
$dataArrayTable21Province=self::GetProvinceDisease($sitecode,$Disease);
$zone_code=$dataArrayTable21Province[0][zone_code];
$fildvaluezone2="zone_code='".$zone_code."'";
$test2[]=self::GetAgeZone($Disease,'<40','<40','provincecode',$fildvaluezone2);
$test2[]=self::GetAgeZone($Disease,'40+','BETWEEN 40 AND 49','provincecode',$fildvaluezone2);
$test2[]=self::GetAgeZone($Disease,'50+','BETWEEN 50 AND 59','provincecode',$fildvaluezone2);
$test2[]=self::GetAgeZone($Disease,'60+','BETWEEN 60 AND 69','provincecode',$fildvaluezone2);
$test2[]=self::GetAgeZone($Disease,'70+','BETWEEN 70 AND 79','provincecode',$fildvaluezone2);
$test2[]=self::GetAgeZone($Disease,'80+','>79','provincecode',$fildvaluezone2);
$datacount2=count($test2);
for ($ii=0; $ii <$datacount2 ; $ii++) {
foreach ($test2[$ii] as $key2) {
$dataarray2[$key2[provincecode]][$key2[codename]][$key2[sex]]=$key2[total];
}
}
$render="table21";
$url=$this->renderAjax($render, [
'dataarray' => $dataarray,
'dataarray2' => $dataarray2,
'nametable' => $nametable,
'table' => $table,
'dataArrayTable21Zone' => $dataArrayTable21Zone,
'dataArrayTable21Province' => $dataArrayTable21Province,
]);
return  $url;
}


}//class
