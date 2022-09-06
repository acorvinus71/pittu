<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Сохтори Маркази тестӣ';
$this->breadcrumbs=array(
	Yii::t('translate','Сохтори Маркази тестӣ'),
);
?>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_fetch_array(mysqli_query($link,"select * from mtesti"));
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
echo "<img style='margin:auto; width:100%' src='images/".$sql[5]."'>";
?>
