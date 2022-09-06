<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Тамос';
$this->breadcrumbs=array(
	Yii::t('translate','Тамос'),
);
?>
<h1 class="barnoma">Маълумот барои тамос</h1>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from mtamos");
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
while($res=mysqli_fetch_array($sql)){
	echo "<div id='tamos'><img src=images/".$res[5]."><p class='tamos'><b>".$res['1']."</b><br>(".$res['2'].")<br>Тел: ".$res['3']."<br>E-mail: <a href='mailto:".$res['4']."'>".$res['4']."</a></p></div>";
	}
?>