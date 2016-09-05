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
<option value="">- ทุกเขตบริการสุขภาพ -</option>
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
<input type="date" id="palliative_date_start" class="form-control" name="cccc">
</div>
<div class="col-md-3 form-group"><b>ถึง</b>
<input type="date" id="palliative_date_end" class="form-control" name="ccccx"></div>
<div class="col-md-6 form-group">
<select id="tpc_province" class="form-control" name="tpc_province">
  <option value="">- ทุกจังหวัด -</option>
</select>
</div>
<div class="col-md-6 form-group">
  <div id="custom-search-input">
                  <div class="input-group col-md-12">
                      <input type="text" class="form-control input-md" placeholder="- หน่วยบริการ - " />
                      <span class="input-group-btn">
                          <button class="btn btn-info btn-md" type="button">
                              <i class="glyphicon glyphicon-search"></i>
                          </button>
                        </div>
  </div>
<div class="row">
<div style="float:right; margin:10px 20px 0px 0px;">
<a href="#" class="btn btn-info" alt="filter">แสดงรายงาน</a>
</div>
</div>

</div>
                    <!-- end col and row-->

                </div>
            </div>
        </div>
        <!-- end panel-->

<!--//end col-->

    </div>

    <hr>
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12">
    <h5>Report</h5>
    <ul class="nav nav-tabs">
    <li class="active"><a href="#report1" data-toggle="tab">ส่วนที่ 1 รายงานเฉพาะผู้ป่วยของ</a></li>
    <li><a href="#report2" data-toggle="tab">ส่วนที่ 2 รายงานเปรียบเทียบระหว่างหน่วยบริการกับพื้นที่อื่นๆ</a></li>
    <li><a href="#report3" data-toggle="tab">ส่วนที่ 3 การประเมินด้านจิตสังคม และจิตวิญญาณ</a></li>
    <li><a href="#report4" data-toggle="tab">ส่วนที่ 4 การยืมอุปกรณ์การแพทย์</a></li>
    </ul>
    <div class="tab-content">
      <div id="report1" class="tab-pane fade in active">

        <p>
          <div class="row">
              <div class="col-md-12">
                  <b id="title">ส่วนที่ 1 รายงานเฉพาะผู้ป่วย  <ชื่อหน่วยบริการ>
                  <span class="h4 date_start">Start Date: DD/MM/YYYY </span><span class="h4 date_end">End Date: DD/MM/YYYY</span></b><br>

          <h4> 1.1 	จำนวนผู้ป่วยระยะประคับประคอง	</h4>
          <div>
              <a id="showdata" dataurl="figure1" sec="report-sec1" data-toggle="modal" data-target="#myModal"><div>รูปที่ 1 ภาพรวมจำนวนผู้ป่วย ทั้งหมดใน Palliative Care Cloud ตั้งแต่เริ่ม กระทั่งปัจจุบัน</div></a>
          </div>
          <div>
              <a id="showdata" dataurl="figure2" sec="report-sec1" data-toggle="modal" data-target="#myModal"><div class="g2" >รูปที่ 2 จำนวนผู้ป่วย เฉพาะระยะที่เรียกแสดงรายงานคือระหว่าง <ว/ด/ป> ถึง <ว/ด/ป>	</div></a>
          </div>
          <div>
              <a id="showdata" dataurl="figure3" sec="report-sec1" data-toggle="modal" data-target="#myModal"><div class="g3" >รูปที่ 3 จำนวนผู้ป่วย จำแนกตามรายปี ของ<ชื่อหน่วยบริการ>		</div></a>

          </div>
          <div>
              <a id="showdata" dataurl="figure4" sec="report-sec1" data-toggle="modal" data-target="#myModal"><div class="g4" >รูปที่ 4 จำนวนผู้ป่วย จำแนกตามรายเดือน ของ<ชื่อหน่วยบริการ> ปี พ.ศ.xxxx (n = xxxx)	</div></a>
          </div>
          <div>
              <a id="showdata" dataurl="table1" sec="report-sec1" data-toggle="modal" data-target="#myModal"><div class="g5" >ตารางที่ 1 จำนวนและร้อยละผู้ป่วย ที่ให้บริการโดย<ชื่อหน่วยบริการ> จำแนกตามจังหวัดที่เป็นภูมิลำเนา</div></a>
          </div>

              <h4>    1.2 	ลักษณะผู้ป่วยระยะประคับประคอง</h4>
              <div>
                  <a id="showdata" dataurl="table2" sec="report-sec1" data-toggle="modal" data-target="#myModal"><div class="g6" > ตารางที่ 2 จำนวนและร้อยละผู้ป่วย ที่ให้บริการโดย<ชื่อหน่วยบริการ> จำแนกตามลักษณะประชากร นำเสนอเป็นค่าจำนวนและร้อยละ เว้นแต่จะระบุเป็นอย่างอื่นในบางรายการ</div></a>
              </div>

              <h4>    1.3 	ข้อมูลการรักษาระยะประคับประคอง	</h4>
              <div>
                  <div class="g7" > ตารางที่ 3 ระยะเวลาการดูแลผู้ป่วย ที่ให้บริการโดย<ชื่อหน่วยบริการ>	</div>
                  <div class="g7" style="display:none"><p>   ตารางที่ 3 ระยะเวลาการดูแลผู้ป่วย ที่ให้บริการโดย<ชื่อหน่วยบริการ>		</p>
              </p>
                      </div>
              </div>
              <div>
                  <div class="g8" > ตารางที่ 4 จำนวนและร้อยละผู้ป่วย ที่ให้บริการโดย<ชื่อหน่วยบริการ> จำแนกตามข้อมูลการรักษาระยะประคับประคอง นำเสนอเป็นค่าจำนวนและร้อยละ เว้นแต่จะระบุเป็นอย่างอื่นในบางรายการ	</div>
                  <div class="g8" style="display:none"><p>  ตารางที่ 4 จำนวนและร้อยละผู้ป่วย ที่ให้บริการโดย<ชื่อหน่วยบริการ> จำแนกตามข้อมูลการรักษาระยะประคับประคอง นำเสนอเป็นค่าจำนวนและร้อยละ เว้นแต่จะระบุเป็นอย่างอื่นในบางรายการ	</p>
              </p>
                      </div>
              </div>

              </div>
          </div>
        </p>
      </div>
      <div id="report2" class="tab-pane fade">
        <div class="row">
            <div class="col-md-12">
                <b id="title">ส่วนที่ 2 รายงานเปรียบเทียบระหว่าง <ชื่อหน่วยบริการ> กับพื้นที่อื่นๆ
                <span class="h4 date_start">Start Date: DD/MM/YYYY </span><span class="h4 date_end">End Date: DD/MM/YYYY</span></b><br>
        <h4>2.1 	จำนวนผู้ป่วยระยะประคับประคองจำแนกตามสถานที่ ทั้งหมดที่มีในฐานข้อมูล และเฉพาะช่วงเวลาที่เรียกแสดงรายงาน</h4>
        <div>
        <a id="showdata" dataurl="table5" sec="report-sec2" data-toggle="modal" data-target="#myModal"><div class="g9" >ตารางที่ 5 จำนวนและร้อยละหน่วยบริการและผู้ป่วย รวมทุกโรค	</div></a>
        </div>
        <div>
        <div class="g10" >ตารางที่ 6 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค Cancer ทุกประเภท</div>
        <div class="g10" style="display:none">
        <p>  ตารางที่ 6 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค Cancer ทุกประเภท	</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g101" >ตารางที่ 6.1 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี	</div>
        <div class="g101" style="display:none">
        <p>  ตารางที่ 6.1 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี	</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g11" >ตารางที่ 7 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค End stage renal diseases</div>
        <div class="g11" style="display:none">
        <p>  ตารางที่ 7 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค End stage renal diseases	</p>
        <p> </p>
        </div>
        </div>
        <div>
        <div class="g12" >ตารางที่ 8 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค Frailty dementia</div>
        <div class="g12" style="display:none">
        <p>  ตารางที่ 8 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค Frailty dementia	</p>
        <p> </p>
        </div>
        </div>
        <div>
        <div class="g13" >ตารางที่ 9 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค End stage lung diseases	</div>
        <div class="g13" style="display:none">
        <p>  ตารางที่ 9 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค End stage lung diseases		</p>
        <p> </p>
        </div>
        </div>
        <div>
        <div class="g14" >ตารางที่ 10 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค Neurological diseases</div>
        <div class="g14" style="display:none">
        <p>  ตารางที่ 10 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค Neurological diseases	</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g15" >ตารางที่ 11 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค End stage heart diseases	</div>
        <div class="g15" style="display:none">
        <p>  ตารางที่ 11 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค End stage heart diseases	</p>
        <p> </p>
        </div>
        </div>
        <div>
        <div class="g16" >ตารางที่ 12 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรคอื่นๆ (ระบุ ..................)</div>
        <div class="g16" style="display:none">
        <p>  ตารางที่ 12 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรคอื่นๆ (ระบุ ..................)	</p>
        <p></p>
        </div>
        </div>
        <h4>2.2   จำนวนผู้ป่วยระยะประคับประคองจำแนกตามเวลาเป็นรายเดือน เฉพาะปี พ.ศ. xxxx	</h4>
        <div>
        <div class="g17" >ตารางที่ 13 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน รวมทุกโรค ปี พ.ศ. xxxx</div>
        <div class="g17" style="display:none">
        <p> ตารางที่ 13 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน รวมทุกโรค ปี พ.ศ. xxxx	</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g18" >ตารางที่ 14 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค Cancer</div>
        <div class="g18" style="display:none">
        <p> ตารางที่ 14 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค Cancer</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g181" >ตารางที่ 14x จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี</div>
        <div class="g181" style="display:none">
        <p> ตารางที่ 14x จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี	</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g19" >ตารางที่ 15 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค End stage renal diseases</div>
        <div class="g19" style="display:none">
        <p> ตารางที่ 15 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค End stage renal diseases	</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g20" >ตารางที่ 16 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค Frailty dementia</div>
        <div class="g20" style="display:none">
        <p> ตารางที่ 16 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค Frailty dementia	</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g21" >ตารางที่ 17 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค End stage lung diseases</div>
        <div class="g21" style="display:none"><p>ตารางที่ 17 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค End stage lung diseases</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g22" >ตารางที่ 18 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค Neurological diseases</div>
        <div class="g22" style="display:none"><p>ตารางที่ 18 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค Neurological diseases</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g23" >ตารางที่ 19 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค End stage heart diseases</div>
        <div class="g23" style="display:none"><p>ตารางที่ 19 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค End stage heart diseases</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g24" >ตารางที่ 20 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรคอื่นๆ (ระบุ ...............)</div>
        <div class="g24" style="display:none"><p>ตารางที่ 20 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรคอื่นๆ (ระบุ ...............)</p>
        <p></p>
        </div>
        </div>
        <h4>2.3 	จำนวนผู้ป่วยระยะประคับประคองจำแนกตามอายุและเพศ เฉพาะช่วงที่เรียกแสดงรายงาน</h4>
        <div>
        <div class="g25" >ตารางที่ 21 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ รวมทุกโรค ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></div>
        <div class="g25" style="display:none"><p> ตารางที่ 21 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ รวมทุกโรค ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g26" >ตารางที่ 22 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค Cancer ทุกประเภท</div>
        <div class="g26" style="display:none"><p>ตารางที่ 22 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค Cancer ทุกประเภท</p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g27" >ตารางที่ 22x จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี
        ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></div>
        <div class="g27" style="display:none"><p>ตารางที่ 22x จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี
        ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
        <p></p>
        </div>
        </div>
        <div>
        <div class="g28" >ตารางที่ 23 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค End stage renal diseases ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></div>
        <div class="g28" style="display:none"><p>ตารางที่ 23 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค End stage renal diseases ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
        <p> </p>
        </div>
        </div>
        <div>
        <div class="g29" >ตารางที่ 24 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค Frailty dementia
        ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></div>
        <div class="g29" style="display:none"><p>ตารางที่ 24 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค Frailty dementia
        ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
        <p> </p>
        </div>
        </div>
        <div>
        <div class="g30" >ตารางที่ 25 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค End stage lung diseases ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></div>
        <div class="g30" style="display:none"><p>ตารางที่ 25 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค End stage lung diseases ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
        <p> </p>
        </div>
        </div>
        <div>
        <div class="g31" >ตารางที่ 26 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค Neurological diseases
        ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></div>
        <div class="g31" style="display:none"><p>ตารางที่ 26 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค Neurological diseases
        ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
        <p> </p>
        </div>
        </div>
        <div>
        <div class="g32" >ตารางที่ 27 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค End stage heart diseases ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></div>
        <div class="g32" style="display:none"><p>ตารางที่ 27 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค End stage heart diseases ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
        <p> </p>
        </div>
        </div>
        <div>
        <div class="g33" >ตารางที่ 28 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรคอื่นๆ (ระบุ ..............................) ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></div>
        <div class="g33" style="display:none"><p>ตารางที่ 28 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรคอื่นๆ (ระบุ ..............................) ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
        <p> </p>
        </div>
        </div>

        </div>
        </div>
      </div>
      <div id="report3" class="tab-pane fade">

        <p>
      </p>
      </div>
      <div id="report4" class="tab-pane fade">

        <p>
        </p>
      </div>
    </div>
    </div>
    </div>
    </div>



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
  var url = "$domain/thaipalliative/"+sec+"/"+dataurl;
  var dataget={sitecode:'13777'};
  $.get(url,dataget)
  .done(function( data ) {
    $(".modal-body").empty();
    $(".modal-body").html(data);
  });


  });
JS;
$this->registerJs($jsAdd);
?>
