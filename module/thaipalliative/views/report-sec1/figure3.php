<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
Yii::$app->formatter->locale = 'th-TH';

$domain=Url::home();
?>
<script type="text/javascript" src="<?=$domain ?>/jschart/fusioncharts.js"></script>
<script type="text/javascript" src="<?=$domain ?>/jschart/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript">
FusionCharts.ready(function(){
  var fusioncharts = new FusionCharts({
  type: 'msline',
  renderAt: 'chart-container',
  width: '100%',
  height: '460',
  dataFormat: 'json',
  dataSource: {
       "chart": {
      "caption": "จำนวนผู้ป่วย จำแนกตามรายปี ของ <?=  $data[0][hosname] ?>",
      "numberprefix": "",
      "plotgradientcolor": "",
      "bgcolor": "FFFFFF",

      "showalternatehgridcolor": "0",
      "divlinecolor": "CCCCCC",
      "showvalues": "1",
      "showcanvasborder": "0",
      "canvasborderalpha": "0",
      "canvasbordercolor": "CCCCCC",
      "canvasborderthickness": "0",
      "yaxismaxvalue": "1000",
      "captionpadding": "30",
      "linethickness": "10",
      "yaxisvaluespadding": "15",
      "legendshadow": "0",
      "legendborderalpha": "0",
      "palettecolors": "#f8bd19,#008ee4,#33bdda,#e44a00,#6baa01,#583e78",
      "showborder": "0",
  "xAxisName":"ปี",
  "yAxisName":"จำนวนผู้ป่วย(คน)"
  },
  "categories": [
      {
          "category": [
            <?php
      foreach ($dataArrayChart3 as $key) {

             ?>
              {
                  "label": "<?=  $key[yearname] ?>"
              },
              <?php
              }
               ?>
          ]
      }
  ],
  "dataset": [
      {
          "seriesname": "ผู้ป่วยเก่า",
          "data": [
            <?php
      foreach ($dataArrayChart3 as $key) {
$olddata+=$key[total];
             ?>
              {
                  "value": "<?=  $olddata ?>"
              },
              <?php
              }
               ?>
          ]
      },
      {
          "seriesname": "ผู้ป่วยใหม่",
          "data": [
            <?php
      foreach ($dataArrayChart3 as $key) {
$newdata=$key[total];
             ?>
              {
                  "value": "<?=  $newdata ?>"
              },
              <?php
              }
               ?>
          ]
      }
  ]
  }
}
);
fusioncharts.render();
});
</script>
รูปที่ 3 จำนวนผู้ป่วย จำแนกตามรายปี ของ <?=  $data[0][hosname] ?>
<div id="chart-container"></div>
