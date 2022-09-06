<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Оинномаи донишкада';
$this->breadcrumbs=array(
	Yii::t('translate','Оинномаи донишкада'),
);
?>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from ustav");
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
while($res=mysqli_fetch_array($sql)){
	if($l=='en')
	echo "<h1 class='tarih_h1'>".$res[3].'</h1><br><p class="text_teach">'.$res[6].'</p><p class="text_teach">'.$res[9].'</p><br>';
	elseif($l=='ru')
	echo "<h1 class='tarih_h1'>".$res[2].'</h1><br><p class="text_teach">'.$res[5].'</p><p class="text_teach">'.$res[8].'</p><br>';
	else
	echo "<h1 class='tarih_h1'>".$res[1].'</h1><br><p class="text_teach">'.$res[4].'</p><p class="text_teach">'.$res[7].'</p><br>';
	}
?>
