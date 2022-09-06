<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Қонуни маориф';
$this->breadcrumbs=array(
	Yii::t('translate','Қонуни маориф'),
);
?>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from zakon");
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
while($res=mysqli_fetch_array($sql)){
	if($l=='en')
	echo "<h1 class='tarih_h1'>".$res[3].'</h1><br><p class="text_teach">'.$res[6].'</p><br>';
	elseif($l=='ru')
	echo "<h1 class='tarih_h1'>".$res[2].'</h1><br><p class="text_teach">'.$res[5].'</p><br>';
	else
	echo "<h1 class='tarih_h1'>".$res[1].'</h1><br><p class="text_teach">'.$res[4].'</p><br>';
	}
?>
