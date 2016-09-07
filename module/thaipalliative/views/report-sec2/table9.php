<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
?>
<div class="container">
  <h2>ตารางที่ 9 </h2>
  <p>จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค End stage lung diseases </p>
  <table class="table table-hover">
    <thead>
  <tr  bgcolor="#88DDBB">
    <td rowspan="3"><center>ระดับ</center></td>
    <td colspan="4"><center>ทั้งหมด</center></td>
   <td colspan="4" ><center>เฉพาะระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></center></td>
  </tr >
  <tr bgcolor="#92db1e"><td colspan="2"><center>หน่วยบริการ</center>
  <td colspan="2"><center>ผู้ป่วย</center></td>
  <td colspan="2"><center>หน่วยบริการ</center></td>
  <td colspan="2"><center>ผู้ป่วย</center></td>
  </tr>

  <tr bgcolor="#88DDBB">
  <td><center>จำนวน</center></td>
  <td><center>ร้อยละ</center></td>
  <td><center>จำนวน</center></td>
  <td><center>ร้อยละ</center></td>
  <td><center>จำนวน</center></td>
  <td><center>ร้อยละ</center></td>
  <td><center>จำนวน</center></td>
  <td><center>ร้อยละ</center></td>

  </tr>
  </thead>

  <tbody>
  <tr bgcolor="#88DDBB" style="solid 1px ">
  <td >ทั้งหมดใน Palliative Care Cloud</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
  </tr>
  <?php
$totacount=count($dataArrayTable9Zone);
$sumtotalZone=array_sum(array_column($dataArrayTable9Zone, 'total'));
for ($i=0; $i < $totacount; $i++)
  {
   ?>
  <tr>
    <td>เขตสุขภาพที่ <?= $dataArrayTable9Zone[$i][zone_code]  ?></td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
    <td align='right'><?= $dataArrayTable9Zone[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable9Zone[$i][total]/$sumtotalZone)*100,2)  ?></td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
    <td align='right'><?= $dataArrayTable9Zone[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable9Zone[$i][total]/$sumtotalZone)*100,2)  ?></td>
  </tr>
  <?php
}
   ?>
  <tr bgcolor="#96db1e">
    <td >เขตสุขภาพที่เลือกแสดงรายงาน (เขต <?= $dataArrayTable9Province[0][zone_code]  ?>)</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
  </tr>
  <?php
$totacountProvince=count($dataArrayTable9Province);
$sumtotalProvince=array_sum(array_column($dataArrayTable9Province, 'total'));
for ($i=0; $i < $totacountProvince; $i++)
  {
   ?>
  <tr>
    <td ><?= $dataArrayTable9Province[$i][province]  ?></td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
    <td align='right'><?= $dataArrayTable9Province[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable9Province[$i][total]/$sumtotalProvince)*100,2)  ?></td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
    <td align='right'><?= $dataArrayTable9Province[$i][total]  ?></td>
    <td align='right'><?=  number_format(($dataArrayTable9Province[$i][total]/$sumtotalProvince)*100,2)  ?></td>
  </tr>
  <?php
}
   ?>
   </tbody>
  <tfoot>
    <tr>
      <td bgcolor "#84db1e">รวม</td>
       <td align='right'>&nbsp;</td>
       <td align='right'>&nbsp;</td>
       <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
       <td align='right'>&nbsp;</td>
       <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
    </tr>
    </tfoot>
</table>
</div>
