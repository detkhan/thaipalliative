<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
?>
<div class="container">
  <h2>ตารางที่ 32 </h2>
  <p>จำนวนและร้อยละผู้ป่วยที่มีการยืมอุปกรณ์การแพทย์ และระยะเวลาที่ยืม
    จำแนกตามประเภทอุปกรณ์ ระหว่าง <b> <ว/ด/ป> ถึง <ว/ด/ป></b></p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <td rowspan="2"><center>การยืมอุปกรณ์</center></td>
        <td colspan="2"><center>จำนวนผู้ป่วย</center></td>
        <td colspan="4" ><center>ระยะเวลาที่ยืม</center></td>
        <tr>
        <td><center>จำนวน</center></td>
        <td><center>ร้อยละ</center></td>
    	  <td><center>Min</center></td>
        <td><center>Max</center></td>
    	  <td><center>Median</center></td>
        <td><center>Mean±SD</center></td>
      </tr>
      </thead>
    <tbody>
      <tr >
        <td>เครื่องผลิตออกซิเจน</td>
        <td align='right'></td>
        <td align='right'></td>
        <td align='right'></td>
    	 <td align='right'></td>
    	 <td align='right'></td>
    	 <td align='right'></td>
      </tr>
      <tr>
        <td >Syringe driver</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
      </tr>
      <tr>
        <td >เตียง</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
      </tr>
      <tr>
        <td >ที่นอนลม</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
      </tr>
      <tr>
        <td >เครื่องพ่นยา</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
      </tr>
       <tr>
        <td >ออกซิเจน tank</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
         <td align='right'>&nbsp;</td>
    	 <td align='right'>&nbsp;</td>
    	 <td align='right'>&nbsp;</td>
    	 <td align='right'>&nbsp;</td>
      </tr>
       <tr>
        <td >เครื่องดูดเสมหะ</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
         <td align='right'>&nbsp;</td>
    	 <td align='right'>&nbsp;</td>
    	 <td align='right'>&nbsp;</td>
    	 <td align='right'>&nbsp;</td>
      </tr>
      <tr>
        <td >Monkey bar</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
        <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
    	  <td align='right'>&nbsp;</td>
      </tr>
       <tr>
        <td >รถเข็น</td>
        <td align='right'>&nbsp;</td>
       <td align='right'>&nbsp;</td>
       <td align='right'>&nbsp;</td>
    	 <td align='right'>&nbsp;</td>
    	 <td align='right'>&nbsp;</td>
    	 <td align='right'>&nbsp;</td>

      </tr>


      </tbody>
      <tfoot>
      <tr>
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
