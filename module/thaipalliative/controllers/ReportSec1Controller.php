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
    }//public function actionIndex()

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

    public function counttotal($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$all,$dateno)
    {
      if($all=='yes'){
      $data="ptid<>'0'";
    }
    else{
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
    }
      $sqlControl = "SELECT
count(DISTINCT ptid) as total
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
$data
AND hsitecode IS NOT NULL
AND hsitecode != 0
AND hsitecode NOT IN ('A%','Z%','90%','91%','92%') ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetDisease($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
$data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
$sqlControl = "SELECT
CASE
var49
WHEN
'1'
THEN
'Cancer'
WHEN
'2'
THEN
'Renal'
WHEN
'3'
THEN
'Heart'
WHEN
'4'
THEN
'Lung'
WHEN
'5'
THEN
'Neuro'
WHEN
'6'
THEN
'Trauma'
WHEN
'7'
THEN
'Other'
END as codename
,count(*) as total FROM `tbdata_2` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
$data
AND var49 > 0
GROUP BY var49";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function countByYear($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
      $sqlControl = "SELECT
      *,
COUNT(*) as total
FROM
(SELECT
zone_code,
provincecode,
sitecode,
IF(YEAR(var4)=0 OR ISNULL(var4) OR YEAR(var4)<2000 OR YEAR(var4)>2030,YEAR(create_date),YEAR(var4)) as yearname
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
hsitecode IS NOT NULL
AND hsitecode != 0
AND hsitecode NOT IN ('A%','Z%','90%','91%','92%')
)as t
WHERE
$data
AND yearname > '2014'
GROUP BY yearname
";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function countByMonth($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
  $sqlControl = "SELECT
  CASE
  monthname
  WHEN
  '1'
  THEN
  'มกราคม'
  WHEN
  '2'
  THEN
  'กุมภาพันธ์'
  WHEN
  '3'
  THEN
  'มีนาคม'
  WHEN
  '4'
  THEN
  'เมษายน'
  WHEN
  '5'
  THEN
  'พฤษภาคม'
  WHEN
  '6'
  THEN
  'มิถุนายน'
  WHEN
  '7'
  THEN
  'กรกฎาคม'
  WHEN
  '8'
  THEN
  'สิงหาคม'
  WHEN
  '9'
  THEN
  'กันยายน'
  WHEN
  '10'
  THEN
  'ตุลาคม'
  WHEN
  '11'
  THEN
  'พฤศจิกายน'
  WHEN
  '12'
  THEN
  'ธันวาคม'
  END as mname,total
  FROM
  (SELECT
  IF(MONTH(var4)=0 OR ISNULL(var4) OR MONTH(var4)<2000,MONTH(create_date),MONTH(var4)) as monthname,
  COUNT(*) as total
  FROM `tbdata_1` a
  INNER JOIN
  `all_hospital_thai` b
  ON a.sitecode=b.hcode
  WHERE
  $data
  AND YEAR(var4)=YEAR('$date_end')
  GROUP BY monthname
  ) as t
";

      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }


    public function GetPersonByProvince($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
      $sqlControl = "SELECT
sitecode,
var27_province,
provincecode,
province,
COUNT(DISTINCT ptid) as total
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE $data
GROUP BY province
";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetAgePerson($Disease,$nametype,$filter,$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
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


    public function GetSumPersonByProvince($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
      $sqlControl = "SELECT
SUM(total) as sumtotal
FROM
(SELECT
sitecode,
var27_province,
provincecode,
province,
COUNT(DISTINCT ptid) as total
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE $data
GROUP BY province) as t
";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetSex($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
      $sqlControl = "SELECT
CASE
var11
WHEN
'1'
THEN
'ชาย'
WHEN
'2'
THEN
'หญิง'
END as sexname,
sitecode,
COUNT(DISTINCT ptid) as total
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
$data  AND NOT ISNULL(var11) AND var11 <> ''
GROUP BY var11
  ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetMarried($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
      $sqlControl = "SELECT
CASE
var68
WHEN
'1'
THEN
'โสด'
WHEN
'2'
THEN
'แต่งงาน'
WHEN
'3'
THEN
'หย่า/แยก'
WHEN
'4'
THEN
'หม้าย'
END as codename,
sitecode,
COUNT(DISTINCT ptid) as total
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
$data AND
var68 !='' AND
var68 IS NOT NULL
GROUP BY var68
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetSit($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
      $sqlControl = "SELECT
CASE
var70
WHEN
'1'
THEN
'บัตรทอง'
WHEN
'2'
THEN
'ข้าราชการ'
WHEN
'3'
THEN
'ประกันสังคม'
WHEN
'4'
THEN
'รัฐวิสาหกิจ'
WHEN
'5'
THEN
'จ่ายเอง'
END as codename,
sitecode,
COUNT(DISTINCT ptid) as total
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
$data AND
var70 !='' AND
var70 IS NOT NULL
GROUP BY var70
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetCareer($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
      $sqlControl = "SELECT
CASE
var72
WHEN
'1'
THEN
'ข้าราชการ/รัฐวิสาหกิจ'
WHEN
'2'
THEN
'ค้าขาย'
WHEN
'3'
THEN
'ข้าราชการบำนาญ'
WHEN
'4'
THEN
'รับจ้าง'
WHEN
'5'
THEN
'เกษตรกร'
WHEN
'6'
THEN
'นักบวช'
WHEN
'7'
THEN
'ไม่ได้ประกอบอาชีพ'
END as codename,
sitecode,
COUNT(DISTINCT ptid) as total
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
$data AND
var72 !='' AND
var72 IS NOT NULL
GROUP BY var72
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetNational($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
      $sqlControl = "SELECT
IF(var65=1,'ไทย','อื่น ๆ')  as codename,
sitecode,
COUNT(DISTINCT ptid) as total
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
$data
GROUP BY codename
ORDER BY codename DESC
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetNationality($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
      $sqlControl = "SELECT
IF(var67=1,'ไทย','อื่น ๆ')  as codename,
sitecode,
COUNT(DISTINCT ptid) as total
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
$data
GROUP BY codename
ORDER BY codename DESC
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetReligion($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
      $sqlControl = "SELECT
CASE
var69
WHEN
'1'
THEN
'พุทธ'
WHEN
'2'
THEN
'คริสต์'
WHEN
'3'
THEN
'อิสลาม'
WHEN
'4'
THEN
'อื่นๆ'
END as codename,
sitecode,
COUNT(DISTINCT ptid) as total
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
$data AND
var69 !='' AND
var69 IS NOT NULL
GROUP BY var69
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetCongenital($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
    {
      $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
      $sqlControl = "SELECT
      'เบาหวาน' as codename,
      total
      FROM
      (SELECT
      var40_1,
      COUNT(DISTINCT ptid) as total
      FROM `tbdata_1` a
      INNER JOIN
      `all_hospital_thai` b
      ON a.sitecode=b.hcode
      WHERE
      $data AND var40_1='1'
      GROUP BY var40_1
      )as t1
      UNION
      SELECT
      'โรคหัวใจ' as codename,
      total
      FROM
      (SELECT
      var40_2,
      COUNT(DISTINCT ptid) as total
      FROM `tbdata_1` a
      INNER JOIN
      `all_hospital_thai` b
      ON a.sitecode=b.hcode
      WHERE
      $data AND var40_2='1'
      GROUP BY var40_2
      )as t2
      UNION
      SELECT
      'โรคไต' as codename,
      total
      FROM
      (SELECT
      var40_3,
      COUNT(DISTINCT ptid) as total
      FROM `tbdata_1` a
      INNER JOIN
      `all_hospital_thai` b
      ON a.sitecode=b.hcode
      WHERE
      $data AND var40_3='1'
      GROUP BY var40_3
      )as t3
      UNION
      SELECT
      'ความดันโลหิตสูง' as codename,
      total
      FROM
      (SELECT
      var40_4,
      COUNT(DISTINCT ptid) as total
      FROM `tbdata_1` a
      INNER JOIN
      `all_hospital_thai` b
      ON a.sitecode=b.hcode
      WHERE
      $data AND var40_4='1'
      GROUP BY var40_4
      )as t4
      UNION
      SELECT
      'ไขมันในเลือดสูง' as codename,
      total
      FROM
      (SELECT
      var40_5,
      COUNT(DISTINCT ptid) as total
      FROM `tbdata_1` a
      INNER JOIN
      `all_hospital_thai` b
      ON a.sitecode=b.hcode
      WHERE
      $data AND var40_5='1'
      GROUP BY var40_5
      )as t5
      UNION
      SELECT
      'อื่นๆ' as codename,
      total
      FROM
      (SELECT
      var40_6,
      COUNT(DISTINCT ptid) as total
      FROM `tbdata_1` a
      INNER JOIN
      `all_hospital_thai` b
      ON a.sitecode=b.hcode
      WHERE
      $data AND var40_6='1'
      GROUP BY var40_6
      )as t6
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

public function GetHerb($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno)
{
  $data=self::CheckDataSql($sitecode,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,$dateno);
    $sqlControl = "SELECT
CASE
var74
WHEN
'1'
THEN
'มี'
WHEN
'2'
THEN
'ไม่มี'
END as codename,
sitecode,
COUNT(DISTINCT ptid) as total
FROM `tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.sitecode=b.hcode
WHERE
$data AND
var74 !='' AND
var74 IS NOT NULL
GROUP BY var74
  ";
    $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
    return $dataProvider;
  }




    public function actionTest()
    {
    $sitecode='13777';
    $all="yes";
    var_dump(self::counttotal($sitecode,$all));
    }

    public function actionFigure1($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
    {
      $data=self::PackData($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end);
      $totalalldata=self::counttotal($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes,no);
      $totalsitedata=self::counttotal($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no,no);
      $totalall=$totalalldata[0][total];
      $totalsite=$totalsitedata[0][total];
      $totalpercent=number_format(($totalsite/$totalall)*100,2);
      $dataArrayChart1=self::GetDisease($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $render="figure1";
      $url=$this->renderAjax($render, [
        'totalall' => $totalall,
        'totalsite' => $totalsite,
        'totalpercent' => $totalpercent,
        'dataArrayChart1' => $dataArrayChart1,
        'data' => $data,
      ]);
      return  $url;

    }

    public function actionFigure2($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
    {
      $data=self::PackData($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end);
      $totalalldata=self::counttotal($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes,no);
      $totalsitedata=self::counttotal($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no,yes);
      $totalall=$totalalldata[0][total];
      $totalsite=$totalsitedata[0][total];
      $totalpercent=number_format(($totalsite/$totalall)*100,2);
      $dataArrayChart2=self::GetDisease($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $render="figure2";
      $url=$this->renderAjax($render, [
        'totalall' => $totalall,
        'totalsite' => $totalsite,
        'totalpercent' => $totalpercent,
        'dataArrayChart2' => $dataArrayChart2,
        'data' => $data,
      ]);
      return  $url;

    }


    public function actionFigure3($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
    {
      $data=self::PackData($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end);
      $dataArrayChart3=self::countByYear($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $render="figure3";
      $url=$this->renderAjax($render, [
        'dataArrayChart3' => $dataArrayChart3,
        'data' => $data,
      ]);
      return  $url;

    }

    public function actionFigure4($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
    {
      $data=self::PackData($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end);
      $dataArrayChart4=self::countByMonth($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $render="figure4";
      $url=$this->renderAjax($render, [
        'dataArrayChart4' => $dataArrayChart4,
        'data' => $data,
      ]);
      return  $url;

    }


    public function actionTable1($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
    {
      $data=self::PackData($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end);
      $dataArrayTable1=self::GetPersonByProvince($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $sumtotal=self::GetSumPersonByProvince($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $render="table1";
      $url=$this->renderAjax($render, [
        'dataArrayTable1' => $dataArrayTable1,
        'sumtotal' => $sumtotal,
        'data' => $data,
      ]);
      return  $url;

    }

    public function actionTable2($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end)
    {
      $Disease="all";
      $data=self::PackData($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end);
      $dataArrayTable2Age[]=self::GetAgePerson($Disease,'<40','<40',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Age[]=self::GetAgePerson($Disease,'40+','BETWEEN 40 AND 49',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Age[]=self::GetAgePerson($Disease,'50+','BETWEEN 50 AND 59',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Age[]=self::GetAgePerson($Disease,'60+','BETWEEN 60 AND 69',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Age[]=self::GetAgePerson($Disease,'70+','BETWEEN 70 AND 79',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Age[]=self::GetAgePerson($Disease,'80+','>79',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Age2[]=self::GetAgePerson($Disease,'<40','<40',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Age2[]=self::GetAgePerson($Disease,'40+','BETWEEN 40 AND 49',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Age2[]=self::GetAgePerson($Disease,'50+','BETWEEN 50 AND 59',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Age2[]=self::GetAgePerson($Disease,'60+','BETWEEN 60 AND 69',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Age2[]=self::GetAgePerson($Disease,'70+','BETWEEN 70 AND 79',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Age2[]=self::GetAgePerson($Disease,'80+','>79',$sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Sex=self::GetSex($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Married=self::GetMarried($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Sit=self::GetSit($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Career=self::GetCareer($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2National=self::GetNational($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Nationality=self::GetNationality($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Religion=self::GetReligion($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Congenital=self::GetCongenital($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Herb=self::GetHerb($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,no);
      $dataArrayTable2Sex2=self::GetSex($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Married2=self::GetMarried($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Sit2=self::GetSit($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Career2=self::GetCareer($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2National2=self::GetNational($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Nationality2=self::GetNationality($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Religion2=self::GetReligion($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Congenital2=self::GetCongenital($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      $dataArrayTable2Herb2=self::GetHerb($sitecode,$hosname,$checkdatasite,$zonecode,$provincecode,$date_start,$date_end,yes);
      //VarDumper::dump($dataArrayTable2Age,10,true);
      //exit();
      $render="table2";
      $url=$this->renderAjax($render, [
        'dataArrayTable2Age' => $dataArrayTable2Age,
        'dataArrayTable2Age2' => $dataArrayTable2Age2,
        'dataArrayTable2Sex' => $dataArrayTable2Sex,
        'dataArrayTable2Married' => $dataArrayTable2Married,
        'dataArrayTable2Sit' => $dataArrayTable2Sit,
        'dataArrayTable2Career' => $dataArrayTable2Career,
        'dataArrayTable2National' => $dataArrayTable2National,
        'dataArrayTable2Nationality' => $dataArrayTable2Nationality,
        'dataArrayTable2Religion' => $dataArrayTable2Religion,
        'dataArrayTable2Congenital' => $dataArrayTable2Congenital,
        'dataArrayTable2Herb' => $dataArrayTable2Herb,
        'dataArrayTable2Sex2' => $dataArrayTable2Sex2,
        'dataArrayTable2Married2' => $dataArrayTable2Married2,
        'dataArrayTable2Sit2' => $dataArrayTable2Sit2,
        'dataArrayTable2Career2' => $dataArrayTable2Career2,
        'dataArrayTable2National2' => $dataArrayTable2National2,
        'dataArrayTable2Nationality2' => $dataArrayTable2Nationality2,
        'dataArrayTable2Religion2' => $dataArrayTable2Religion2,
        'dataArrayTable2Congenital2' => $dataArrayTable2Congenital2,
        'dataArrayTable2Herb2' => $dataArrayTable2Herb2,
        'data' => $data,
      ]);
      return  $url;

    }





}//class
