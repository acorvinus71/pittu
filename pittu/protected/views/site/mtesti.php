<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Маркази Тестӣ';
$this->breadcrumbs=array(
	Yii::t('translate','Маркази Тестӣ'),
);
?>
<h1 class="barnoma">Маркази тестӣ</h1>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from mtesti");
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
$res=mysqli_fetch_array($sql);
echo "<p class='barnoma'>".$res['1']."</p>
<h1 class='barnoma'>Мақсадҳои маркази тестӣ</h1>
<p class='barnoma'>".$res['2']."</p>";
?>