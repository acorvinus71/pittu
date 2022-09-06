<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Парки Технологӣ';
$this->breadcrumbs=array(
	Yii::t('translate','Парки Технологӣ'),
);
?>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from tehn");
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
while($res=mysqli_fetch_array($sql)){
	if($l=='en')
	echo "<h1 class='tarih_h1'>".$res[3].'</h1><br><p class="text_teach">'.$res[6].'</p><br><img class="tehn" src=images/'.$res[7].' ><p class="text_teach">'.$res[10].'</p><img class="tehn2" src=images/'.$res[11].'><p class="text_teach">'.$res[14].'</p><img class="tehn" src=images/'.$res[15].'><p class="text_teach">'.$res[18].'</p><img class="tehn2" src=images/'.$res[19].'><p class="text_teach">'.$res[22].'</p>';
	elseif($l=='ru')
	echo "<h1 class='tarih_h1'>".$res[2].'</h1><br><p class="text_teach">'.$res[5].'</p><br><img class="tehn" src=images/'.$res[7].'><p class="text_teach">'.$res[9].'</p><img class="tehn2" src=images/'.$res[11].'><p class="text_teach">'.$res[13].'</p><img class="tehn" src=images/'.$res[15].'><p class="text_teach">'.$res[17].'</p><img class="tehn2" src=images/'.$res[19].'><p class="text_teach">'.$res[21].'</p>';
	else
	echo "<h1 class='tarih_h1'>".$res[1].'</h1><br><p class="text_teach">'.$res[4].'</p><img class="tehn" src=images/'.$res[7].'><p class="text_teach">'.$res[8].'</p><img class="tehn2" src=images/'.$res[11].'><p class="text_teach">'.$res[12].'</p><img class="tehn" src=images/'.$res[15].'><p class="text_teach">'.$res[16].'</p><img class="tehn2" src=images/'.$res[19].'><p class="text_teach">'.$res[20].'</p>';
	}
?>
