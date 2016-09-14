<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
?>
<div class="col-md-12">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title">
                    ตั้งค่ารูปแบบรายงาน
                </h4>
            </div>
            <div role="tabpanel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <b>เลือกเขตบริการสุขภาพ</b>
                            <select id="tpc_area_zone" class="form-control" name="tpc_province">
<option value="00">- ทุกเขตบริการสุขภาพ -</option>
<option value="01">เขตบริการสุขภาพที่ 1</option>
<option value="02">เขตบริการสุขภาพที่ 2</option>
<option value="03">เขตบริการสุขภาพที่ 3</option>
<option value="04">เขตบริการสุขภาพที่ 4</option>
<option value="05">เขตบริการสุขภาพที่ 5</option>
<option value="06">เขตบริการสุขภาพที่ 6</option>
<option value="07">เขตบริการสุขภาพที่ 7</option>
<option value="08">เขตบริการสุขภาพที่ 8</option>
<option value="09">เขตบริการสุขภาพที่ 9</option>
<option value="10">เขตบริการสุขภาพที่ 10</option>
<option value="11">เขตบริการสุขภาพที่ 11</option>
<option value="12">เขตบริการสุขภาพที่ 12</option>
</select>
</div>
<div class="col-md-3 form-group"><b>จาก</b>
<input type="date" id="palliative_date_start"  class="form-control" name="cccc">
</div>
<div class="col-md-3 form-group"><b>ถึง</b>
<input type="date" id="palliative_date_end"   class="form-control" name="ccccx"></div>
<div class="col-md-6 form-group">
<select id="tpc_province" class="form-control" name="tpc_province">
  <option value="">- ทุกจังหวัด -</option>
</select>
</div>
<div class="col-md-6 form-group">
  <div id="custom-search-input">
                  <div class="input-group col-md-12">
                      <input id="hcode" type="text" class="form-control input-md" placeholder="- หน่วยบริการ - " />
                      <span class="input-group-btn">
                          <button  class="btn btn-info btn-md" type="button">
                              <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
  </div>
<div class="row">
<div style="float:right; margin:10px 20px 0px 0px;">
<a id="btnsummit" href="#" class="btn btn-info" alt="filter">แสดงรายงาน</a>
</div>
</div>

</div>
                    <!-- end col and row-->

                </div>
            </div>
        </div>
        <!-- end panel-->

<!--//end col-->
<div id="show_report"></div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"></h4>
          </div>
          <div class="modal-body">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->


    <?php
    $jsAdd =<<< JS
$(document).on("click", "#showdata", function() {
  $(".modal-body").empty();
  $("#myModalLabel").empty();
  var sec=$(this).attr('sec');
  var dataurl=$(this).attr('dataurl');
  var hosname=$(this).attr('hosname');
  var checkdatasite=$(this).attr('checkdatasite');
  var sitecode=$(this).attr('sitecode');
  var zonecode=$(this).attr('zonecode');
  var provincecode=$(this).attr('provincecode');
  var date_start=$(this).attr('date_start');
  var date_end=$(this).attr('date_end');
  var url = "$domain/thaipalliative/"+sec+"/"+dataurl;
  var dataget={sitecode:sitecode,hosname:hosname,checkdatasite:checkdatasite,zonecode:zonecode,provincecode:provincecode,date_start:date_start,date_end:date_end};
  $.get(url,dataget)
  .done(function( data ) {
    $(".modal-body").empty();
    $(".modal-body").html(data);
  });


  });


$( "#tpc_area_zone" ).change(function() {
var valueselect=$(this).val();
var url = "$domain/thaipalliative/filter/province";
var dataget={zone_code:valueselect};
$.get(url,dataget)
.done(function( data ) {
$("#tpc_province").html("");
$("#tpc_province").html(data);
});


});


$("#hcode").autocomplete({
    source: function (request, response) {
      var url = "$domain/thaipalliative/filter/hospital";
      var hcodeinput=$("#hcode").val();
      var dataget={hcode:hcodeinput,format: 'json'};
      $.getJSON(url,dataget)
      .done(function( data ) {
        response($.map(data, function (value, key) {
            return {
                label: value.hcode+":"+value.hname,
                value: value.hcode+":"+value.hname
            };
        }));
    });
  },
  minLength: 3
});

$(document).on("click", "#btnsummit", function() {
  var url = "$domain/thaipalliative/report/show-report";
  var zonecode=$("#tpc_area_zone").val();
  var provincecode=$("#tpc_province").val();
  var sitecode=$("#hcode").val();
  var date_start=$("#palliative_date_start").val();
  var date_end=$("#palliative_date_end").val();
  var dataget={sitecode:sitecode,zonecode:zonecode,provincecode:provincecode,date_start:date_start,date_end:date_end};
  $.get(url,dataget)
  .done(function( data ) {
  $("#show_report").html("");
  $("#show_report").html(data);
  });


  });
JS;
$this->registerJs($jsAdd);
?>
