<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Барномаҳои байналхалқӣ';
$this->breadcrumbs=array(
	Yii::t('translate','Барномаҳои байналхалқӣ'),
);
?>
<h1 class="barnoma">Эрасмус мундус</h1>
<p class="barnoma">Донишгоҳҳои аврупоӣ ки бо онҳо Донишкадаи политехникии Донишгоҳи техникии Тоҷикистон  ба номи академик М.С.Осимӣ ҳамкорӣ мекунад:</p>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from barnoma");
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
while($res=mysqli_fetch_array($sql)){
	echo "<div id='barnoma'><div style='min-height:60px'><a target='_blank' href='//".$res[2]."'>".$res[1]."</a></div><img src=images/".$res[3]."></div>";
	}
?>