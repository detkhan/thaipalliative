<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
?>
<div class="container">
  <h2>ตารางที่ 30</h2>
  <p>จำนวนและร้อยละผู้ป่วย จำแนกตามผลการประเมินด้านจิตวิญญาณ เป็นรายโรค ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
  <table class="table table-bordered">
    <thead>
  <tr>
    <td rowspan="2"><center>โรค</center></td>
    <td colspan="2"><center>ปัญหาเศรษฐกิจ</center></td>
   <td colspan="2" ><center>ปัญหาจิตใจ</center></td>
    <td colspan="2" ><center>ปัญหาสังคม</center></td>
  </tr>
  <tr>
    <td><center>จำนวน</center></td>
    <td><center>ร้อยละ</center></td>
   <td><center>จำนวน</center></td>
    <td><center>ร้อยละ</center></td>
  <td><center>จำนวน</center></td>
    <td><center>ร้อยละ</center></td>
  </tr>
  </thead>
  <tbody>
  <tr >
    <td>Cancer ทุกประเภท</td>
    <td align='right'></td>
    <td align='right'></td>
    <td align='right'></td>
   <td align='right'></td>
   <td align='right'></td>
   <td align='right'></td>


  </tr>
  <tr>
    <td >เฉพาะมะเร็งท่อน้ำดี</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>

  </tr>
  <tr>
    <td >End stage renal diseases</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>

  </tr>
  <tr>
    <td >End stage trauma</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>

  </tr>
  <tr>
    <td >End stage lung diseases</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>

  </tr>
   <tr>
    <td >Neurological diseases</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>

  </tr>
   <tr>
    <td >End stage heart diseases</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>

  </tr>
  <tr>
    <td >อื่นๆ .....................................................</td>
    <td align='right'>&nbsp;</td>
    <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>

  </tr>


  </tbody>
  <tfoot>
  <tr bgcolor="#ecee1c">
    <td align="right">รวมทั้งหมด</td>
    <td>..</td>
    <td>..</td>
    <td>..</td>
    <td>..</td>
    <td>..</td>
    <td>..</td>
  </tr>
  </tfoot>
  </table></div>

  <?php
  $totacount=count($dataArrayTable1);
  for ($i=0; $i < $totacount; $i++)
  {
   ?>
  <tr>

     <td align='right'>จังหวัด</td>
     <td align='right'>จำนวน</td>
     <td align='right'>ร้อยละ</td>
   <td align='right'>จำนวน</td>
   <td align='right'>ร้อยละ</td>
  </tr>
  <?php
  }
   ?>
