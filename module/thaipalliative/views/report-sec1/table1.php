<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
Yii::$app->formatter->locale = 'th-TH';

$domain=Url::home();
?>
<div class="table-responsive">
  <h2>ตารางที่ 1 </h2>
  <p>จำนวนและร้อยละผู้ป่วย ที่ให้บริการโดย <?=  $data[0][hosname] ?> จำแนกตามจังหวัดที่เป็นภูมิลำเนา</p>
  <table class="table table-hover" width="50%">
    <thead>
  <tr  bgcolor="#EAF4FF">
    <td rowspan="2"><center>จังหวัด</center></td>
    <td colspan="2"><center>ทั้งหมด</center></td>
   <td colspan="2" ><center>เฉพาะระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?> ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></center>
</td>
  </tr>
  <tr bgcolor="#EAF4FF">
    <td><center>จำนวน</center></td>
    <td><center>ร้อยละ</center></td>
	 <td><center>จำนวน</center></td>
    <td><center>ร้อยละ</center></td>
  </tr>
  </tbody>
<tbody>
  <?php
$totacount=count($dataArrayTable1);
$sumtotaldata=$sumtotal[0][sumtotal];
for ($i=0; $i < $totacount; $i++)
  {
    $total+=$dataArrayTable1[$i][total];
    $percent+=number_format(($dataArrayTable1[$i][total]/$sumtotaldata)*100,2);
   ?>
  <tr>

     <td align='right'><?=  $dataArrayTable1[$i][province]  ?></td>
     <td align='right'><?=  $dataArrayTable1[$i][total]  ?></td>
     <td align='right'><?=  number_format(($dataArrayTable1[$i][total]/$sumtotaldata)*100,2)  ?></td>
	 <td align='right'><?=  $dataArrayTable1[$i][total]  ?></td>
	 <td align='right'><?=  number_format(($dataArrayTable1[$i][total]/$sumtotaldata)*100,2)  ?></td>
  </tr>
  <?php
}
   ?>
  </tbody>
  <tfoot>
  <tr bgcolor="#EAF4FF">
    <td align="right">รวม</td>
	  <td><?= $total ?></td>
    <td><?= $percent ?></td>
    <td><?= $total ?></td>
	  <td><?= $percent ?></td>
  </tr>
  </tfoot>
</table></div>
