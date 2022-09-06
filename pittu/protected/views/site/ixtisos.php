<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Ихтисосҳо';
$this->breadcrumbs=array(
	Yii::t('translate','Ихтисосҳо'),
);
?>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from specialnost");
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
while($res=mysqli_fetch_array($sql)){
	if($l=='en')
	echo "<div class='ixtisos' align='center'><b class='specialnost'>".$res[3].'</b><br><img class="specialnost" src=images/specialnost/'.$res[4].'><p class="specialnost">'.$res[7].'</p></div>';
	elseif($l=='ru')
	echo "<div class='ixtisos' align='center'><b class='specialnost'>".$res[2].'</b><br><img class="specialnost" src=images/specialnost/'.$res[4].'><p class="specialnost">'.$res[6].'</p></div>';
	else
	echo "<div class='ixtisos' align='center'><b class='specialnost'>".$res[1].'</b><br><img class="specialnost" src=images/specialnost/'.$res[4].'><p class="specialnost">'.$res[5].'</p></div>';
	}
?>
