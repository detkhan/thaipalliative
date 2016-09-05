<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
?>
<script type="text/javascript" src="<?=$domain ?>/jschart/fusioncharts.js"></script>
<script type="text/javascript" src="<?=$domain ?>/jschart/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript">
FusionCharts.ready(function(){
  var fusioncharts = new FusionCharts({
  type: 'pie2d',
  renderAt: 'chart-container',
  width: '100%',
  height: '460',
  dataFormat: 'json',
  dataSource: {
      "chart": {
          "caption": "จำแนกตามกลุ่มโรค",
          "subCaption": "(เปอร์เซ็นต์)",
          "numberPrefix": "จำนวน ",
          "numberSuffix": " คน",
          "showPercentInTooltip": "100%", //All 5286
          "decimals": "1",
          "useDataPlotColorForLabels": "1",

          "theme": "fint"
      },  // tbdata_2 treatment var49
            "data": [
      <?php
foreach ($dataArrayChart2 as $key) {

       ?>
       {
          "label": " <?=  $key[codename] ?>",
          "value": "<?=  $key[total] ?>"
      },
<?php
}
 ?>
]
}
}
);
fusioncharts.render();
});
</script>
<div class="row">
  <div class="col-md-12">
    รูปที่ 2 จำนวนผู้ป่วย เฉพาะระยะที่เรียกแสดงรายงานคือระหว่าง <ว/ด/ป> ถึง <ว/ด/ป>
  <div style="border:1px solid black; width:360px; margin:auto;text-align:center;">
    จำนวนผู้ป่วยทั้งหมดใน Palliative Care Cloud
    <br> N = <?= $totalall ?> คน <!--Data tbdata_1 register -->
  </div><center>
  <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span><br></center>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div style="border:1px solid black; width:360px; margin:auto;text-align:center;">
  จำนวนผู้ป่วยทั้งหมดที่ให้บริการโดย <br>
  โรงพยาบาลศรีนครินทร์
  <br> N = <?= $totalsite ?> คน คิดเป็น <?= $totalpercent ?> %
</div><center>
<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span><br></center>
</div>
<div id="chart-container"></div>
</div>
