<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
?>
<div class="table-responsive">
  <h2>ตารางที่ <?= $table  ?></h2>
  <p>จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน <?= $nametable  ?> ปี พ.ศ. 2016</p>
  <table class="table table-bordered">
    <thead>
  <tr  bgcolor="#92db1e">
  <td>พื้นที่</td>
  <td>ม.ค.</td>
	<td>ก.พ.</td>
	<td>มี.ค.</td>
	<td>เม.ย.</td>
	<td>พ.ค.</td>
	<td>มิ.ย.</td>
	<td>ก.ค.</td>
	<td>ส.ค.</td>
	<td>ก.ย.</td>
	<td>ต.ค.</td>
	<td>พ.ย.</td>
	<td>ธ.ค.</td>


  </tr>

  </thead>
<tbody>
  <tr bgcolor="#96db1e">
    <td >ทั้งหมดใน Palliative Care Cloud</td>
     <td align='center'>&nbsp;</td>
     <td align='center'>&nbsp;</td>
     <td align='center'>&nbsp;</td>
	 <td align='center'>&nbsp;</td>
	 <td align='center'>&nbsp;</td>
     <td align='center'>&nbsp;</td>
     <td align='center'>&nbsp;</td>
	 <td align='center'>&nbsp;</td>
	  <td align='center'>&nbsp;</td>
     <td align='center'>&nbsp;</td>
	 <td align='center'>&nbsp;</td>
	 <td align='center'>&nbsp;</td>
  </tr>
  <?php
foreach ($dataArrayTable13Zone as $key2) {
  for ($i=1; $i < 13; $i++) {
    if ($dataArrayMonthZone[$key2[zone_code]][$i]>0) {
    $sum[$i]+=$dataArrayMonthZone[$key2[zone_code]][$i];
    }
  }
   ?>
  <tr>
    <td>เขตสุขภาพที่ <?= $key2[zone_code] ?></td>
    <?php
for ($i=1; $i < 13; $i++) {
     ?>
    <td align='center'><?= $dataArrayMonthZone[$key2[zone_code]][$i] ?></td>
<?php
}
 ?>
  </tr>
  <?php
}
   ?>
  <tr>
    <td bgcolor "#84db1e">รวม</td>
    <?php
for ($i=1; $i < 13; $i++) {
     ?>
     <td align='center'><?= $sum[$i] ?></td>
     <?php
     }
      ?>
  </tr>
  <tr bgcolor="#96db1e">
    <td >เขตสุขภาพที่เลือกแสดงรายงาน (เขต <?= $dataArrayTable13Province[0][zone_code] ?>)</td>
    <td>ม.ค.</td>
	<td>ก.พ.</td>
	<td>มี.ค.</td>
	<td>เม.ย.</td>
	<td>พ.ค.</td>
	<td>มิ.ย.</td>
	<td>ก.ค.</td>
	<td>ส.ค.</td>
	<td>ก.ย.</td>
	<td>ต.ค.</td>
	<td>พ.ย.</td>
	<td>ธ.ค.</td>
  </tr>
  <?php
foreach ($dataArrayTable13Province as $key) {

   ?>
  <tr>
    <td>จังหวัด <?= $key[province] ?></td>
    <?php
for ($i=1; $i < 13; $i++) {
     ?>
    <td align='center'><?= $dataArrayMonthProvince[$key[provincecode]][$i] ?></td>
<?php
    }
     ?>
  </tr>
<?php
}
 ?>
  </tbody>
  <tfoot>
  <tr bgcolor="#92db1e">
    <td align="center"></td>
	  <td>..</td>
    <td>..</td>
    <td>..</td>

	<td>..</td>
	 <td>..</td>
    <td>..</td>
    <td>..</td>

	<td>..</td>
	<td>..</td>
    <td>..</td>

	<td>..</td>
	<td>..</td>
  </tr>
  </tfoot>
</table>
</div>
