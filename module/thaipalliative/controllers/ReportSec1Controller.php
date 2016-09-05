<?php

namespace backend\modules\thaipalliative\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class ReportSec1Controller extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }//public function actionIndex()



    public function counttotal($sitecode,$all)
    {
      if($all=='yes'){
      $data='';
    }else{
      $data="AND sitecode ='$sitecode'";
    }
      $sqlControl = "SELECT  count(DISTINCT ptid) as total  FROM `tbdata_1` WHERE
      hsitecode IS NOT NULL
      AND hsitecode != 0
      AND hsitecode NOT IN ('A%','Z%','90%','91%','92%') $data";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetDisease($sitecode)
    {
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
,count(*) as total FROM `tbdata_2`
WHERE
sitecode='$sitecode'
and var49 > 0
GROUP BY var49";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function countByYear($sitecode)
    {
      $sqlControl = "SELECT
IF(YEAR(var4)=0 OR ISNULL(var4) OR YEAR(var4)<2000,YEAR(create_date),YEAR(var4)) as yearname,
COUNT(*) as total
FROM `tbdata_1`
WHERE
sitecode='$sitecode'
GROUP BY yearname
";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function countByMonth($sitecode)
    {
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
  FROM `tbdata_1`
  WHERE
  sitecode='13777'
  GROUP BY monthname
  ) as t
";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }


    public function GetPersonByProvince($sitecode)
    {
      $sqlControl = "SELECT
sitecode,
var27_province,
provincecode,
province,
COUNT(DISTINCT ptid) as total
FROM
`tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.var27_province COLLATE utf8_unicode_ci=b.provincecode COLLATE utf8_unicode_ci
WHERE sitecode='13777'
GROUP BY province
";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetAgePerson($sitecode)
    {
      $sqlControl = "SELECT
'ต่ำกว่า 40' as codename,
total
FROM
(SELECT
var6,
var7,
sitecode,
COUNT(DISTINCT ptid) as total
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND var7 < 40)  as t1
UNION
SELECT
'40-49' as codename,
total
FROM
(SELECT
var6,
var7,
sitecode,
COUNT(DISTINCT ptid) as total
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND var7 BETWEEN 40 AND 49)  as t2
UNION
SELECT
'50-59' as codename,
total
FROM
(SELECT
var6,
var7,
sitecode,
COUNT(DISTINCT ptid) as total
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND var7 BETWEEN 50 AND 59)  as t3
UNION
SELECT
'60-69' as codename,
total
FROM
(SELECT
var6,
var7,
sitecode,
COUNT(DISTINCT ptid) as total
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND var7 BETWEEN 60 AND 69)  as t4
UNION
SELECT
'70-79' as codename,
total
FROM
(SELECT
var6,
var7,
sitecode,
COUNT(DISTINCT ptid) as total
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND var7 BETWEEN 70 AND 79)  as t5
UNION
SELECT
'มากกว่า 80' as codename,
total
FROM
(SELECT
var6,
var7,
sitecode,
COUNT(DISTINCT ptid) as total
FROM
`tbdata_1`
WHERE
var7 >=80 AND sitecode='$sitecode')  as t6
";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }


    public function GetSumPersonByProvince($sitecode)
    {
      $sqlControl = "SELECT
SUM(total) as sumtotal
FROM
(SELECT
sitecode,
var27_province,
provincecode,
province,
COUNT(DISTINCT ptid) as total
FROM
`tbdata_1` a
INNER JOIN
`all_hospital_thai` b
ON a.var27_province COLLATE utf8_unicode_ci=b.provincecode COLLATE utf8_unicode_ci
WHERE sitecode='13777'
GROUP BY province) as t
";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetSex($sitecode)
    {
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
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND NOT ISNULL(var11) AND var11 <> ''
GROUP BY var11
  ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetMarried($sitecode)
    {
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
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND
var68 !='' AND
var68 IS NOT NULL
GROUP BY var68
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetSit($sitecode)
    {
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
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND
var70 !='' AND
var70 IS NOT NULL
GROUP BY var70
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetCareer($sitecode)
    {
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
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND
var72 !='' AND
var72 IS NOT NULL
GROUP BY var72
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetNational($sitecode)
    {
      $sqlControl = "SELECT
IF(var65=1,'ไทย','อื่น ๆ')  as codename,
sitecode,
COUNT(DISTINCT ptid) as total
FROM
`tbdata_1`
WHERE
sitecode='$sitecode'
GROUP BY codename
ORDER BY codename DESC
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetNationality($sitecode)
    {
      $sqlControl = "SELECT
IF(var67=1,'ไทย','อื่น ๆ')  as codename,
sitecode,
COUNT(DISTINCT ptid) as total
FROM
`tbdata_1`
WHERE
sitecode='$sitecode'
GROUP BY codename
ORDER BY codename DESC
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetReligion($sitecode)
    {
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
FROM
`tbdata_1`
WHERE
sitecode='13777' AND
var69 !='' AND
var69 IS NOT NULL
GROUP BY var69
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

    public function GetCongenital($sitecode)
    {
      $sqlControl = "SELECT
'เบาหวาน' as codename,
total
FROM
(SELECT
var40_1,
COUNT(DISTINCT ptid) as total
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND var40_1='1'
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
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND var40_2='1'
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
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND var40_3='1'
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
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND var40_4='1'
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
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND var40_5='1'
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
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND var40_6='1'
GROUP BY var40_6
)as t6
    ";
      $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
      return $dataProvider;
    }

public function GetHerb($sitecode)
{
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
FROM
`tbdata_1`
WHERE
sitecode='$sitecode' AND
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

    public function actionFigure1($sitecode=null)
    {
      $totalalldata=self::counttotal($sitecode,yes);
      $totalsitedata=self::counttotal($sitecode,no);
      $totalall=$totalalldata[0][total];
      $totalsite=$totalsitedata[0][total];
      $totalpercent=number_format(($totalsite/$totalall)*100,2);
      $dataArrayChart1=self::GetDisease($sitecode);
      $render="figure1";
      $url=$this->renderAjax($render, [
        'totalall' => $totalall,
        'totalsite' => $totalsite,
        'totalpercent' => $totalpercent,
        'dataArrayChart1' => $dataArrayChart1,
      ]);
      return  $url;

    }

    public function actionFigure2($sitecode=null)
    {
      $totalalldata=self::counttotal($sitecode,yes);
      $totalsitedata=self::counttotal($sitecode,no);
      $totalall=$totalalldata[0][total];
      $totalsite=$totalsitedata[0][total];
      $totalpercent=number_format(($totalsite/$totalall)*100,2);
      $dataArrayChart2=self::GetDisease($sitecode);
      $render="figure2";
      $url=$this->renderAjax($render, [
        'totalall' => $totalall,
        'totalsite' => $totalsite,
        'totalpercent' => $totalpercent,
        'dataArrayChart2' => $dataArrayChart2,
      ]);
      return  $url;

    }


    public function actionFigure3($sitecode=null)
    {
      $dataArrayChart3=self::countByYear($sitecode);
      $render="figure3";
      $url=$this->renderAjax($render, [
        'dataArrayChart3' => $dataArrayChart3,
      ]);
      return  $url;

    }

    public function actionFigure4($sitecode=null)
    {
      $dataArrayChart4=self::countByMonth($sitecode);
      $render="figure4";
      $url=$this->renderAjax($render, [
        'dataArrayChart4' => $dataArrayChart4,
      ]);
      return  $url;

    }


    public function actionTable1($sitecode=null)
    {
      $dataArrayTable1=self::GetPersonByProvince($sitecode);
      $sumtotal=self::GetSumPersonByProvince($sitecode);
      $render="table1";
      $url=$this->renderAjax($render, [
        'dataArrayTable1' => $dataArrayTable1,
        'sumtotal' => $sumtotal,
      ]);
      return  $url;

    }

    public function actionTable2($sitecode=null)
    {
      $dataArrayTable2Age=self::GetAgePerson($sitecode);
      $dataArrayTable2Sex=self::GetSex($sitecode);
      $dataArrayTable2Married=self::GetMarried($sitecode);
      $dataArrayTable2Sit=self::GetSit($sitecode);
      $dataArrayTable2Career=self::GetCareer($sitecode);
      $dataArrayTable2National=self::GetNational($sitecode);
      $dataArrayTable2Nationality=self::GetNationality($sitecode);
      $dataArrayTable2Religion=self::GetReligion($sitecode);
      $dataArrayTable2Congenital=self::GetCongenital($sitecode);
      $dataArrayTable2Herb=self::GetHerb($sitecode);
      $render="table2";
      $url=$this->renderAjax($render, [
        'dataArrayTable2Age' => $dataArrayTable2Age,
        'dataArrayTable2Sex' => $dataArrayTable2Sex,
        'dataArrayTable2Married' => $dataArrayTable2Married,
        'dataArrayTable2Sit' => $dataArrayTable2Sit,
        'dataArrayTable2Career' => $dataArrayTable2Career,
        'dataArrayTable2National' => $dataArrayTable2National,
        'dataArrayTable2Nationality' => $dataArrayTable2Nationality,
        'dataArrayTable2Religion' => $dataArrayTable2Religion,
        'dataArrayTable2Congenital' => $dataArrayTable2Congenital,
        'dataArrayTable2Herb' => $dataArrayTable2Herb,
      ]);
      return  $url;

    }





}//class
