<?
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\VarDumper;

//VarDumper::dump($data,10,true);
Yii::$app->formatter->locale = 'th-TH';
$yearshowraw=explode("-",$data[0][date_end]);
$yearshow=$yearshowraw[0]+543;
$domain=Url::home();
//var_dump($data);
$hosname=$data[0][$hosname];
$checkdatasite=$data[0][$checkdatasite];
$sitecode=$data[0][$sitecode];
$zonecode=$data[0][$zonecode];
$provincecode=$data[0][$provincecode];
$date_start=$data[0][$date_start];
$date_end=$data[0][$date_end];
?>

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
                  <b id="title">ส่วนที่ 1 รายงานเฉพาะผู้ป่วย  <? echo $data[0][hosname]  ?>
                  <span class="h4 date_start">ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?> </span><span class="h4 date_end">ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></span></b><br>

          <h4> 1.1 	จำนวนผู้ป่วยระยะประคับประคอง	</h4>
          <div>
              <a id="showdata" dataurl="figure1" sec="report-sec1" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div>รูปที่ 1 ภาพรวมจำนวนผู้ป่วย ทั้งหมดใน Palliative Care Cloud ตั้งแต่เริ่ม กระทั่งปัจจุบัน</div></a>
          </div>
          <div>
              <a id="showdata" dataurl="figure2" sec="report-sec1" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g2" >รูปที่ 2 จำนวนผู้ป่วย เฉพาะระยะที่เรียกแสดงรายงานคือระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?> ถึง <? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?>	</div></a>
          </div>
          <div>
              <a id="showdata" dataurl="figure3" sec="report-sec1" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g3" >รูปที่ 3 จำนวนผู้ป่วย จำแนกตามรายปี ของ <? echo $data[0][hosname]  ?>		</div></a>

          </div>
          <div>
              <a id="showdata" dataurl="figure4" sec="report-sec1" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g4" >รูปที่ 4 จำนวนผู้ป่วย จำแนกตามรายเดือน ของ <? echo $data[0][hosname]  ?> ปี พ.ศ.<? echo $yearshow   ?></div></a>
          </div>
          <div>
              <a id="showdata" dataurl="table1" sec="report-sec1" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g5" >ตารางที่ 1 จำนวนและร้อยละผู้ป่วย ที่ให้บริการโดย <? echo $data[0][hosname]  ?> จำแนกตามจังหวัดที่เป็นภูมิลำเนา</div></a>
          </div>

              <h4>    1.2 	ลักษณะผู้ป่วยระยะประคับประคอง</h4>
              <div>
                  <a id="showdata" dataurl="table2" sec="report-sec1" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g6" > ตารางที่ 2 จำนวนและร้อยละผู้ป่วย ที่ให้บริการโดย <? echo $data[0][hosname]  ?> จำแนกตามลักษณะประชากร นำเสนอเป็นค่าจำนวนและร้อยละ เว้นแต่จะระบุเป็นอย่างอื่นในบางรายการ</div></a>
              </div>

              <h4>    1.3 	ข้อมูลการรักษาระยะประคับประคอง	</h4>
              <div>
                  <div class="g7" > ตารางที่ 3 ระยะเวลาการดูแลผู้ป่วย ที่ให้บริการโดย <? echo $data[0][hosname]  ?>	</div>
                  <div class="g7" style="display:none"><p>   ตารางที่ 3 ระยะเวลาการดูแลผู้ป่วย ที่ให้บริการโดย <? echo $data[0][hosname]  ?>		</p>
              </p>
                      </div>
              </div>
              <div>
                  <div class="g8" > ตารางที่ 4 จำนวนและร้อยละผู้ป่วย ที่ให้บริการโดย <? echo $data[0][hosname]  ?> จำแนกตามข้อมูลการรักษาระยะประคับประคอง นำเสนอเป็นค่าจำนวนและร้อยละ เว้นแต่จะระบุเป็นอย่างอื่นในบางรายการ	</div>
                  <div class="g8" style="display:none"><p>  ตารางที่ 4 จำนวนและร้อยละผู้ป่วย ที่ให้บริการโดย <? echo $data[0][hosname]  ?>จำแนกตามข้อมูลการรักษาระยะประคับประคอง นำเสนอเป็นค่าจำนวนและร้อยละ เว้นแต่จะระบุเป็นอย่างอื่นในบางรายการ	</p>
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
                <b id="title">ส่วนที่ 2 รายงานเปรียบเทียบระหว่าง <? echo $data[0][hosname]  ?> กับพื้นที่อื่นๆ
                <span class="h4 date_start">ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?> </span><span class="h4 date_end">ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></span></b><br>
        <h4>2.1 	จำนวนผู้ป่วยระยะประคับประคองจำแนกตามสถานที่ ทั้งหมดที่มีในฐานข้อมูล และเฉพาะช่วงเวลาที่เรียกแสดงรายงาน</h4>
        <div>
        <a id="showdata" dataurl="table5" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g9" >ตารางที่ 5 จำนวนและร้อยละหน่วยบริการและผู้ป่วย รวมทุกโรค	</div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table6" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g10" >ตารางที่ 6 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค Cancer ทุกประเภท</div></a>
        </div>
        <div>
        <div class="g101" >ตารางที่ 6.1 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี	</div>
        <div class="g101" style="display:none">
        <p>  ตารางที่ 6.1 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี	</p>
        <p></p>
        </div>
        </div>
        <div>
        <a id="showdata" dataurl="table7" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g11" >ตารางที่ 7 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค End stage renal diseases</div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table8" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g12" >ตารางที่ 8 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค Trauma</div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table9" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g13" >ตารางที่ 9 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค End stage lung diseases	</div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table10" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g14" >ตารางที่ 10 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค Neurological diseases</div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table11" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g15" >ตารางที่ 11 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรค End stage heart diseases	</div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table12" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g16" >ตารางที่ 12 จำนวนและร้อยละหน่วยบริการและผู้ป่วย เฉพาะกลุ่มโรคอื่นๆ</div></a>
        </div>
        <h4>2.2   จำนวนผู้ป่วยระยะประคับประคองจำแนกตามเวลาเป็นรายเดือน เฉพาะปี พ.ศ. <? echo $yearshow   ?>	</h4>
        <div>
        <a id="showdata" dataurl="table13" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g17" >ตารางที่ 13 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน รวมทุกโรค ปี พ.ศ. <? echo $yearshow   ?></div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table14" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g18" >ตารางที่ 14 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค Cancer</div></a>
        </div>
        <div>
        <div class="g181" >ตารางที่ 14x จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี</div>
        <div class="g181" style="display:none">
        <p> ตารางที่ 14x จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี	</p>
        <p></p>
        </div>
        </div>
        <div>
        <a id="showdata" dataurl="table15" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g19" >ตารางที่ 15 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค End stage renal diseases</div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table16" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g20" >ตารางที่ 16 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค Frailty dementia</div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table17" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g21" >ตารางที่ 17 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค End stage lung diseases</div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table18" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g22" >ตารางที่ 18 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค Neurological diseases</div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table19" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g23" >ตารางที่ 19 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรค End stage heart diseases</div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table20" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g24" >ตารางที่ 20 จำนวนผู้ป่วย จำแนกตามหน่วยบริการ เป็นรายเดือน เฉพาะกลุ่มโรคอื่นๆ</div></a>
        </div>
        <h4>2.3 	จำนวนผู้ป่วยระยะประคับประคองจำแนกตามอายุและเพศ เฉพาะช่วงที่เรียกแสดงรายงาน</h4>
        <div>
        <a id="showdata" dataurl="table21" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g25" >ตารางที่ 21 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ รวมทุกโรค ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?> ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table22" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g26" >ตารางที่ 22 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค Cancer ทุกประเภท</div></a>
        </div>
        <div>
        <div class="g27" >ตารางที่ 22x จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี
        ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></div>
        <div class="g27" style="display:none"><p>ตารางที่ 22x จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ เฉพาะกลุ่มโรคมะเร็งท่อน้ำดี
        ระหว่าง <ว/ด/ป> ถึง <ว/ด/ป></p>
        <p></p>
        </div>
        </div>
        <div>
        <a id="showdata" dataurl="table23" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g28" >ตารางที่ 23 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค End stage renal diseases ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table24" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g29" >ตารางที่ 24 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค Frailty dementia
        ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table25" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g30" >ตารางที่ 25 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค End stage lung diseases ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table26" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g31" >ตารางที่ 26 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค Neurological diseases
        ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table27" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g32" >ตารางที่ 27 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรค End stage heart diseases ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></div></a>
        </div>
        <div>
        <a id="showdata" dataurl="table28" sec="report-sec2" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g33" >ตารางที่ 28 จำนวนผู้ป่วย จำแนกตามสถานที่ อายุ และเพศ กลุ่มโรคอื่นๆ ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></div></a>
        </div>

        </div>
        </div>
      </div>
      <div id="report3" class="tab-pane fade">
        <div class="row">
              <div class="col-md-12">
                <b id="title">ส่วนที่ 3 การประเมินด้านจิตสังคม และจิตวิญญาณ
        <span class="h4 date_start">ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></span></b><br>
        <div>
          <a id="showdata" dataurl="table29" sec="report-sec3" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal">  <div class="g34" ><h5> ตารางที่ 29 จำนวนและร้อยละผู้ป่วย จำแนกตามผลการประเมินด้านจิตสังคม เป็นรายโรค ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?>	</h5></a>
        </div>
        </div>
        <div>
            <a id="showdata" dataurl="table30" sec="report-sec3" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g35" ><h5>ตารางที่ 30 จำนวนและร้อยละผู้ป่วย จำแนกตามผลการประเมินด้านจิตวิญญาณ เป็นรายโรค ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?>	</h5></div></a>
        </div>
        <div>
            <a id="showdata" dataurl="table31" sec="report-sec3" data-toggle="modal"  hosname="<? echo $data[0][hosname] ?>"  checkdatasite="<? echo $data[0][checkdatasite] ?>"  sitecode="<? echo $data[0][sitecode] ?>"  zonecode="<? echo $data[0][zonecode] ?>"  provincecode="<? echo $data[0][provincecode] ?>"  date_start="<? echo $data[0][date_start] ?>"  date_end="<? echo $data[0][date_end] ?>" data-target="#myModal"><div class="g36" ><h5>ตารางที่ 31 จำนวนและร้อยละผู้ป่วย จำแนกตามผลการประเมินด้านความรับรู้และการมีส่วนร่วมในการตัดสินใจ เป็นรายโรค ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></h5></div></a>
        </div>


              </div>
        </div>
      </div>
      <div id="report4" class="tab-pane fade">
        <div class="row">
        <div class="col-md-12"><b id="title">ส่วนที่ 4 การยืมอุปกรณ์การแพทย์
                    <span class="h4 date_start">ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></span></b><br>
                    <div>
                        <div class="g37" ><h5> ตารางที่ 32 จำนวนและร้อยละผู้ป่วยที่มีการยืมอุปกรณ์การแพทย์ และระยะเวลาที่ยืม จำแนกตามประเภทอุปกรณ์ ระหว่าง <? echo Yii::$app->formatter->asDate($data[0][date_start], 'long')  ?>ถึง<? echo Yii::$app->formatter->asDate($data[0][date_end], 'long')  ?></h5></div>
                    </div>

                    </div>
                    </div>
      </div>
    </div>
    </div>
    </div>
    </div>
