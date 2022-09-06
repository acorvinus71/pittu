<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Тартиби гузаронидани имтиҳони маъмурӣ';
$this->breadcrumbs=array(
	Yii::t('translate','Тартиби гузаронидани имтиҳони маъмурӣ'),
);
?>
<p class="barnoma">Намоиш оид ба тартиби гузаронидани имтиҳони маъмурӣ пешкаш шудааст.<br />

Барои дастрас намудани он тугмаи зеринро пахш намоед.</p>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_fetch_array(mysqli_query($link,"select * from mtesti"));
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
echo "<a href='images/".$sql[4]."'><img src='images/prezentat.jpg'></a>";
?>
