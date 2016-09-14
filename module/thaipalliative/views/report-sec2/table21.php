<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\VarDumper;

$domain=Url::home();
?>
<div class="table-responsive">
  <h2>ตารางที่ <?= $table  ?></h2>
  <p>จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ <?= $nametable  ?> ปี พ.ศ. 2016</p>
  <table class="table table-hover">
    <thead>
  <tr  bgcolor="#92db1e">
  <td>พื้นที่</td>
    <td>รวม</td>
  <td><40</td>
  <td>40+</td>
  <td>50+</td>
  <td>60+</td>
  <td>70+</td>
  <td>80+</td>



  </tr>

  </thead>
  <tbody>
  <tr bgcolor="#96db1e">
    <td >ทั้งหมดใน Palliative Care Cloud</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>


  </tr>
  <?php
foreach ($dataArrayTable21Zone as $key) {
  $sumsex1=0;
  $sumsex2=0;
  $sumsex1+=$dataarray[$key[zone_code]]['<40'][1];
  $sumsex1+=$dataarray[$key[zone_code]]['40+'][1];
  $sumsex1+=$dataarray[$key[zone_code]]['50+'][1];
  $sumsex1+=$dataarray[$key[zone_code]]['60+'][1];
  $sumsex1+=$dataarray[$key[zone_code]]['70+'][1];
  $sumsex1+=$dataarray[$key[zone_code]]['80+'][1];
  $sumsexall11+=$dataarray[$key[zone_code]]['<40'][1];
  $sumsexall12+=$dataarray[$key[zone_code]]['40+'][1];
  $sumsexall13+=$dataarray[$key[zone_code]]['50+'][1];
  $sumsexall14+=$dataarray[$key[zone_code]]['60+'][1];
  $sumsexall15+=$dataarray[$key[zone_code]]['70+'][1];
  $sumsexall16+=$dataarray[$key[zone_code]]['80+'][1];
  if($sumsex1>0){
    $datasumsex1=$sumsex1;
  }else{
    $datasumsex1='';
  }
  $sumsex2+=$dataarray[$key[zone_code]]['<40'][2];
  $sumsex2+=$dataarray[$key[zone_code]]['40+'][2];
  $sumsex2+=$dataarray[$key[zone_code]]['50+'][2];
  $sumsex2+=$dataarray[$key[zone_code]]['60+'][2];
  $sumsex2+=$dataarray[$key[zone_code]]['70+'][2];
  $sumsex2+=$dataarray[$key[zone_code]]['80+'][2];
  $sumsexall21+=$dataarray[$key[zone_code]]['<40'][2];
  $sumsexall22+=$dataarray[$key[zone_code]]['40+'][2];
  $sumsexall23+=$dataarray[$key[zone_code]]['50+'][2];
  $sumsexall24+=$dataarray[$key[zone_code]]['60+'][2];
  $sumsexall25+=$dataarray[$key[zone_code]]['70+'][2];
  $sumsexall26+=$dataarray[$key[zone_code]]['80+'][2];
  if($sumsex2>0){
    $datasumsex2=$sumsex2;
  }else{
    $datasumsex2='';
  }
  $sumallsex1+=$datasumsex1;
  $sumallsex2+=$datasumsex2;
   ?>
  <tr>
    <td>เขตสุขภาพที่ <?= $key[zone_code] ?></td>
    <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>


  </tr>
  <tr>
    <td align='right'>ชาย</td>
     <td align='right'><?= $datasumsex1  ?></td>
     <td align='right'><?= $dataarray[$key[zone_code]]['<40'][1] ?></td>
     <td align='right'><?= $dataarray[$key[zone_code]]['40+'][1] ?></td>
   <td align='right'><?= $dataarray[$key[zone_code]]['50+'][1] ?></td>
   <td align='right'><?= $dataarray[$key[zone_code]]['60+'][1] ?></td>
     <td align='right'><?= $dataarray[$key[zone_code]]['70+'][1] ?></td>
     <td align='right'><?= $dataarray[$key[zone_code]]['80+'][1] ?></td>


  </tr>
  <tr >
    <td align='right'>หญิง</td>
     <td align='right'><?= $datasumsex2  ?></td>
     <td align='right'><?= $dataarray[$key[zone_code]]['<40'][2] ?></td>
     <td align='right'><?= $dataarray[$key[zone_code]]['40+'][2] ?></td>
   <td align='right'><?= $dataarray[$key[zone_code]]['50+'][2] ?></td>
   <td align='right'><?= $dataarray[$key[zone_code]]['60+'][2] ?></td>
     <td align='right'><?= $dataarray[$key[zone_code]]['70+'][2] ?></td>
     <td align='right'><?= $dataarray[$key[zone_code]]['80+'][2] ?></td>


  </tr>
  <?php
}
   ?>

  <tr>
    <td bgcolor "#84db1e">รวม</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>


  </tr>

  <tr>
    <td align='right'>ชาย</td>
     <td align='right'><?= ($sumallsex1>0)?$sumallsex1:'';  ?></td>
     <td align='right'><?= ($sumsexall11>0)?$sumsexall11:'';  ?></td>
     <td align='right'><?= ($sumsexall12>0)?$sumsexall12:'';  ?></td>
   <td align='right'><?= ($sumsexall13>0)?$sumsexall13:'';  ?></td>
   <td align='right'><?= ($sumsexall14>0)?$sumsexall14:'';  ?></td>
     <td align='right'><?= ($sumsexall15>0)?$sumsexall15:'';  ?></td>
     <td align='right'><?= ($sumsexall16>0)?$sumsexall16:'';  ?></td>


  </tr>
  <tr >
    <td align='right'>หญิง</td>
     <td align='right'><?= ($sumallsex2>0)?$sumallsex2:'';  ?></td>
     <td align='right'><?= ($sumsexall21>0)?$sumsexall21:'';  ?></td>
     <td align='right'><?= ($sumsexall22>0)?$sumsexall22:'';  ?></td>
     <td align='right'><?= ($sumsexall23>0)?$sumsexall23:'';  ?></td>
     <td align='right'><?= ($sumsexall24>0)?$sumsexall24:'';  ?></td>
     <td align='right'><?= ($sumsexall25>0)?$sumsexall25:'';  ?></td>
     <td align='right'><?= ($sumsexall26>0)?$sumsexall26:'';  ?></td>


  </tr>
  <tr bgcolor="#96db1e">
    <td >เขตสุขภาพที่เลือกแสดงรายงาน (เขต <?=  $dataArrayTable21Province[0][zone_code] ?>)</td>
    <td>รวม</td>
  <td><40</td>
  <td>40+</td>
  <td>50+</td>
  <td>60+</td>
  <td>70+</td>
  <td>80+</td>


  </tr>
  <?php
  foreach ($dataArrayTable21Province as $key2) {
  $sum2sex1=0;
  $sum2sex2=0;
  $sum2sex1+=$dataarray2[$key2[provincecode]]['<40'][1];
  $sum2sex1+=$dataarray2[$key2[provincecode]]['40+'][1];
  $sum2sex1+=$dataarray2[$key2[provincecode]]['50+'][1];
  $sum2sex1+=$dataarray2[$key2[provincecode]]['60+'][1];
  $sum2sex1+=$dataarray2[$key2[provincecode]]['70+'][1];
  $sum2sex1+=$dataarray2[$key2[provincecode]]['80+'][1];
  $sum2sexall11+=$dataarray2[$key2[provincecode]]['<40'][1];
  $sum2sexall12+=$dataarray2[$key2[provincecode]]['40+'][1];
  $sum2sexall13+=$dataarray2[$key2[provincecode]]['50+'][1];
  $sum2sexall14+=$dataarray2[$key2[provincecode]]['60+'][1];
  $sum2sexall15+=$dataarray2[$key2[provincecode]]['70+'][1];
  $sum2sexall16+=$dataarray2[$key2[provincecode]]['80+'][1];
  if($sum2sex1>0){
    $datasum2sex1=$sum2sex1;
  }else{
    $datasum2sex1='';
  }
  $sum2sex2+=$dataarray2[$key2[provincecode]]['<40'][2];
  $sum2sex2+=$dataarray2[$key2[provincecode]]['40+'][2];
  $sum2sex2+=$dataarray2[$key2[provincecode]]['50+'][2];
  $sum2sex2+=$dataarray2[$key2[provincecode]]['60+'][2];
  $sum2sex2+=$dataarray2[$key2[provincecode]]['70+'][2];
  $sum2sex2+=$dataarray2[$key2[provincecode]]['80+'][2];
  $sum2sexall21+=$dataarray2[$key2[provincecode]]['<40'][2];
  $sum2sexall22+=$dataarray2[$key2[provincecode]]['40+'][2];
  $sum2sexall23+=$dataarray2[$key2[provincecode]]['50+'][2];
  $sum2sexall24+=$dataarray2[$key2[provincecode]]['60+'][2];
  $sum2sexall25+=$dataarray2[$key2[provincecode]]['70+'][2];
  $sum2sexall26+=$dataarray2[$key2[provincecode]]['80+'][2];
  if($sum2sex2>0){
    $datasum2sex2=$sum2sex2;
  }else{
    $datasum2sex2='';
  }
  $sumall2sex1+=$datasum2sex1;
  $sumall2sex2+=$datasum2sex2;
   ?>
  <tr>
    <td>จังหวัด <?= $key2[province] ?></td>
    <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>


  </tr>
  <tr>
    <td align='right'>ชาย</td>
     <td align='right'><?= $datasum2sex1  ?></td>
     <td align='right'><?= $dataarray2[$key2[provincecode]]['<40'][1] ?></td>
     <td align='right'><?= $dataarray2[$key2[provincecode]]['40+'][1] ?></td>
   <td align='right'><?= $dataarray2[$key2[provincecode]]['50+'][1] ?></td>
   <td align='right'><?= $dataarray2[$key2[provincecode]]['60+'][1] ?></td>
     <td align='right'><?= $dataarray2[$key2[provincecode]]['70+'][1] ?></td>
     <td align='right'><?= $dataarray2[$key2[provincecode]]['80+'][1] ?></td>


  </tr>
  <tr >
    <td align='right'>หญิง</td>
     <td align='right'><?= $datasum2sex2  ?></td>
     <td align='right'><?= $dataarray2[$key2[provincecode]]['<40'][2] ?></td>
     <td align='right'><?= $dataarray2[$key2[provincecode]]['40+'][2] ?></td>
   <td align='right'><?= $dataarray2[$key2[provincecode]]['50+'][2] ?></td>
   <td align='right'><?= $dataarray2[$key2[provincecode]]['60+'][2] ?></td>
     <td align='right'><?= $dataarray2[$key2[provincecode]]['70+'][2] ?></td>
     <td align='right'><?= $dataarray2[$key2[provincecode]]['80+'][2] ?></td>


  </tr>
  <?php
  }
   ?>
  <tr>
    <td>รวมทุกจังหวัด</td>
    <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
   <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>
     <td align='right'>&nbsp;</td>


  </tr>
  <tr>
    <td align='right'>ชาย</td>
     <td align='right'><?= ($sumall2sex1>0)?$sumall2sex1:'';  ?></td>
     <td align='right'><?= ($sum2sexall11>0)?$sum2sexall11:'';  ?></td>
     <td align='right'><?= ($sum2sexall12>0)?$sum2sexall12:'';  ?></td>
   <td align='right'><?= ($sum2sexall13>0)?$sum2sexall13:'';  ?></td>
   <td align='right'><?= ($sum2sexall14>0)?$sum2sexall14:'';  ?></td>
     <td align='right'><?= ($sum2sexall15>0)?$sum2sexall15:'';  ?></td>
     <td align='right'><?= ($sum2sexall16>0)?$sum2sexall16:'';  ?></td>


  </tr>
  <tr >
    <td align='right'>หญิง</td>
     <td align='right'><?= ($sumall2sex2>0)?$sumall2sex2:'';  ?></td>
     <td align='right'><?= ($sum2sexall21>0)?$sum2sexall21:'';  ?></td>
     <td align='right'><?= ($sum2sexall22>0)?$sum2sexall22:'';  ?></td>
     <td align='right'><?= ($sum2sexall23>0)?$sum2sexall23:'';  ?></td>
     <td align='right'><?= ($sum2sexall24>0)?$sum2sexall24:'';  ?></td>
     <td align='right'><?= ($sum2sexall25>0)?$sum2sexall25:'';  ?></td>
     <td align='right'><?= ($sum2sexall26>0)?$sum2sexall26:'';  ?></td>


  </tr>
  </tbody>
  <tfoot>
  <tr bgcolor="#92db1e">
    <td align="right"></td>
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
