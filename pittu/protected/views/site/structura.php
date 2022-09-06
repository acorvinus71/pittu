<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Сохтори Донишкада';
$this->breadcrumbs=array(
	Yii::t('translate','Сохтори Донишкада'),
);
?>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from struktura where id_struktura=1");
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
while($res=mysqli_fetch_array($sql)){
	if($l=='en')
	echo "<h1 class='tarih_h1'>".$res[3].'</h1><br><img class="struktura" src=images/'.$res[4].'>';
	elseif($l=='ru')
	echo "<h1 class='tarih_h1'>".$res[2].'</h1><br><img class="struktura" src=images/'.$res[4].'>';
	else
	echo "<h1 class='tarih_h1'>".$res[1].'</h1><br><img class="struktura" src=images/'.$res[4].'>';
	}
?>
