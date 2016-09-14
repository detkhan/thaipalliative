<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
Yii::$app->formatter->locale = 'th-TH';

$domain=Url::home();
?>
<div class="table-responsive">
  <h2>ตารางที่ 2</h2>
  <p>จำนวนและร้อยละผู้ป่วย ที่ให้บริการโดย <?=  $data[0][hosname] ?> จำแนกตามลักษณะประชากร นำเสนอเป็นค่าจำนวนและร้อยละ เว้นแต่จะระบุเป็นอย่างอื่นในบางรายการ</p>
  <table class="table table-hover">
    <thead>
  <tr  bgcolor="#EAF4FF">
    <td rowspan="2"><center>ลักษณะประชากร</center></td>
    <td colspan="2"><center>ทั้งหมด</center></td>
   <td colspan="2" ><center><? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?> ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></center>
</td>
  </tr>
  <tr bgcolor="#EAF4FF">
    <td><center>จำนวน</center></td>
    <td><center>ร้อยละ</center></td>
	 <td><center>จำนวน</center></td>
    <td><center>ร้อยละ</center></td>
  </tr>
  </thead>
<tbody>
  <tr bgcolor="#EAF4EF">
    <td >อายุ (ปี)</td>
    <td align='right'></td>
    <td align='right'></td>
   <td align='right'></td>
	<td align='right'></td>
  </tr>
  <?php
  $totacount=count($dataArrayTable2Age);
  for ($i=0; $i < $totacount; $i++)
    {
  $sumtotal+=array_sum(array_column($dataArrayTable2Age[$i], 'total'));
  $sumtotal2+=array_sum(array_column($dataArrayTable2Age2[$i], 'total'));
  $mean = $sumtotal/$totacount;
  $arraydata=array_column($dataArrayTable2Age[0], 'total');
}
  for ($i=0; $i < $totacount; $i++)
    {
   ?>
  <tr>
    <td><?=  $dataArrayTable2Age[$i][0][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Age[$i][0][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Age[$i][0][total]/$sumtotal)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Age2[$i][0][total]  ?></td>
	<td align='right'><?= number_format(($dataArrayTable2Age2[$i][0][total]/$sumtotal2)*100,2)  ?></td>
  </tr>
  <tr>
  <?php
}
   ?>
   <tr>
    <td>เฉลี่ย (ส่วนเบี่ยงเบนสาตรฐาน)</td>
    <td align='right'><?=  $sd  ?></td>
    <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
	<td align='right'>&nbsp;</td>
  </tr>
  <tr>
    <td>มัธยฐาน (ต่ำสุด : สูงสุด)</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
	<td align='right'>&nbsp;</td>
  </tr>
  <tr bgcolor="#EAF4EF">
    <td >เพศ</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
	<td align='right'>&nbsp;</td>
  </tr>
  </<?php
  $totalsex=count($dataArrayTable2Sex);
  $sumtotalsex=array_sum(array_column($dataArrayTable2Sex, 'total'));
  $sumtotalsex2=array_sum(array_column($dataArrayTable2Sex2, 'total'));
for ($i=0; $i < $totalsex; $i++) {


   ?>
  <tr>
    <td><?=  $dataArrayTable2Sex[$i][sexname]  ?></td>
   <td align='right'><?=  $dataArrayTable2Sex[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Sex[$i][total]/$sumtotalsex)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Sex2[$i][total]  ?></td>
	<td align='right'><?=  number_format(($dataArrayTable2Sex2[$i][total]/$sumtotalsex2)*100,2)  ?></td>
  </tr>
<?php
}
 ?>
  <tr bgcolor="#EAF4EF">
    <td >สถานภาพสมรส</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
	<td align='right'>&nbsp;</td>
  </tr>
  <tr>
    <?php
    $totalMarried=count($dataArrayTable2Married);
    $sumtotalMarried=array_sum(array_column($dataArrayTable2Married, 'total'))-$dataArrayTable2Married[($totalMarried-1)][total];
    $sumtotalMarried2=array_sum(array_column($dataArrayTable2Married2, 'total'))-$dataArrayTable2Married2[($totalMarried-1)][total];
  for ($i=0; $i < ($totalMarried-1); $i++) {
     ?>
    <td><?=  $dataArrayTable2Married[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Married[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Married[$i][total]/$sumtotalMarried)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Married2[$i][total]  ?></td>
	<td align='right'><?=  number_format(($dataArrayTable2Married2[$i][total]/$sumtotalMarried2)*100,2)  ?></td>
  </tr>
<?php
}
 ?>
  <tr bgcolor="#EAF4EF">
    <td >สิทธิ์การรักษา</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
	<td align='right'>&nbsp;</td>
  </tr>
  <?php
  $totalSit=count($dataArrayTable2Sit);
  $sumtotalSit=array_sum(array_column($dataArrayTable2Sit, 'total'))-$dataArrayTable2Sit[($totalSit-1)][total];
  $sumtotalSit2=array_sum(array_column($dataArrayTable2Sit2, 'total'))-$dataArrayTable2Sit2[($totalSit-1)][total];
  for ($i=0; $i < ($totalSit-1); $i++) {
   ?>
  <tr>
    <td><?=  $dataArrayTable2Sit[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Sit[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Sit[$i][total]/$sumtotalSit)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Sit2[$i][total]  ?></td>
	<td align='right'><?=  number_format(($dataArrayTable2Sit2[$i][total]/$sumtotalSit2)*100,2)  ?></td>
  </tr>
<?php
}
 ?>

   <tr bgcolor="#EAF4EF">
    <td >อาชีพ</td>
     <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
	<td align='right'>&nbsp;</td>
  </tr>
  <?php
  $totalCareer=count($dataArrayTable2Career);
  $sumtotalCareer=array_sum(array_column($dataArrayTable2Career, 'total'))-$dataArrayTable2Career[($totalCareer-1)][total];
  $sumtotalCareer2=array_sum(array_column($dataArrayTable2Career2, 'total'))-$dataArrayTable2Career2[($totalCareer-1)][total];
  for ($i=0; $i < ($totalCareer-1); $i++) {
   ?>
  <tr>
    <td><?=  $dataArrayTable2Career[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Career[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Career[$i][total]/$sumtotalCareer)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Career2[$i][total]  ?></td>
	<td align='right'><?=  number_format(($dataArrayTable2Career2[$i][total]/$sumtotalCareer2)*100,2)  ?></td>
  </tr>
  <?php
}
   ?>
  <tr bgcolor="#EAF4EF">
    <td >เชื้อชาติ</td>
     <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
	<td align='right'>&nbsp;</td>
  </tr>
  <?php
  $totalNational=count($dataArrayTable2National);
  $sumtotalNational=array_sum(array_column($dataArrayTable2National, 'total'));
  $sumtotalNational2=array_sum(array_column($dataArrayTable2National2, 'total'));
  for ($i=0; $i < $totalNational; $i++) {

   ?>
  <tr>
    <td><?=  $dataArrayTable2National[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2National[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2National[$i][total]/$sumtotalNational)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2National2[$i][total]  ?></td>
	<td align='right'><?=  number_format(($dataArrayTable2National2[$i][total]/$sumtotalNational2)*100,2)  ?></td>
  </tr>
  <?php
}
   ?>
   <tr bgcolor="#EAF4EF">
    <td >สัญชาติ</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
	<td align='right'>&nbsp;</td>
  </tr>
  <?php
  $totalNationality=count($dataArrayTable2Nationality);
  $sumtotalNationality=array_sum(array_column($dataArrayTable2Nationality, 'total'));
  $sumtotalNationality2=array_sum(array_column($dataArrayTable2Nationality2, 'total'));
  for ($i=0; $i < $totalNationality; $i++) {

   ?>
  <tr>
    <td><?=  $dataArrayTable2Nationality[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Nationality[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Nationality[$i][total]/$sumtotalNationality)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Nationality2[$i][total]  ?></td>
  <td align='right'><?=  number_format(($dataArrayTable2Nationality2[$i][total]/$sumtotalNationality2)*100,2)  ?></td>
  </tr>
  <?php
}
   ?>
  <tr bgcolor="#EAF4EF">
    <td >ศาสนา</td>
     <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
	<td align='right'>&nbsp;</td>
  </tr>
  <?php
  $totalReligion=count($dataArrayTable2Religion);
  $sumtotalReligion=array_sum(array_column($dataArrayTable2Religion, 'total'));
  $sumtotalReligion2=array_sum(array_column($dataArrayTable2Religion2, 'total'));
  for ($i=0; $i < $totalReligion; $i++) {

   ?>
  <tr>
    <td><?=  $dataArrayTable2Religion[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Religion[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Religion[$i][total]/$sumtotalReligion)*100,2)  ?></td>
    <td align='right'><?=  $dataArrayTable2Religion2[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Religion2[$i][total]/$sumtotalReligion2)*100,2)  ?></td>
  </tr>
  <tr>
  <?php
}
   ?>
  <tr bgcolor="#EAF4EF">
    <td >โรคประจำตัว</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
	<td align='right'>&nbsp;</td>
  </tr>
  <?php
  $totalCongenital=count($dataArrayTable2Congenital);
  $sumtotalCongenital=array_sum(array_column($dataArrayTable2Congenital, 'total'));
  $sumtotalCongenital2=array_sum(array_column($dataArrayTable2Congenital2, 'total'));
  for ($i=0; $i < $totalCongenital; $i++) {

   ?>
  <tr>
    <td><?=  $dataArrayTable2Congenital[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Congenital[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Congenital[$i][total]/$sumtotalCongenital)*100,2)  ?></td>
    <td align='right'><?=  $dataArrayTable2Congenital2[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Congenital2[$i][total]/$sumtotalCongenital2)*100,2)  ?></td>
  </tr>
<?php
}
 ?>
   <tr bgcolor="#EAF4EF">
    <td >ประวัติการรักษาด้วยแพทย์ทางเลือก/สมุนไพร</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
	<td align='right'>&nbsp;</td>
  </tr>
  <?php
  $totalHerb=count($dataArrayTable2Herb);
  $sumtotalHerb=array_sum(array_column($dataArrayTable2Herb, 'total'));
  $sumtotalHerb2=array_sum(array_column($dataArrayTable2Herb2, 'total'));
  for ($i=0; $i < $totalHerb; $i++) {

   ?>
  <tr>
    <td><?=  $dataArrayTable2Herb[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Herb[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Herb[$i][total]/$sumtotalHerb)*100,2)  ?></td>
    <td align='right'><?=  $dataArrayTable2Herb2[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Herb2[$i][total]/$sumtotalHerb2)*100,2)  ?></td>
  </tr>
  <?php
  }
   ?>

  </tbody>
  <tfoot>
  <tr bgcolor="#EAF4FF">
    <td align="right"></td>
	  <td>..</td>
    <td>..</td>
    <td>..</td>

	<td>..</td>
  </tr>
  </tfoot>
</table></div>
