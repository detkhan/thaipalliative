<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();

?>
<div class="table-responsive">
  <h2>ตารางที่ 29</h2>
  <p>จำนวนและร้อยละผู้ป่วย จำแนกตามผลการประเมินด้านจิตสังคม เป็นรายโรค ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
  <table class="table table-bordered">
  <tr>
    <td rowspan="2">โรค</td>
    <td colspan="2">ปัญหาเศรษฐกิจ</td>
    <td colspan="2">ปัญหาจิตใจ</td>
    <td colspan="2">ปัญหาสังคม</td>
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
      <!--cancer var49=1 -->
      <td>Cancer ทุกประเภท</td>
      <td align='center'><? $sumbusi+=$cancerbusi[0][total];echo $cancerbusi[0][total] ?></td>
      <td align='center'><? $sumbusipercent+=number_format(($cancerbusi[0][total]/$cancerbusi[0][sumtotal])*100,2); echo number_format(($cancerbusi[0][total]/$cancerbusi[0][sumtotal])*100,2) ?></td>
      <td align='center'><? $sumpfear+=$cancerpfear[0][total];echo $cancerpfear[0][total] ?></td>
    	<td align='center'><? $sumpfearpercent+=number_format(($cancerpfear[0][total]/$cancerpfear[0][sumtotal])*100,2); echo number_format(($cancerpfear[0][total]/$cancerpfear[0][sumtotal])*100,2) ?></td>
    	<td align='center'><? $sumsocial+=$cancersocial[0][total]; echo $cancersocial[0][total] ?></td>
    	<td align='center'><? $sumsocialpercent+=number_format(($cancersocial[0][total]/$cancersocial[0][sumtotal])*100,2) ;echo number_format(($cancersocial[0][total]/$cancersocial[0][sumtotal])*100,2) ?></td>

      </tr>
      <!--Renal-->
      <tr>
        <td >End stage renal diseases</td>
        <td align='center'><? $sumbusi+=$renalbusi[0][total];echo $renalbusi[0][total] ?></td>
        <td align='center'><? $sumbusipercent+=number_format(($renalbusi[0][total]/$renalbusi[0][sumtotal])*100,2); echo number_format(($renalbusi[0][total]/$renalbusi[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpfear+=$renalpfear[0][total];echo $renalpfear[0][total] ?></td>
      	<td align='center'><? $sumpfearpercent+=number_format(($renalpfear[0][total]/$renalpfear[0][sumtotal])*100,2); echo number_format(($renalpfear[0][total]/$renalpfear[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumsocial+=$renalsocial[0][total]; echo $renalsocial[0][total] ?></td>
      	<td align='center'><? $sumsocialpercent+=number_format(($renalsocial[0][total]/$renalsocial[0][sumtotal])*100,2) ;echo number_format(($renalsocial[0][total]/$renalsocial[0][sumtotal])*100,2) ?></td>

      </tr>
      <tr>
        <td >End stage trauma</td>
        <td align='center'><? $sumbusi+=$traumabusi[0][total];echo $traumabusi[0][total] ?></td>
        <td align='center'><? $sumbusipercent+=number_format(($traumabusi[0][total]/$traumabusi[0][sumtotal])*100,2); echo number_format(($traumabusi[0][total]/$traumabusi[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpfear+=$traumapfear[0][total];echo $traumapfear[0][total] ?></td>
      	<td align='center'><? $sumpfearpercent+=number_format(($traumapfear[0][total]/$traumapfear[0][sumtotal])*100,2); echo number_format(($traumapfear[0][total]/$traumapfear[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumsocial+=$traumasocial[0][total]; echo $traumasocial[0][total] ?></td>
      	<td align='center'><? $sumsocialpercent+=number_format(($traumasocial[0][total]/$traumasocial[0][sumtotal])*100,2) ;echo number_format(($traumasocial[0][total]/$traumasocial[0][sumtotal])*100,2) ?></td>

      </tr>
      <tr>
        <td >End stage lung diseases</td>
        <td align='center'><? $sumbusi+=$lungbusi[0][total];echo $lungbusi[0][total] ?></td>
        <td align='center'><? $sumbusipercent+=number_format(($lungbusi[0][total]/$lungbusi[0][sumtotal])*100,2); echo number_format(($lungbusi[0][total]/$lungbusi[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpfear+=$lungpfear[0][total];echo $lungpfear[0][total] ?></td>
      	<td align='center'><? $sumpfearpercent+=number_format(($lungpfear[0][total]/$lungpfear[0][sumtotal])*100,2); echo number_format(($lungpfear[0][total]/$lungpfear[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumsocial+=$lungsocial[0][total]; echo $lungsocial[0][total] ?></td>
      	<td align='center'><? $sumsocialpercent+=number_format(($lungsocial[0][total]/$lungsocial[0][sumtotal])*100,2) ;echo number_format(($lungsocial[0][total]/$lungsocial[0][sumtotal])*100,2) ?></td>

      </tr>
    <tr>
        <td >Neurological diseases</td>
        <td align='center'><? $sumbusi+=$neurobusi[0][total];echo $neurobusi[0][total] ?></td>
        <td align='center'><? $sumbusipercent+=number_format(($neurobusi[0][total]/$neurobusi[0][sumtotal])*100,2); echo number_format(($neurobusi[0][total]/$neurobusi[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpfear+=$neuropfear[0][total];echo $neuropfear[0][total] ?></td>
      	<td align='center'><? $sumpfearpercent+=number_format(($neuropfear[0][total]/$neuropfear[0][sumtotal])*100,2); echo number_format(($neuropfear[0][total]/$neuropfear[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumsocial+=$neurosocial[0][total]; echo $neurosocial[0][total] ?></td>
      	<td align='center'><? $sumsocialpercent+=number_format(($neurosocial[0][total]/$neurosocial[0][sumtotal])*100,2) ;echo number_format(($neurosocial[0][total]/$neurosocial[0][sumtotal])*100,2) ?></td>
    </tr>
       <tr>
        <td >End stage heart diseases</td>
        <td align='center'><? $sumbusi+=$heartbusi[0][total];echo $heartbusi[0][total] ?></td>
        <td align='center'><? $sumbusipercent+=number_format(($heartbusi[0][total]/$heartbusi[0][sumtotal])*100,2); echo number_format(($heartbusi[0][total]/$heartbusi[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpfear+=$heartpfear[0][total];echo $heartpfear[0][total] ?></td>
      	<td align='center'><? $sumpfearpercent+=number_format(($heartpfear[0][total]/$heartpfear[0][sumtotal])*100,2); echo number_format(($heartpfear[0][total]/$heartpfear[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumsocial+=$heartsocial[0][total]; echo $heartsocial[0][total] ?></td>
      	<td align='center'><? $sumsocialpercent+=number_format(($heartsocial[0][total]/$heartsocial[0][sumtotal])*100,2) ;echo number_format(($heartsocial[0][total]/$heartsocial[0][sumtotal])*100,2) ?></td>
    </tr>
      <tr>
        <td >อื่นๆ </td>
        <td align='center'><? $sumbusi+=$otherbusi[0][total];echo $otherbusi[0][total] ?></td>
        <td align='center'><? $sumbusipercent+=number_format(($otherbusi[0][total]/$otherbusi[0][sumtotal])*100,2); echo number_format(($otherbusi[0][total]/$otherbusi[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumpfear+=$otherpfear[0][total];echo $otherpfear[0][total] ?></td>
        <td align='center'><? $sumpfearpercent+=number_format(($otherpfear[0][total]/$otherpfear[0][sumtotal])*100,2); echo number_format(($otherpfear[0][total]/$otherpfear[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumsocial+=$othersocial[0][total]; echo $othersocial[0][total] ?></td>
        <td align='center'><? $sumsocialpercent+=number_format(($othersocial[0][total]/$othersocial[0][sumtotal])*100,2) ;echo number_format(($othersocial[0][total]/$othersocial[0][sumtotal])*100,2) ?></td>
      </tr>

      </tbody>
      <tfoot style="font-weight:bold;">
      <tr>
      <td align="center">รวมทั้งหมด</td>
    	<td align="left" colspan="2"><? echo $sumbusi ?></td>
      <td align="left" colspan="2"><? echo $sumpfear ?></td>
    	<td align="left" colspan="2"><? echo $sumsocial ?></td>


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
