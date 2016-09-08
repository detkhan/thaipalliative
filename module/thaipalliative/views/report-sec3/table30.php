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
        <td colspan="2"><center>Hope</center></td>
       <td colspan="2" ><center>Fear</center></td>
        <td colspan="2" ><center>Unfinished business</center></td>
    	 <td colspan="2"><center>Connected ness </center></td>
       <td colspan="2" ><center>Control helpless</center></td>
        <td colspan="2" ><center>Religious</center></td>
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
      <td align='center'><? $sumhope+=$cancerhope[0][total];echo $cancerhope[0][total] ?></td>
      <td align='center'><? $sumhopepercent+=number_format(($cancerhope[0][total]/$cancerhope[0][sumtotal])*100,2); echo number_format(($cancerhope[0][total]/$cancerhope[0][sumtotal])*100,2) ?></td>
      <td align='center'><? $sumfear+=$cancerfear[0][total];echo $cancerfear[0][total] ?></td>
    	<td align='center'><? $sumfearpercent+=number_format(($cancerfear[0][total]/$cancerfear[0][sumtotal])*100,2); echo number_format(($cancerfear[0][total]/$cancerfear[0][sumtotal])*100,2) ?></td>
    	<td align='center'><? $sumunfinished+=$cancerunfinished[0][total]; echo $cancerunfinished[0][total] ?></td>
    	<td align='center'><? $sumunfinishedpercent+=number_format(($cancerunfinished[0][total]/$cancerunfinished[0][sumtotal])*100,2) ;echo number_format(($cancerunfinished[0][total]/$cancerunfinished[0][sumtotal])*100,2) ?></td>
      <td align='center'><? $sumconnected+=$cancerconnected[0][total];echo $cancerconnected[0][total] ?></td>
      <td align='center'><? $sumconnectedpercent+=number_format(($cancerconnected[0][total]/$cancerconnected[0][sumtotal])*100,2); echo number_format(($cancerconnected[0][total]/$cancerconnected[0][sumtotal])*100,2) ?></td>
      <td align='center'><? $sumcontrol+=$cancercontrol[0][total]; echo $cancercontrol[0][total] ?></td>
      <td align='center'><? $sumcontrolpercent+=number_format(($cancercontrol[0][total]/$cancercontrol[0][sumtotal])*100,2);echo number_format(($cancercontrol[0][total]/$cancercontrol[0][sumtotal])*100,2) ?></td>
      <td align='center'><? $sumreligious+=$cancerreligious[0][total];echo $cancerreligious[0][total] ?></td>
      <td align='center'><? $sumreligiouspercent+=number_format(($cancerreligious[0][total]/$cancerreligious[0][sumtotal])*100,2); echo number_format(($cancerreligious[0][total]/$cancerreligious[0][sumtotal])*100,2) ?></td>
      </tr>
      <!--Renal-->
      <tr>
        <td >End stage renal diseases</td>
        <td align='center'><? $sumhope+=$renalhope[0][total];echo $renalhope[0][total] ?></td>
        <td align='center'><? $sumhopepercent+=number_format(($renalhope[0][total]/$renalhope[0][sumtotal])*100,2); echo number_format(($renalhope[0][total]/$renalhope[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfear+=$renalfear[0][total];echo $renalfear[0][total] ?></td>
      	<td align='center'><? $sumfearpercent+=number_format(($renalfear[0][total]/$renalfear[0][sumtotal])*100,2); echo number_format(($renalfear[0][total]/$renalfear[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumunfinished+=$renalunfinished[0][total]; echo $renalunfinished[0][total] ?></td>
      	<td align='center'><? $sumunfinishedpercent+=number_format(($renalunfinished[0][total]/$renalunfinished[0][sumtotal])*100,2) ;echo number_format(($renalunfinished[0][total]/$renalunfinished[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumconnected+=$renalconnected[0][total];echo $renalconnected[0][total] ?></td>
        <td align='center'><? $sumconnectedpercent+=number_format(($renalconnected[0][total]/$renalconnected[0][sumtotal])*100,2); echo number_format(($renalconnected[0][total]/$renalconnected[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumcontrol+=$renalcontrol[0][total]; echo $renalcontrol[0][total] ?></td>
        <td align='center'><? $sumcontrolpercent+=number_format(($renalcontrol[0][total]/$renalcontrol[0][sumtotal])*100,2);echo number_format(($renalcontrol[0][total]/$renalcontrol[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumreligious+=$renalreligious[0][total];echo $renalreligious[0][total] ?></td>
        <td align='center'><? $sumreligiouspercent+=number_format(($renalreligious[0][total]/$renalreligious[0][sumtotal])*100,2); echo number_format(($renalreligious[0][total]/$renalreligious[0][sumtotal])*100,2) ?></td>
      </tr>
      <tr>
        <td >End stage trauma</td>
        <td align='center'><? $sumhope+=$traumahope[0][total];echo $traumahope[0][total] ?></td>
        <td align='center'><? $sumhopepercent+=number_format(($traumahope[0][total]/$traumahope[0][sumtotal])*100,2); echo number_format(($traumahope[0][total]/$traumahope[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfear+=$traumafear[0][total];echo $traumafear[0][total] ?></td>
      	<td align='center'><? $sumfearpercent+=number_format(($traumafear[0][total]/$traumafear[0][sumtotal])*100,2); echo number_format(($traumafear[0][total]/$traumafear[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumunfinished+=$traumaunfinished[0][total]; echo $traumaunfinished[0][total] ?></td>
      	<td align='center'><? $sumunfinishedpercent+=number_format(($traumaunfinished[0][total]/$traumaunfinished[0][sumtotal])*100,2) ;echo number_format(($traumaunfinished[0][total]/$traumaunfinished[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumconnected+=$traumaconnected[0][total];echo $traumaconnected[0][total] ?></td>
        <td align='center'><? $sumconnectedpercent+=number_format(($traumaconnected[0][total]/$traumaconnected[0][sumtotal])*100,2); echo number_format(($traumaconnected[0][total]/$traumaconnected[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumcontrol+=$traumacontrol[0][total]; echo $traumacontrol[0][total] ?></td>
        <td align='center'><? $sumcontrolpercent+=number_format(($traumacontrol[0][total]/$traumacontrol[0][sumtotal])*100,2);echo number_format(($traumacontrol[0][total]/$traumacontrol[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumreligious+=$traumareligious[0][total];echo $traumareligious[0][total] ?></td>
        <td align='center'><? $sumreligiouspercent+=number_format(($traumareligious[0][total]/$traumareligious[0][sumtotal])*100,2); echo number_format(($traumareligious[0][total]/$traumareligious[0][sumtotal])*100,2) ?></td>

      </tr>
      <tr>
        <td >End stage lung diseases</td>
        <td align='center'><? $sumhope+=$lunghope[0][total];echo $lunghope[0][total] ?></td>
        <td align='center'><? $sumhopepercent+=number_format(($lunghope[0][total]/$lunghope[0][sumtotal])*100,2); echo number_format(($lunghope[0][total]/$lunghope[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfear+=$lungfear[0][total];echo $lungfear[0][total] ?></td>
      	<td align='center'><? $sumfearpercent+=number_format(($lungfear[0][total]/$lungfear[0][sumtotal])*100,2); echo number_format(($lungfear[0][total]/$lungfear[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumunfinished+=$lungunfinished[0][total]; echo $lungunfinished[0][total] ?></td>
      	<td align='center'><? $sumunfinishedpercent+=number_format(($lungunfinished[0][total]/$lungunfinished[0][sumtotal])*100,2) ;echo number_format(($lungunfinished[0][total]/$lungunfinished[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumconnected+=$lungconnected[0][total];echo $lungconnected[0][total] ?></td>
        <td align='center'><? $sumconnectedpercent+=number_format(($lungconnected[0][total]/$lungconnected[0][sumtotal])*100,2); echo number_format(($lungconnected[0][total]/$lungconnected[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumcontrol+=$lungcontrol[0][total]; echo $lungcontrol[0][total] ?></td>
        <td align='center'><? $sumcontrolpercent+=number_format(($lungcontrol[0][total]/$lungcontrol[0][sumtotal])*100,2);echo number_format(($lungcontrol[0][total]/$lungcontrol[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumreligious+=$lungreligious[0][total];echo $lungreligious[0][total] ?></td>
        <td align='center'><? $sumreligiouspercent+=number_format(($lungreligious[0][total]/$lungreligious[0][sumtotal])*100,2); echo number_format(($lungreligious[0][total]/$lungreligious[0][sumtotal])*100,2) ?></td>

      </tr>
       <tr>
        <td >Neurological diseases</td>
        <td align='center'><? $sumhope+=$neurohope[0][total];echo $neurohope[0][total] ?></td>
        <td align='center'><? $sumhopepercent+=number_format(($neurohope[0][total]/$neurohope[0][sumtotal])*100,2); echo number_format(($neurohope[0][total]/$neurohope[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfear+=$neurofear[0][total];echo $neurofear[0][total] ?></td>
      	<td align='center'><? $sumfearpercent+=number_format(($neurofear[0][total]/$neurofear[0][sumtotal])*100,2); echo number_format(($neurofear[0][total]/$neurofear[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumunfinished+=$neurounfinished[0][total]; echo $neurounfinished[0][total] ?></td>
      	<td align='center'><? $sumunfinishedpercent+=number_format(($neurounfinished[0][total]/$neurounfinished[0][sumtotal])*100,2) ;echo number_format(($neurounfinished[0][total]/$neurounfinished[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumconnected+=$neuroconnected[0][total];echo $neuroconnected[0][total] ?></td>
        <td align='center'><? $sumconnectedpercent+=number_format(($neuroconnected[0][total]/$neuroconnected[0][sumtotal])*100,2); echo number_format(($neuroconnected[0][total]/$neuroconnected[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumcontrol+=$neurocontrol[0][total]; echo $neurocontrol[0][total] ?></td>
        <td align='center'><? $sumcontrolpercent+=number_format(($neurocontrol[0][total]/$neurocontrol[0][sumtotal])*100,2);echo number_format(($neurocontrol[0][total]/$neurocontrol[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumreligious+=$neuroreligious[0][total];echo $neuroreligious[0][total] ?></td>
        <td align='center'><? $sumreligiouspercent+=number_format(($neuroreligious[0][total]/$neuroreligious[0][sumtotal])*100,2); echo number_format(($neuroreligious[0][total]/$neuroreligious[0][sumtotal])*100,2) ?></td>
      </tr>
       <tr>
        <td >End stage heart diseases</td>
        <td align='center'><? $sumhope+=$hearthope[0][total];echo $hearthope[0][total] ?></td>
        <td align='center'><? $sumhopepercent+=number_format(($hearthope[0][total]/$hearthope[0][sumtotal])*100,2); echo number_format(($hearthope[0][total]/$hearthope[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfear+=$heartfear[0][total];echo $heartfear[0][total] ?></td>
      	<td align='center'><? $sumfearpercent+=number_format(($heartfear[0][total]/$heartfear[0][sumtotal])*100,2); echo number_format(($heartfear[0][total]/$heartfear[0][sumtotal])*100,2) ?></td>
      	<td align='center'><? $sumunfinished+=$heartunfinished[0][total]; echo $heartunfinished[0][total] ?></td>
      	<td align='center'><? $sumunfinishedpercent+=number_format(($heartunfinished[0][total]/$heartunfinished[0][sumtotal])*100,2) ;echo number_format(($heartunfinished[0][total]/$heartunfinished[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumconnected+=$heartconnected[0][total];echo $heartconnected[0][total] ?></td>
        <td align='center'><? $sumconnectedpercent+=number_format(($heartconnected[0][total]/$heartconnected[0][sumtotal])*100,2); echo number_format(($heartconnected[0][total]/$heartconnected[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumcontrol+=$heartcontrol[0][total]; echo $heartcontrol[0][total] ?></td>
        <td align='center'><? $sumcontrolpercent+=number_format(($heartcontrol[0][total]/$heartcontrol[0][sumtotal])*100,2);echo number_format(($heartcontrol[0][total]/$heartcontrol[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumreligious+=$heartreligious[0][total];echo $heartreligious[0][total] ?></td>
        <td align='center'><? $sumreligiouspercent+=number_format(($heartreligious[0][total]/$heartreligious[0][sumtotal])*100,2); echo number_format(($heartreligious[0][total]/$heartreligious[0][sumtotal])*100,2) ?></td>
      </tr>
      <tr>
        <td >อื่นๆ </td>
        <td align='center'><? $sumhope+=$otherhope[0][total];echo $otherhope[0][total] ?></td>
        <td align='center'><? $sumhopepercent+=number_format(($otherhope[0][total]/$otherhope[0][sumtotal])*100,2); echo number_format(($otherhope[0][total]/$otherhope[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumfear+=$otherfear[0][total];echo $otherfear[0][total] ?></td>
        <td align='center'><? $sumfearpercent+=number_format(($otherfear[0][total]/$otherfear[0][sumtotal])*100,2); echo number_format(($otherfear[0][total]/$otherfear[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumunfinished+=$otherunfinished[0][total]; echo $otherunfinished[0][total] ?></td>
        <td align='center'><? $sumunfinishedpercent+=number_format(($otherunfinished[0][total]/$otherunfinished[0][sumtotal])*100,2) ;echo number_format(($otherunfinished[0][total]/$otherunfinished[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumconnected+=$otherconnected[0][total];echo $otherconnected[0][total] ?></td>
        <td align='center'><? $sumconnectedpercent+=number_format(($otherconnected[0][total]/$otherconnected[0][sumtotal])*100,2); echo number_format(($otherconnected[0][total]/$otherconnected[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumcontrol+=$othercontrol[0][total]; echo $othercontrol[0][total] ?></td>
        <td align='center'><? $sumcontrolpercent+=number_format(($othercontrol[0][total]/$othercontrol[0][sumtotal])*100,2);echo number_format(($othercontrol[0][total]/$othercontrol[0][sumtotal])*100,2) ?></td>
        <td align='center'><? $sumreligious+=$otherreligious[0][total];echo $otherreligious[0][total] ?></td>
        <td align='center'><? $sumreligiouspercent+=number_format(($otherreligious[0][total]/$otherreligious[0][sumtotal])*100,2); echo number_format(($otherreligious[0][total]/$otherreligious[0][sumtotal])*100,2) ?></td>

      </tr>

      </tbody>
      <tfoot style="font-weight:bold;">
      <tr bgcolor="#ecee1c">
      <td align="center">รวมทั้งหมด</td>
    	<td align="center"><? echo $sumhope ?></td>
      <td align="center"><? echo $sumhopepercent ?></td>
      <td align="center"><? echo $sumfear ?></td>
    	<td align="center"><? echo $sumfearpercent ?></td>
    	<td align="center"><? echo $sumunfinished ?></td>
    	<td align="center"><? echo $sumunfinishedpercent ?></td>
    	<td align="center"><? echo $sumconnected ?></td>
      <td align="center"><? echo $sumconnectedpercent ?></td>
      <td align="center"><? echo $sumcontrol ?></td>
    	<td align="center"><? echo $sumcontrolpercent ?></td>
    	<td align="center"><? echo $sumreligious ?></td>
    	<td align="center"><? echo $sumreligiouspercent ?></td>
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
