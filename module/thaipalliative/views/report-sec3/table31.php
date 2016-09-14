<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
?>
<div class="table-responsive">
  <h2>ตารางที่ 31</h2>
  <p>จำนวนและร้อยละผู้ป่วย จำแนกตามผลการประเมินด้านความรับรู้และการมีส่วนร่วมในการตัดสินใจ เป็นรายโรค ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <td rowspan="3"><center>โรค</center></td>
        <td colspan="4"><center>การรับรู้โรค</center></td>
        <td colspan="4" ><center>การรับรู้พยากรณ์โรค</center></td>
    	  <td colspan="4"><center>เป้าหมายการรักษา</center></td>

      </tr>
       <tr>
      <td colspan="2"><center>ผู้ป่วยรู้</center></td>
      <td colspan="2"><center>ญาติรู้</center></td>
    	<td colspan="2"><center>ผู้ป่วยรู้</center></td>
      <td colspan="2"><center>ญาติรู้</center></td>
    	<td colspan="2"><center>ผู้ป่วยรู้</center></td>
      <td colspan="2"><center>ญาติรู้</center></td>
      </tr>
      <tr>
      <td><center>n</center></td>
      <td><center>%</center></td>
    	<td><center>n</center></td>
      <td><center>%</center></td>
    	<td><center>n</center></td>
      <td><center>%</center></td>
    	<td><center>n</center></td>
      <td><center>%</center></td>
    	<td><center>n</center></td>
      <td><center>%</center></td>
    	<td><center>n</center></td>
      <td><center>%</center></td>
    </tr>
    </thead>
    <tbody>
    <tr >
      <!--cancer var49=1 -->
      <td>Cancer ทุกประเภท</td>
      <td align='center'><? $sumpt31+=$cancerpt31[0][total];echo $cancerpt31[0][total] ?></td>
      <td align='center'><? $sumpt31percent+=number_format(($cancerpt31[0][total]/$cancerpt31[0][sumtotal])*100,2); echo number_format(($cancerpt31[0][total]/$cancerpt31[0][sumtotal])*100,2) ?></td>
      <td align='center'><? $sumfamily+=$cancerfamily31[0][total];echo $cancerfamily31[0][total] ?></td>
    	<td align='center'><? $sumfamilypercent+=number_format(($cancerfamily31[0][total]/$cancerfamily31[0][sumtotal])*100,2); echo number_format(($cancerfamily31[0][total]/$cancerfamily31[0][sumtotal])*100,2) ?></td>
    	<td align='center'><? $sumpd31+=$cancerpd31[0][total]; echo $cancerpd31[0][total] ?></td>
    	<td align='center'><? $sumpd31percent+=number_format(($cancerpd31[0][total]/$cancerpd31[0][sumtotal])*100,2) ;echo number_format(($cancerpd31[0][total]/$cancerpd31[0][sumtotal])*100,2) ?></td>
      <td align='center'><? $sumpdfamily31+=$cancerpdfamily31[0][total];echo $cancerpdfamily31[0][total] ?></td>
      <td align='center'><? $sumpdfamily31percent+=number_format(($cancerpdfamily31[0][total]/$cancerpdfamily31[0][sumtotal])*100,2); echo number_format(($cancerpdfamily31[0][total]/$cancerpdfamily31[0][sumtotal])*100,2) ?></td>
      <td align='center'><? $sumtarget31+=$cancertarget31[0][total]; echo $cancertarget31[0][total] ?></td>
      <td align='center'><? $sumtarget31percent+=number_format(($cancertarget31[0][total]/$cancertarget31[0][sumtotal])*100,2);echo number_format(($cancertarget31[0][total]/$cancertarget31[0][sumtotal])*100,2) ?></td>
      <td align='center'><? $sumtargetf31+=$cancertargetf31[0][total];echo $cancertargetf31[0][total] ?></td>
      <td align='center'><? $sumtargetf31percent+=number_format(($cancertargetf31[0][total]/$cancertargetf31[0][sumtotal])*100,2); echo number_format(($cancertargetf31[0][total]/$cancertargetf31[0][sumtotal])*100,2) ?></td>
      </tr>
      <!--Renal-->
      <tr>
        <td >End stage renal diseases</td>
        <td align='center'><? $sumpt31+=$renalpt31[0][total];echo $renalpt31[0][total] ?></td>
        <td align='center'><? $sumpt31percent+=number_format(($renalpt31[0][total]/$renalpt31[0][sumtotal])*100,2); echo number_format(($renalpt31[0][total]/$renalpt31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfamily31+=$renalfamily31[0][total];echo $renalfamily31[0][total] ?></td>
      	<td align='center'><? $sumfamily31percent+=number_format(($renalfamily31[0][total]/$renalfamily31[0][sumtotal])*100,2); echo number_format(($renalfamily31[0][total]/$renalfamily31[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumpd31+=$renalpd31[0][total]; echo $renalpd31[0][total] ?></td>
      	<td align='center'><? $sumpd31percent+=number_format(($renalpd31[0][total]/$renalpd31[0][sumtotal])*100,2) ;echo number_format(($renalpd31[0][total]/$renalpd31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpdfamily31+=$renalpdfamily31[0][total];echo $renalpdfamily31[0][total] ?></td>
        <td align='center'><? $sumpdfamily31percent+=number_format(($renalpdfamily31[0][total]/$renalpdfamily31[0][sumtotal])*100,2); echo number_format(($renalpdfamily31[0][total]/$renalpdfamily31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtarget31+=$renaltarget31[0][total]; echo $renaltarget31[0][total] ?></td>
        <td align='center'><? $sumtarget31percent+=number_format(($renaltarget31[0][total]/$renaltarget31[0][sumtotal])*100,2);echo number_format(($renaltarget31[0][total]/$renaltarget31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtargetf31+=$renaltargetf31[0][total];echo $renaltargetf31[0][total] ?></td>
        <td align='center'><? $sumtargetf31percent+=number_format(($renaltargetf31[0][total]/$renaltargetf31[0][sumtotal])*100,2); echo number_format(($renaltargetf31[0][total]/$renaltargetf31[0][sumtotal])*100,2) ?></td>
      </tr>
      <tr>
        <td >End stage trauma</td>
        <td align='center'><? $sumpt31+=$traumapt31[0][total];echo $traumapt31[0][total] ?></td>
        <td align='center'><? $sumpt31percent+=number_format(($traumapt31[0][total]/$traumapt31[0][sumtotal])*100,2); echo number_format(($traumapt31[0][total]/$traumapt31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfamily31+=$traumafamily31[0][total];echo $traumafamily31[0][total] ?></td>
      	<td align='center'><? $sumfamily31percent+=number_format(($traumafamily31[0][total]/$traumafamily31[0][sumtotal])*100,2); echo number_format(($traumafamily31[0][total]/$traumafamily31[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumpd31+=$traumapd31[0][total]; echo $traumapd31[0][total] ?></td>
      	<td align='center'><? $sumpd31percent+=number_format(($traumapd31[0][total]/$traumapd31[0][sumtotal])*100,2) ;echo number_format(($traumapd31[0][total]/$traumapd31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpdfamily31+=$traumapdfamily31[0][total];echo $traumapdfamily31[0][total] ?></td>
        <td align='center'><? $sumpdfamily31percent+=number_format(($traumapdfamily31[0][total]/$traumapdfamily31[0][sumtotal])*100,2); echo number_format(($traumapdfamily31[0][total]/$traumapdfamily31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtarget31+=$traumatarget31[0][total]; echo $traumatarget31[0][total] ?></td>
        <td align='center'><? $sumtarget31percent+=number_format(($traumatarget31[0][total]/$traumatarget31[0][sumtotal])*100,2);echo number_format(($traumatarget31[0][total]/$traumatarget31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtargetf31+=$traumatargetf31[0][total];echo $traumatargetf31[0][total] ?></td>
        <td align='center'><? $sumtargetf31percent+=number_format(($traumatargetf31[0][total]/$traumatargetf31[0][sumtotal])*100,2); echo number_format(($traumatargetf31[0][total]/$traumatargetf31[0][sumtotal])*100,2) ?></td>

      </tr>
      <tr>
        <td >End stage lung diseases</td>
        <td align='center'><? $sumpt31+=$lungpt31[0][total];echo $lungpt31[0][total] ?></td>
        <td align='center'><? $sumpt31percent+=number_format(($lungpt31[0][total]/$lungpt31[0][sumtotal])*100,2); echo number_format(($lungpt31[0][total]/$lungpt31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfamily31+=$lungfamily31[0][total];echo $lungfamily31[0][total] ?></td>
      	<td align='center'><? $sumfamily31percent+=number_format(($lungfamily31[0][total]/$lungfamily31[0][sumtotal])*100,2); echo number_format(($lungfamily31[0][total]/$lungfamily31[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumpd31+=$lungpd31[0][total]; echo $lungpd31[0][total] ?></td>
      	<td align='center'><? $sumpd31percent+=number_format(($lungpd31[0][total]/$lungpd31[0][sumtotal])*100,2) ;echo number_format(($lungpd31[0][total]/$lungpd31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpdfamily31+=$lungpdfamily31[0][total];echo $lungpdfamily31[0][total] ?></td>
        <td align='center'><? $sumpdfamily31percent+=number_format(($lungpdfamily31[0][total]/$lungpdfamily31[0][sumtotal])*100,2); echo number_format(($lungpdfamily31[0][total]/$lungpdfamily31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtarget31+=$lungtarget31[0][total]; echo $lungtarget31[0][total] ?></td>
        <td align='center'><? $sumtarget31percent+=number_format(($lungtarget31[0][total]/$lungtarget31[0][sumtotal])*100,2);echo number_format(($lungtarget31[0][total]/$lungtarget31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtargetf31+=$lungtargetf31[0][total];echo $lungtargetf31[0][total] ?></td>
        <td align='center'><? $sumtargetf31percent+=number_format(($lungtargetf31[0][total]/$lungtargetf31[0][sumtotal])*100,2); echo number_format(($lungtargetf31[0][total]/$lungtargetf31[0][sumtotal])*100,2) ?></td>

      </tr>
       <tr>
        <td >Neurological diseases</td>
        <td align='center'><? $sumpt31+=$neuropt31[0][total];echo $neuropt31[0][total] ?></td>
        <td align='center'><? $sumpt31percent+=number_format(($neuropt31[0][total]/$neuropt31[0][sumtotal])*100,2); echo number_format(($neuropt31[0][total]/$neuropt31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfamily31+=$neurofamily31[0][total];echo $neurofamily31[0][total] ?></td>
      	<td align='center'><? $sumfamily31percent+=number_format(($neurofamily31[0][total]/$neurofamily31[0][sumtotal])*100,2); echo number_format(($neurofamily31[0][total]/$neurofamily31[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumpd31+=$neuropd31[0][total]; echo $neuropd31[0][total] ?></td>
      	<td align='center'><? $sumpd31percent+=number_format(($neuropd31[0][total]/$neuropd31[0][sumtotal])*100,2) ;echo number_format(($neuropd31[0][total]/$neuropd31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpdfamily31+=$neuropdfamily31[0][total];echo $neuropdfamily31[0][total] ?></td>
        <td align='center'><? $sumpdfamily31percent+=number_format(($neuropdfamily31[0][total]/$neuropdfamily31[0][sumtotal])*100,2); echo number_format(($neuropdfamily31[0][total]/$neuropdfamily31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtarget31+=$neurotarget31[0][total]; echo $neurotarget31[0][total] ?></td>
        <td align='center'><? $sumtarget31percent+=number_format(($neurotarget31[0][total]/$neurotarget31[0][sumtotal])*100,2);echo number_format(($neurotarget31[0][total]/$neurotarget31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtargetf31+=$neurotargetf31[0][total];echo $neurotargetf31[0][total] ?></td>
        <td align='center'><? $sumtargetf31percent+=number_format(($neurotargetf31[0][total]/$neurotargetf31[0][sumtotal])*100,2); echo number_format(($neurotargetf31[0][total]/$neurotargetf31[0][sumtotal])*100,2) ?></td>
      </tr>
       <tr>
        <td >End stage heart diseases</td>
        <td align='center'><? $sumpt31+=$heartpt31[0][total];echo $heartpt31[0][total] ?></td>
        <td align='center'><? $sumpt31percent+=number_format(($heartpt31[0][total]/$heartpt31[0][sumtotal])*100,2); echo number_format(($heartpt31[0][total]/$heartpt31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfamily31+=$heartfamily31[0][total];echo $heartfamily31[0][total] ?></td>
      	<td align='center'><? $sumfamily31percent+=number_format(($heartfamily31[0][total]/$heartfamily31[0][sumtotal])*100,2); echo number_format(($heartfamily31[0][total]/$heartfamily31[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumpd31+=$heartpd31[0][total]; echo $heartpd31[0][total] ?></td>
      	<td align='center'><? $sumpd31percent+=number_format(($heartpd31[0][total]/$heartpd31[0][sumtotal])*100,2) ;echo number_format(($heartpd31[0][total]/$heartpd31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpdfamily31+=$heartpdfamily31[0][total];echo $heartpdfamily31[0][total] ?></td>
        <td align='center'><? $sumpdfamily31percent+=number_format(($heartpdfamily31[0][total]/$heartpdfamily31[0][sumtotal])*100,2); echo number_format(($heartpdfamily31[0][total]/$heartpdfamily31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtarget31+=$hearttarget31[0][total]; echo $hearttarget31[0][total] ?></td>
        <td align='center'><? $sumtarget31percent+=number_format(($hearttarget31[0][total]/$hearttarget31[0][sumtotal])*100,2);echo number_format(($hearttarget31[0][total]/$hearttarget31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtargetf31+=$hearttargetf31[0][total];echo $hearttargetf31[0][total] ?></td>
        <td align='center'><? $sumtargetf31percent+=number_format(($hearttargetf31[0][total]/$hearttargetf31[0][sumtotal])*100,2); echo number_format(($hearttargetf31[0][total]/$hearttargetf31[0][sumtotal])*100,2) ?></td>
      </tr>
      <tr>
        <td >อื่นๆ</td>
        <td align='center'><? $sumpt31+=$otherpt31[0][total];echo $otherpt31[0][total] ?></td>
        <td align='center'><? $sumpt31percent+=number_format(($otherpt31[0][total]/$otherpt31[0][sumtotal])*100,2); echo number_format(($otherpt31[0][total]/$otherpt31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfamily31+=$otherfamily31[0][total];echo $otherfamily31[0][total] ?></td>
        <td align='center'><? $sumfamily31percent+=number_format(($otherfamily31[0][total]/$otherfamily31[0][sumtotal])*100,2); echo number_format(($otherfamily31[0][total]/$otherfamily31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpd31+=$otherpd31[0][total]; echo $otherpd31[0][total] ?></td>
        <td align='center'><? $sumpd31percent+=number_format(($otherpd31[0][total]/$otherpd31[0][sumtotal])*100,2) ;echo number_format(($otherpd31[0][total]/$otherpd31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpdfamily31+=$otherpdfamily31[0][total];echo $otherpdfamily31[0][total] ?></td>
        <td align='center'><? $sumpdfamily31percent+=number_format(($otherpdfamily31[0][total]/$otherpdfamily31[0][sumtotal])*100,2); echo number_format(($otherpdfamily31[0][total]/$otherpdfamily31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtarget31+=$othertarget31[0][total]; echo $othertarget31[0][total] ?></td>
        <td align='center'><? $sumtarget31percent+=number_format(($othertarget31[0][total]/$othertarget31[0][sumtotal])*100,2);echo number_format(($othertarget31[0][total]/$othertarget31[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumtargetf31+=$othertargetf31[0][total];echo $othertargetf31[0][total] ?></td>
        <td align='center'><? $sumtargetf31percent+=number_format(($othertargetf31[0][total]/$othertargetf31[0][sumtotal])*100,2); echo number_format(($othertargetf31[0][total]/$othertargetf31[0][sumtotal])*100,2) ?></td>

      </tr>

      </tbody>
      <tfoot style="font-weight:bold;">
      <tr bgcolor="#ecee1c">
      <td align="center">รวมทั้งหมด</td>
    	<td align="center"><? echo $sumpt31 ?></td>
      <td align="center"><? //echo $sumpt31percent ?></td>
      <td align="center"><? echo $sumfamily31 ?></td>
    	<td align="center"><? //echo $sumfamily31percent ?></td>
    	<td align="center"><? echo $sumpd31 ?></td>
    	<td align="center"><? //echo $sumpd31percent ?></td>
    	<td align="center"><? echo $sumpdfamily31 ?></td>
      <td align="center"><? //echo $sumpdfamily31percent ?></td>
      <td align="center"><? echo $sumtarget31 ?></td>
    	<td align="center"><? //echo $sumtarget31percent ?></td>
    	<td align="center"><? echo $sumtargetf31 ?></td>
    	<td align="center"><? //echo $sumtargetf31percent ?></td>
      </tr>
      </tfoot>
    </table>
  </div>

  <?php
  $totacount=count($dataArrayTable1);
  for ($i=0; $i < $totacount; $i++)
  {
   ?>

  <?php
  }
   ?>
