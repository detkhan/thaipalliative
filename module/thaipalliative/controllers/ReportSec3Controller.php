<?php

namespace backend\modules\thaipalliative\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;

class ReportSec3Controller extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTable29()
    { //cancer
      $cancerbusi=self::GetDataTable29(1,'var56r1');
      $cancerpfear=self::GetDataTable29(1,'var56r2');
      $cancersocial =self::GetDataTable29(1,'var56r3');

      //renal
      $renalbusi=self::GetDataTable29(2,'var56r1');
      $renalpfear=self::GetDataTable29(2,'var56r2');
      $renalsocial =self::GetDataTable29(2,'var56r3');

      //trauma
      $traumabusi=self::GetDataTable29(6,'var56r1');
      $traumapfear=self::GetDataTable29(6,'var56r2');
      $traumasocial =self::GetDataTable29(6,'var56r3');

      //lung
      $lungbusi=self::GetDataTable29(4,'var56r1');
      $lungpfear=self::GetDataTable29(4,'var56r2');
      $lungsocial =self::GetDataTable29(4,'var56r3');

      //neuro
      $neurobusi=self::GetDataTable29(5,'var56r1');
      $neuropfear=self::GetDataTable29(5,'var56r2');
      $neurosocial =self::GetDataTable29(5,'var56r3');

      //heart
      $heartbusi=self::GetDataTable29(3,'var56r1');
      $heartpfear=self::GetDataTable29(3,'var56r2');
      $heartsocial =self::GetDataTable29(3,'var56r3');

    //  other
    $otherbusi=self::GetDataTable29(7,'var56r1');
    $otherpfear=self::GetDataTable29(7,'var56r2');
    $othersocial =self::GetDataTable29(7,'var56r3');

      //  exit();
      $render="table29";
      $url=$this->renderAjax($render, [
      'cancerbusi' => $cancerbusi,
      'cancerpfear' => $cancerpfear,
      'cancersocial' => $cancersocial,

      //renal
      'renalbusi' => $renalbusi,
      'renalpfear' => $renalpfear,
      'renalsocial' => $renalsocial,

      //trauma
      'traumabusi' => $traumabusi,
      'traumapfear' => $traumapfear,
      'traumasocial' => $traumasocial,

      //lung
      'lungbusi' => $lungbusi,
      'lungpfear' => $lungpfear,
      'lungsocial' => $lungsocial,

      //Neuro
      'neurobusi' => $neurobusi,
      'neuropfear' => $neuropfear,
      'neurosocial' => $neurosocial,

      //heart
      'heartbusi' => $heartbusi,
      'heartpfear' => $heartpfear,
      'heartsocial' => $heartsocial,

      //other
      'otherbusi' => $otherbusi,
      'otherpfear' => $otherpfear,
      'othersocial' => $othersocial,

      ]);
      return  $url;
    }//test

    public function GetDataTable29($Disease,$type)
    {
      if($Disease=='all'){
    $dataDisease='>0';

      }else{
    $dataDisease="=$Disease";
      }
      $sqlControl = "SELECT
    *
    FROM
    (SELECT
    1 as id,
      COUNT(DISTINCT a.ptid) as total
      FROM
      `tbdata_1` a
      INNER JOIN
      `tbdata_2` b
      ON a.ptid=b.ptid
      WHERE
      var49 $dataDisease
      AND $type ='1') as a
    INNER JOIN
    (SELECT
    1 as id,
      COUNT(DISTINCT a.ptid) as sumtotal
      FROM
      `tbdata_1` a
      INNER JOIN
      `tbdata_2` b
      ON a.ptid=b.ptid
      WHERE
      var49 $dataDisease) as b
    ON a.id=b.id
    ";
    $dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
    return $dataProvider;
  } // table 29

    public function actionTable30()
    { //cancer
      $cancerhope=self::GetData(1,'var57r1');
      $cancerfear=self::GetData(1,'var57r2');
      $cancerunfinished =self::GetData(1,'var57r3');
      $cancerconnected =self::GetData(1,'var57r4');
      $cancercontrol =self::GetData(1,'var57r5');
      $cancerreligious =self::GetData(1,'var57r6');
      //renal
      $renalhope=self::GetData(2,'var57r1');
      $renalfear=self::GetData(2,'var57r2');
      $renalunfinished =self::GetData(2,'var57r3');
      $renalconnected =self::GetData(2,'var57r4');
      $renalcontrol =self::GetData(2,'var57r5');
      $renalreligious =self::GetData(2,'var57r6');
      //trauma
      $traumahope=self::GetData(6,'var57r1');
      $traumafear=self::GetData(6,'var57r2');
      $traumaunfinished =self::GetData(6,'var57r3');
      $traumaconnected =self::GetData(6,'var57r4');
      $traumacontrol =self::GetData(6,'var57r5');
      $traumareligious =self::GetData(6,'var57r6');
      //lung
      $lunghope=self::GetData(4,'var57r1');
      $lungfear=self::GetData(4,'var57r2');
      $lungunfinished =self::GetData(4,'var57r3');
      $lungconnected =self::GetData(4,'var57r4');
      $lungcontrol =self::GetData(4,'var57r5');
      $lungreligious =self::GetData(4,'var57r6');
      //neuro
      $neurohope=self::GetData(5,'var57r1');
      $neurofear=self::GetData(5,'var57r2');
      $neurounfinished =self::GetData(5,'var57r3');
      $neuroconnected =self::GetData(5,'var57r4');
      $neurocontrol =self::GetData(5,'var57r5');
      $neuroreligious =self::GetData(5,'var57r6');
      //heart
      $hearthope=self::GetData(3,'var57r1');
      $heartfear=self::GetData(3,'var57r2');
      $heartunfinished =self::GetData(3,'var57r3');
      $heartconnected =self::GetData(3,'var57r4');
      $heartcontrol =self::GetData(3,'var57r5');
      $heartreligious =self::GetData(3,'var57r6');
    //  other
    $otherhope=self::GetData(7,'var57r1');
    $otherfear=self::GetData(7,'var57r2');
    $otherunfinished =self::GetData(7,'var57r3');
    $otherconnected =self::GetData(7,'var57r4');
    $othercontrol =self::GetData(7,'var57r5');
    $otherreligious =self::GetData(7,'var57r6');
      //  exit();
      $render="table30";
      $url=$this->renderAjax($render, [
      'cancerhope' => $cancerhope,
      'cancerfear' => $cancerfear,
      'cancerunfinished' => $cancerunfinished,
      'cancerconnected' => $cancerconnected,
      'cancercontrol' => $cancercontrol,
      'cancerreligious' => $cancerreligious,
      //renal
      'renalhope' => $renalhope,
      'renalfear' => $renalfear,
      'renalunfinished' => $renalunfinished,
      'renalconnected' => $renalconnected,
      'renalcontrol' => $renalcontrol,
      'renalreligious' => $renalreligious,
      //trauma
      'traumahope' => $traumahope,
      'traumafear' => $traumafear,
      'traumaunfinished' => $traumaunfinished,
      'traumaconnected' => $traumaconnected,
      'traumacontrol' => $traumacontrol,
      'traumareligious' => $traumareligious,
      //lung
      'lunghope' => $lunghope,
      'lungfear' => $lungfear,
      'lungunfinished' => $lungunfinished,
      'lungconnected' => $lungconnected,
      'lungcontrol' => $lungcontrol,
      'lungreligious' => $lungreligious,
      //Neuro
      'neurohope' => $neurohope,
      'neurofear' => $neurofear,
      'neurounfinished' => $neurounfinished,
      'neuroconnected' => $neuroconnected,
      'neurocontrol' => $neurocontrol,
      'neuroreligious' => $neuroreligious,
      //heart
      'hearthope' => $hearthope,
      'heartfear' => $heartfear,
      'heartunfinished' => $heartunfinished,
      'heartconnected' => $heartconnected,
      'heartcontrol' => $heartcontrol,
      'heartreligious' => $heartreligious,
      //other
      'otherhope' => $otherhope,
      'otherfear' => $otherfear,
      'otherunfinished' => $otherunfinished,
      'otherconnected' => $otherconnected,
      'othercontrol' => $othercontrol,
      'otherreligious' => $otherreligious,
      ]);
      return  $url;
    }//test

    public function GetData($Disease,$type)
    {
      if($Disease=='all'){
    $dataDisease='>0';

      }else{
    $dataDisease="=$Disease";
      }
      $sqlControl = "SELECT
*
FROM
(SELECT
1 as id,
      COUNT(DISTINCT a.ptid) as total
      FROM
      `tbdata_1` a
      INNER JOIN
      `tbdata_2` b
      ON a.ptid=b.ptid
      WHERE
      var49 $dataDisease
      AND $type ='1') as a
INNER JOIN
(SELECT
1 as id,
      COUNT(DISTINCT a.ptid) as sumtotal
      FROM
      `tbdata_1` a
      INNER JOIN
      `tbdata_2` b
      ON a.ptid=b.ptid
      WHERE
      var49 $dataDisease) as b
ON a.id=b.id
";
$dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
return $dataProvider;
    }

public function actionTable31()
{ //cancer
  $cancerpt31=self::GetDataTable31(1,'dsfor_ptr1');
  $cancerfamily31=self::GetdataTable31(1,'dsfor_familyr1');
  $cancerpd31 =self::GetdataTable31(1,'dsfor_ptr2 ');
  $cancerpdfamily31 =self::GetdataTable31(1,'dsfor_familyr2 ');
  $cancertarget31 =self::GetdataTable31(1,'dsfor_ptr3');
  $cancertargetf31 =self::GetdataTable31(1,'dsfor_familyr3');
  //renal
  $renalpt31=self::GetdataTable31(2,'dsfor_ptr1');
  $renalfamily31=self::GetdataTable31(2,'dsfor_familyr1');
  $renalpd31 =self::GetdataTable31(2,'dsfor_ptr2 ');
  $renalpdfamily31 =self::GetdataTable31(2,'dsfor_familyr2 ');
  $renaltarget31 =self::GetdataTable31(2,'dsfor_ptr3');
  $renaltargetf31 =self::GetdataTable31(2,'dsfor_familyr3');
  //trauma
  $traumapt31=self::GetdataTable31(6,'dsfor_ptr1');
  $traumafamily31=self::GetdataTable31(6,'dsfor_familyr1');
  $traumapd31 =self::GetdataTable31(6,'dsfor_ptr2 ');
  $traumapdfamily31 =self::GetdataTable31(6,'dsfor_familyr2 ');
  $traumatarget31 =self::GetdataTable31(6,'dsfor_ptr3');
  $traumatargetf31 =self::GetdataTable31(6,'dsfor_familyr3');
  //lung
  $lungpt31=self::GetdataTable31(4,'dsfor_ptr1');
  $lungfamily31=self::GetdataTable31(4,'dsfor_familyr1');
  $lungpd31 =self::GetdataTable31(4,'dsfor_ptr2 ');
  $lungpdfamily31 =self::GetdataTable31(4,'dsfor_familyr2 ');
  $lungtarget31 =self::GetdataTable31(4,'dsfor_ptr3');
  $lungtargetf31 =self::GetdataTable31(4,'dsfor_familyr3');
  //neuro
  $neuropt31=self::GetdataTable31(5,'dsfor_ptr1');
  $neurofamily31=self::GetdataTable31(5,'dsfor_familyr1');
  $neuropd31 =self::GetdataTable31(5,'dsfor_ptr2 ');
  $neuropdfamily31 =self::GetdataTable31(5,'dsfor_familyr2 ');
  $neurotarget31 =self::GetdataTable31(5,'dsfor_ptr3');
  $neurotargetf31 =self::GetdataTable31(5,'dsfor_familyr3');
  //heart
  $heartpt31=self::GetdataTable31(3,'dsfor_ptr1');
  $heartfamily31=self::GetdataTable31(3,'dsfor_familyr1');
  $heartpd31 =self::GetdataTable31(3,'dsfor_ptr2 ');
  $heartpdfamily31 =self::GetdataTable31(3,'dsfor_familyr2 ');
  $hearttarget31 =self::GetdataTable31(3,'dsfor_ptr3');
  $hearttargetf31 =self::GetdataTable31(3,'dsfor_familyr3');
//  other
$otherpt31=self::GetdataTable31(7,'dsfor_ptr1');
$otherfamily31=self::GetdataTable31(7,'dsfor_familyr1');
$otherpd31 =self::GetdataTable31(7,'dsfor_ptr2 ');
$otherpdfamily31 =self::GetdataTable31(7,'dsfor_familyr2 ');
$othertarget31 =self::GetdataTable31(7,'dsfor_ptr3');
$othertargetf31 =self::GetdataTable31(7,'dsfor_familyr3');
  //  exit();
  $render="table31";
  $url=$this->renderAjax($render, [
  'cancerpt31' => $cancerpt31,
  'cancerfamily31' => $cancerfamily31,
  'cancerpd31' => $cancerpd31,
  'cancerpdfamily31' => $cancerpdfamily31,
  'cancertarget31' => $cancertarget31,
  'cancertargetf31' => $cancertargetf31,
  //renal
  'renalpt31' => $renalpt31,
  'renalfamily31' => $renalfamily31,
  'renalpd31' => $renalpd31,
  'renalpdfamily31' => $renalpdfamily31,
  'renaltarget31' => $renaltarget31,
  'renaltargetf31' => $renaltargetf31,
  //trauma
  'traumapt31' => $traumapt31,
  'traumafamily31' => $traumafamily31,
  'traumapd31' => $traumapd31,
  'traumapdfamily31' => $traumapdfamily31,
  'traumatarget31' => $traumatarget31,
  'traumatargetf31' => $traumatargetf31,
  //lung
  'lungpt31' => $lungpt31,
  'lungfamily31' => $lungfamily31,
  'lungpd31' => $lungpd31,
  'lungpdfamily31' => $lungpdfamily31,
  'lungtarget31' => $lungtarget31,
  'lungtargetf31' => $lungtargetf31,
  //Neuro
  'neuropt31' => $neuropt31,
  'neurofamily31' => $neurofamily31,
  'neuropd31' => $neuropd31,
  'neuropdfamily31' => $neuropdfamily31,
  'neurotarget31' => $neurotarget31,
  'neurotargetf31' => $neurotargetf31,
  //heart
  'heartpt31' => $heartpt31,
  'heartfamily31' => $heartfamily31,
  'heartpd31' => $heartpd31,
  'heartpdfamily31' => $heartpdfamily31,
  'hearttarget31' => $hearttarget31,
  'hearttargetf31' => $hearttargetf31,
  //other
  'otherpt31' => $otherpt31,
  'otherfamily31' => $otherfamily31,
  'otherpd31' => $otherpd31,
  'otherpdfamily31' => $otherpdfamily31,
  'othertarget31' => $othertarget31,
  'othertargetf31' => $othertargetf31,
  ]);
  return  $url;
}//test


    public function GetdataTable31($Disease,$type)
    {
      if($Disease=='all'){
    $dataDisease='>0';

      }else{
    $dataDisease="=$Disease";
      }
      $sqlControl = "SELECT
*
FROM
(SELECT
1 as id,
      COUNT(DISTINCT c.ptid) as total
      FROM
      `tbdata_1` c
      INNER JOIN
      `tbdata_2` d
      ON c.ptid=d.ptid
      WHERE
      var49 $dataDisease
      AND $type ='1') as c
INNER JOIN
(SELECT
1 as id,
      COUNT(DISTINCT c.ptid) as sumtotal
      FROM
      `tbdata_1` c
      INNER JOIN
      `tbdata_2` d
      ON c.ptid=d.ptid
      WHERE
      var49 $dataDisease) as d
ON c.id=d.id
";
$dataProvider = Yii::$app->db->createCommand($sqlControl)->queryAll();
return $dataProvider;
    }

}//class table 31
