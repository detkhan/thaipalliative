<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;


$domain=Url::home();
 ?>
 <option value="0">ทุกจังหวัด</option>
<?php
foreach ($dataprovince as $key) {
?>
<option value="<?= $key[provincecode] ?>:<?= $key[province] ?>"><?= $key[province] ?> </option>
<?php
}
 ?>
