<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Ахборот';
$this->breadcrumbs=array(
	Yii::t('translate','Ахборот'),
);
?>
<h1 class="barnoma">Ахборот</h1>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from mtesti");
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
$res=mysqli_fetch_array($sql);
echo $res['3'];
?>