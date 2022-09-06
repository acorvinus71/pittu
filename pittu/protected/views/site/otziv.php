<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . ' - Саҳифаи аввал';
$this->breadcrumbs=array(
	Yii::t('translate','Эзоҳҳо'),
);
?>
<?php if(!Yii::app()->user->isGuest){
require_once dirname(__FILE__) . '/../site/conn.php';
if(isset($_GET['otzivi']))
$sql=mysqli_query($link,"select * from otziv order by date desc");
else
$sql=mysqli_query($link,"select * from otziv order by date desc limit 7");
while($res=mysqli_fetch_array($sql)){
echo "<b>Ном: </b>".strip_tags($res['1'])."<br>
<b>E-mail: </b><a href='mailto:".strip_tags($res['2'])."'>".strip_tags($res['2'])."</a><br>
<b>Сана: </b>".strip_tags($res['5'])."<br>
<b>Мавзўъ: </b>".strip_tags($res['3'])."<br>
<b>Матн: </b>".strip_tags($res['4'])."<hr>";
}
if(!isset($_GET['otzivi'])){
echo "<a href='index.php?r=site/otziv&otzivi'>Ҳамаи эзоҳҳо</a>";}
else {echo "<a href='index.php?r=site/otziv'>Ба қафо</a>";}
}
else{echo"<div class='alert alert-block alert-error'>
          	<i class='icon-remove red'></i> ".Yii::t('translate','Шумо ҳуқуқи аз URL даромаданро надоред')."!
          </div>";
		  }
?>
