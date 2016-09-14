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
      <!--  <td colspan="4" ><center>ระยะเวลาที่ยืม</center></td> -->
        <tr>
        <td><center>จำนวน</center></td>
        <td><center>ร้อยละ</center></td>
    <!--	  <td><center>Min</center></td>
        <td><center>Max</center></td>
    	  <td><center>Median</center></td>
        <td><center>Mean±SD</center></td> -->
      </tr>
      </thead>
    <tbody>
      <tr >
        <td>เครื่องผลิตออกซิเจน</td>
        <td align='center'><? $sum +=$dataArrayTable32Oxigen[0][total];echo $dataArrayTable32Oxigen[0][total] ?></td>
        <td align='center'><? $sumpercent += number_format(($dataArrayTable32Oxigen[0][total]/$dataArrayTable32Oxigen[0][total])*100,2); echo number_format(($dataArrayTable32Oxigen[0][total]/$dataArrayTable32Oxigen[0][total])*100,2)  ?> </td>
      <!--  <td align='center'></td>
    	  <td align='center'></td>
    	  <td align='center'></td>
    	  <td align='center'></td> -->
      </tr>
      <tr>
        <td>Syringe driver</td>
        <td align='center'><? $sum += $dataArrayTable32Syring[0][total]; echo $dataArrayTable32Syring[0][total] ?></td>
        <td align='center'><? $sumpercent += number_format(($dataArrayTable32Syring[0][total]/$dataArrayTable32Syring[0][total])*100,2); echo number_format(($dataArrayTable32Syring[0][total]/$dataArrayTable32Syring[0][total])*100,2)  ?></td>
        <!--  <td align='center'></td>
      	  <td align='center'></td>
      	  <td align='center'></td>
      	  <td align='center'></td> -->
      </tr>
      <tr>
        <td>เตียง</td>
        <td align='center'><? $sum += $dataArrayTable32Bed[0][total]; echo $dataArrayTable32Bed[0][total] ?></td>
        <td align='center'><? $sumpercent += number_format(($dataArrayTable32Bed[0][total]/$dataArrayTable32Bed[0][total])*100,2);echo number_format(($dataArrayTable32Bed[0][total]/$dataArrayTable32Bed[0][total])*100,2) ?></td>
        <!--  <td align='center'></td>
      	  <td align='center'></td>
      	  <td align='center'></td>
      	  <td align='center'></td> -->
      </tr>
      <tr>
        <td>เครื่องพ่นยา</td>
        <td align='center'><? $sum += $dataArrayTable32Pdrug[0][total]; echo $dataArrayTable32Pdrug[0][total] ?></td>
        <td align='center'><? $sumpercent += number_format(($dataArrayTable32Pdrug[0][total]/$dataArrayTable32Pdrug[0][total])*100,2);echo number_format(($dataArrayTable32Pdrug[0][total]/$dataArrayTable32Pdrug[0][total])*100,2) ?></td>
        <!--  <td align='center'></td>
          <td align='center'></td>
          <td align='center'></td>
          <td align='center'></td> -->
      </tr>
      <tr>
        <td>ออกซิเจน tank</td>
        <td align='center'><? $sum += $dataArrayTable32Tank[0][total]; echo $dataArrayTable32Tank[0][total] ?></td>
        <td align='center'><? $sumpercent += number_format(($dataArrayTable32Tank[0][total]/$dataArrayTable32Tank[0][total])*100,2); echo number_format(($dataArrayTable32Tank[0][total]/$dataArrayTable32Tank[0][total])*100,2)?></td>
        <!--  <td align='center'></td>
      	  <td align='center'></td>
      	  <td align='center'></td>
      	  <td align='center'></td> -->
      </tr>

       <tr>
        <td>เครื่องดูดเสมหะ</td>
        <td align='center'><? $sum += $dataArrayTable32Suction[0][total]; echo $dataArrayTable32Suction[0][total] ?></td>
        <td align='center'><? $sumpercent += number_format(($dataArrayTable32Suction[0][total]/$dataArrayTable32Suction[0][total])*100,2); echo number_format(($dataArrayTable32Suction[0][total]/$dataArrayTable32Suction[0][total])*100,2) ?> </td>
        <!--  <td align='center'></td>
      	  <td align='center'></td>
      	  <td align='center'></td>
      	  <td align='center'></td> -->
      </tr>
      <tr>
        <td >Monkey bar</td>
        <td align='center'><? $sum += $dataArrayTable32Monkeybar[0][total]; echo $dataArrayTable32Monkeybar[0][total]  ?></td>
        <td align='center'><? $sumpercent += number_format(($dataArrayTable32Monkeybar[0][total]/$dataArrayTable32Monkeybar[0][total])*100,2); echo number_format(($dataArrayTable32Monkeybar[0][total]/$dataArrayTable32Monkeybar[0][total])*100,2) ?></td>
        <!--  <td align='center'></td>
      	  <td align='center'></td>
      	  <td align='center'></td>
      	  <td align='center'></td> -->
      </tr>
       <tr>
        <td >รถเข็น</td>
      <td align='center'><? $sum += $dataArrayTable32Wheels[0][total]; echo $dataArrayTable32Wheels[0][total] ?></td>
      <td align='center'><? $sumpercent += number_format(($dataArrayTable32Wheels[0][total]/$dataArrayTable32Wheels[0][total])*100,2); echo number_format(($dataArrayTable32Wheels[0][total]/$dataArrayTable32Wheels[0][total])*100,2) ?></td>
      <!--  <td align='center'></td>
    	  <td align='center'></td>
    	  <td align='center'></td>
    	  <td align='center'></td> -->

      </tr>


      </tbody>
      <tfoot bgcolor="lightblue">
      <tr>
        <td>รวมทั้งหมด</td>
    	  <td><?= $sum ?></td>
        <td align='center'></td>
    <!-- <td align='center'></td>
      	<td align='center'></td>
      	<td align='center'></td> -->
      </tr>
      </tfoot>
    </table>
  </div>
  <?php
  $totacount=count($dataArrayTable32);
  for ($i=0; $i < $totacount; $i++)
  {
   ?>

  <?php
  }
   ?>
