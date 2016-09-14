<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
?>
<div class="table-responsive">
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
        <td align='center'></td>
        <td align='center'></td>
        <td align='center'></td>
    	 <td align='center'></td>
    	 <td align='center'></td>
    	 <td align='center'></td>
      </tr>
      <tr>
        <td >Syringe driver</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
      </tr>
      <tr>
        <td >เตียง</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
      </tr>
      <tr>
        <td >ที่นอนลม</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
      </tr>
      <tr>
        <td >เครื่องพ่นยา</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
      </tr>
       <tr>
        <td >ออกซิเจน tank</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
         <td align='center'>&nbsp;</td>
    	 <td align='center'>&nbsp;</td>
    	 <td align='center'>&nbsp;</td>
    	 <td align='center'>&nbsp;</td>
      </tr>
       <tr>
        <td >เครื่องดูดเสมหะ</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
         <td align='center'>&nbsp;</td>
    	 <td align='center'>&nbsp;</td>
    	 <td align='center'>&nbsp;</td>
    	 <td align='center'>&nbsp;</td>
      </tr>
      <tr>
        <td >Monkey bar</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
        <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
    	  <td align='center'>&nbsp;</td>
      </tr>
       <tr>
        <td >รถเข็น</td>
        <td align='center'>&nbsp;</td>
       <td align='center'>&nbsp;</td>
       <td align='center'>&nbsp;</td>
    	 <td align='center'>&nbsp;</td>
    	 <td align='center'>&nbsp;</td>
    	 <td align='center'>&nbsp;</td>

      </tr>


      </tbody>
      <tfoot>
      <tr>
        <td align="center">รวมทั้งหมด</td>
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
