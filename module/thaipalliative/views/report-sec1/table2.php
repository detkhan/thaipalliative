<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
?>
<div class="container">
  <h2>ตารางที่ 2</h2>
  <p>จำนวนและร้อยละผู้ป่วย ที่ให้บริการโดย<ชื่อหน่วยบริการ> จำแนกตามลักษณะประชากร นำเสนอเป็นค่าจำนวนและร้อยละ เว้นแต่จะระบุเป็นอย่างอื่นในบางรายการ</p>
  <table class="table table-hover">
    <thead>
  <tr  bgcolor="#EAF4FF">
    <td rowspan="2"><center>ลักษณะประชากร</center></td>
    <td colspan="2"><center>ทั้งหมด</center></td>
   <td colspan="2" ><center>เฉพาะระหว่าง
<ว/ด/ป> ถึง <ว/ด/ป></center>
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
  $sumtotal=array_sum(array_column($dataArrayTable2Age, 'total'));
  $mean = $sumtotal/$totacount;
  $arraydata=array_column($dataArrayTable2Age, 'total');
  function sd_square($x, $mean) { return pow($x - $mean,2); }

// Function to calculate standard deviation (uses sd_square)
function sd($array) {
    // square root of sum of squares devided by N-1
    return sqrt(array_sum(array_map("sd_square", $array, array_fill(0,count($array), (array_sum($array) / count($array)) ) ) ) / (count($array)-1) );
}
$sd=number_format(sd($arraydata),2);
  for ($i=0; $i < $totacount; $i++)
    {
   ?>
  <tr>
    <td><?=  $dataArrayTable2Age[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Age[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Age[$i][total]/$sumtotal)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Age[$i][total]  ?></td>
	<td align='right'><?=  number_format(($dataArrayTable2Age[$i][total]/$sumtotal)*100,2)  ?></td>
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
for ($i=0; $i < $totalsex; $i++) {


   ?>
  <tr>
    <td><?=  $dataArrayTable2Sex[$i][sexname]  ?></td>
   <td align='right'><?=  $dataArrayTable2Sex[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Sex[$i][total]/$sumtotalsex)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Sex[$i][total]  ?></td>
	<td align='right'><?=  number_format(($dataArrayTable2Sex[$i][total]/$sumtotalsex)*100,2)  ?></td>
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
  for ($i=0; $i < ($totalMarried-1); $i++) {
     ?>
    <td><?=  $dataArrayTable2Married[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Married[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Married[$i][total]/$sumtotalMarried)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Married[$i][total]  ?></td>
	<td align='right'><?=  number_format(($dataArrayTable2Married[$i][total]/$sumtotalMarried)*100,2)  ?></td>
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
  for ($i=0; $i < ($totalSit-1); $i++) {
   ?>
  <tr>
    <td><?=  $dataArrayTable2Sit[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Sit[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Sit[$i][total]/$sumtotalSit)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Sit[$i][total]  ?></td>
	<td align='right'><?=  number_format(($dataArrayTable2Sit[$i][total]/$sumtotalSit)*100,2)  ?></td>
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
  for ($i=0; $i < ($totalCareer-1); $i++) {
   ?>
  <tr>
    <td><?=  $dataArrayTable2Career[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Career[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Career[$i][total]/$sumtotalCareer)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Career[$i][total]  ?></td>
	<td align='right'><?=  number_format(($dataArrayTable2Career[$i][total]/$sumtotalCareer)*100,2)  ?></td>
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
  for ($i=0; $i < $totalNational; $i++) {

   ?>
  <tr>
    <td><?=  $dataArrayTable2National[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2National[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2National[$i][total]/$sumtotalNational)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2National[$i][total]  ?></td>
	<td align='right'><?=  number_format(($dataArrayTable2National[$i][total]/$sumtotalNational)*100,2)  ?></td>
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
  for ($i=0; $i < $totalNationality; $i++) {

   ?>
  <tr>
    <td><?=  $dataArrayTable2Nationality[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Nationality[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Nationality[$i][total]/$sumtotalNationality)*100,2)  ?></td>
   <td align='right'><?=  $dataArrayTable2Nationality[$i][total]  ?></td>
  <td align='right'><?=  number_format(($dataArrayTable2Nationality[$i][total]/$sumtotalNationality)*100,2)  ?></td>
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
  for ($i=0; $i < $totalReligion; $i++) {

   ?>
  <tr>
    <td><?=  $dataArrayTable2Religion[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Religion[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Religion[$i][total]/$sumtotalReligion)*100,2)  ?></td>
    <td align='right'><?=  $dataArrayTable2Religion[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Religion[$i][total]/$sumtotalReligion)*100,2)  ?></td>
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
  for ($i=0; $i < $totalCongenital; $i++) {

   ?>
  <tr>
    <td><?=  $dataArrayTable2Congenital[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Congenital[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Congenital[$i][total]/$sumtotalCongenital)*100,2)  ?></td>
    <td align='right'><?=  $dataArrayTable2Congenital[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Congenital[$i][total]/$sumtotalCongenital)*100,2)  ?></td>
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
  for ($i=0; $i < $totalHerb; $i++) {

   ?>
  <tr>
    <td><?=  $dataArrayTable2Herb[$i][codename]  ?></td>
    <td align='right'><?=  $dataArrayTable2Herb[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Herb[$i][total]/$sumtotalHerb)*100,2)  ?></td>
    <td align='right'><?=  $dataArrayTable2Herb[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable2Herb[$i][total]/$sumtotalHerb)*100,2)  ?></td>
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
