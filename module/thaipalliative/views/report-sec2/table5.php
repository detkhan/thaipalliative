<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\VarDumper;
Yii::$app->formatter->locale = 'th-TH';
//VarDumper::dump($data,10,true);
$domain=Url::home();
?>
<div class="table-responsive">
  <h2>ตารางที่ <?= $table ?> </h2>
  <p>จำนวนและร้อยละหน่วยบริการและผู้ป่วย <?= $nametable ?></p>
  <table class="table table-bordered">
    <thead>
  <tr  bgcolor="#88DDBB">
    <td rowspan="3"><center>ระดับ</center></td>
    <td colspan="2"><center>ทั้งหมด</center></td>
   <td colspan="2" ><center>เฉพาะ <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?> ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></center></td>
  </tr  >
  <tr bgcolor="#88DDBB">
  <td colspan="2"><center>ผู้ป่วย</center></td>
  <td colspan="2"><center>ผู้ป่วย</center></td>
  </tr>

  <tr bgcolor="#88DDBB">
  <td><center>จำนวน</center></td>
  <td><center>ร้อยละ</center></td>
  <td><center>จำนวน</center></td>
  <td><center>ร้อยละ</center></td>

  </tr>
  </thead>

  <tbody>
  <tr style="solid 1px ">
  <td colspan="5" ><b>ทั้งหมดใน Palliative Care Cloud<b></td>

  </tr>
  <?php
$totacount=count($dataArrayTable5Zone);
$sumtotalZone=array_sum(array_column($dataArrayTable5Zone, 'total'));
$sumtotalZone2=array_sum(array_column($dataArrayTable5Zone2, 'total'));

for ($i=0; $i < $totacount; $i++)
  {
    $sumpercentZone+=($sumtotalZone>0)?number_format(($dataArrayTable5Zone[$i][total]/$sumtotalZone)*100,2):'';
    $sumpercentZone2+=($sumtotalZone2>0)?number_format(($dataArrayTable5Zone2[$i][total]/$sumtotalZone2)*100,2):'';
   ?>
  <tr>
    <td>เขตสุขภาพที่ <?= $dataArrayTable5Zone[$i][zone_code]  ?></td>
    <td align='center'><?= $dataArrayTable5Zone[$i][total]  ?></td>
    <td align='center'><?=  ($sumtotalZone>0)?number_format(($dataArrayTable5Zone[$i][total]/$sumtotalZone)*100,2):''  ?></td>
    <td align='center'><?= $dataArrayTable5Zone2[$i][total]  ?></td>
    <td align='center'><?=  ($sumtotalZone2>0)?number_format(($dataArrayTable5Zone2[$i][total]/$sumtotalZone2)*100,2):''  ?></td>
  </tr>
  <?php
}
   ?>
   <tr bgcolor="#AFEEEE">
    <td>รวม</td>
    <td align='center'><?=  ($sumtotalZone>0)?$sumtotalZone:'' ?></td>
    <td align='center'><?=  ($sumpercentZone>0)?$sumpercentZone:'' ?></td>
    <td align='center'><?=  ($sumtotalZone2>0)?$sumtotalZone2:'' ?></td>
    <td align='center'><?=  ($sumpercentZone2>0)?$sumpercentZone2:'' ?></td>
   </tr>
  <tr>
    <td colspan="5"><b>เขตสุขภาพที่เลือกแสดงรายงาน (เขต <?= $data[0][zonecode]  ?>)</b></td>

  </tr>
  <?php
$totacountProvince=count($dataArrayTable5Province);
$sumtotalProvince=array_sum(array_column($dataArrayTable5Province, 'total'));
$sumtotalProvince2=array_sum(array_column($dataArrayTable5Province2, 'total'));
for ($i=0; $i < $totacountProvince; $i++)
  {
    $sumpercent+=($sumtotalProvince>0)?number_format(($dataArrayTable5Province[$i][total]/$sumtotalProvince)*100,2):'';
    $sumpercent2+=($sumtotalProvince2>0)?number_format(($dataArrayTable5Province2[$i][total]/$sumtotalProvince2)*100,2):'';
   ?>
  <tr>
    <td ><?= $dataArrayTable5Province[$i][province]  ?></td>
    <td align='center'><?= $dataArrayTable5Province[$i][total]  ?></td>
    <td align='center'><?=  ($sumtotalProvince>0)?number_format(($dataArrayTable5Province[$i][total]/$sumtotalProvince)*100,2):''  ?></td>
    <td align='center'><?= $dataArrayTable5Province2[$i][total]  ?></td>
    <td align='center'><?=  ($sumtotalProvince2>0)?number_format(($dataArrayTable5Province2[$i][total]/$sumtotalProvince2)*100,2):''  ?></td>
  </tr>
  <?php
}

   ?>
   <tr bgcolor="#AFEEEE">
      <td>รวม</td>
      <td align='center'><?=  ($sumtotalProvince>0)?$sumtotalProvince:'' ?></td>
      <td align='center'><?=  ($sumpercent>0)?$sumpercent:'' ?></td>
      <td align='center'><?=  ($sumtotalProvince2>0)?$sumtotalProvince2:'' ?></td>
      <td align='center'><?=  ($sumpercent2>0)?$sumpercent2:'' ?></td>
   </tr>
<?php
if($data[0][checkdatasite]==2){
 ?>
   <tr bgcolor="#96db1e">
     <td > ( <?= $data[0][hosname]  ?>)</td>
     <td align='center'>&nbsp;</td>
     <td align='center'>&nbsp;</td>
     <td align='center'>&nbsp;</td>
     <td align='center'>&nbsp;</td>
   </tr>
   <?php
   $totacountSitecode=count($dataArrayTable5Sitecode);
   $sumtotalSitecode=array_sum(array_column($dataArrayTable5Sitecode, 'total'));
   $sumtotalSitecode2=array_sum(array_column($dataArrayTable5Sitecode2, 'total'));
   for ($i=0; $i < $totacountSitecode; $i++)
   {
     $sumpercentSitecode+=($sumtotalSitecode>0)?number_format(($dataArrayTable5Sitecode[$i][total]/$sumtotalSitecode)*100,2):'';
     $sumpercentSitecode2+=($sumtotalSitecode2>0)?number_format(($dataArrayTable5Sitecode2[$i][total]/$sumtotalSitecode2)*100,2):'';
    ?>
   <tr>
     <td ><?= $data[0][hosname]  ?></td>
     <td align='center'><?= ($dataArrayTable5Sitecode[$i][total]>0)?$dataArrayTable5Sitecode[$i][total]:''  ?></td>
     <td align='center'><?=  ($sumtotalSitecode>0)?number_format(($dataArrayTable5Sitecode[$i][total]/$sumtotalSitecode)*100,2):''  ?></td>
     <td align='center'><?= ($dataArrayTable5Sitecode2[$i][total]>0)?$dataArrayTable5Sitecode2[$i][total]:''  ?></td>
     <td align='center'><?=  ($sumtotalSitecode2>0)?number_format(($dataArrayTable5Sitecode2[$i][total]/$sumtotalSitecode2)*100,2):''  ?></td>
   </tr>
   <?php
   }
    ?>
   </tbody>
  <tfoot>
    <tr bgcolor="#AFEEEE">
      <td>รวม</td>
     <td align='center'><?=  ($sumtotalSitecode>0)?$sumtotalSitecode:'' ?></td>
       <td align='center'><?=  ($sumpercentSitecode>0)?$sumpercentSitecode:'' ?></td>
       <td align='center'><?=  ($sumtotalSitecode2>0)?$sumtotalSitecode2:'' ?></td>
     <td align='center'><?=  ($sumpercentSitecode2>0)?$sumpercentSitecode2:'' ?></td>
    </tr>
    </tfoot>
    <?php
}
     ?>
</table>
</div>
