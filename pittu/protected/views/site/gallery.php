<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Фотогалерея';
$this->breadcrumbs=array(
	Yii::t('translate','Фотогалерея'),
);
?>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from gallery");
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
echo "<div class='row gallery clearfix'>";
while($res=mysqli_fetch_array($sql)){
	if($l=='en')
	echo "<img src=images/".$res[1].">".$res[4];
	elseif($l=='ru')
	echo "<img src=images/".$res[1].">".$res[3];
	else
	echo "<a class='galleries' href=images/".$res[1]." rel='prettyPhoto[gallery2]'><img src=images/".$res[1].">".$res[2]."</a>";
	}
	echo "</div>";
?>
