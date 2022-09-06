<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Хатмкунанда';
$this->breadcrumbs=array(
	Yii::t('translate','Хатмкунанда'),
);
?>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
if(isset($_POST['intihob'])){
$sql=mysqli_query($link,"select * from hatmkunanda where soli_hatm=".$_POST['az']." order by fio asc");
$god=mysqli_fetch_array(mysqli_query($link,"select soli_hatm from hatmkunanda where soli_hatm=".$_POST['az']." limit 1"));}
else{
$sql=mysqli_query($link,"select * from hatmkunanda where soli_hatm=(select year(now())-3) order by fio asc");
$god=mysqli_fetch_array(mysqli_query($link,"select soli_hatm from hatmkunanda where soli_hatm=(select year(now())-3) limit 1"));}
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
echo "<p class='text_teach'>Аввалин хатми бақайд гирифта шуда: 2010. <br />Охирин хатми бақайд гирифта шуда: ".date('Y').". 
<form method='post'>
<span class='text_teach'>Соли хатмро интихоб намоед:</span>
<input type='number' name='az' style='width:55px; height:25px; padding:0 0 0 5px' maxlength='4' min='2010' max='".date('Y')."' required='required' value='".$god['0']."'/>
<input type='submit' value='Интихоб' name='intihob' style='margin-top:-9px'/>
</form>
</p>";
echo "<table class='table' align='center'><tr><th>№</th><th>ННН</th><th>Ихтисос</th><th>Соли хатм</th></tr>";
$i=0;
while($res=mysqli_fetch_array($sql)){
	$i++;
	if($i%2<>0)
	echo "<tr class='odd'><td style='text-align:center'>".$i."</td><td>".$res[1]."</td><td style='text-align:center'>".$res[2]."</td><td style='text-align:center'>".$res[3]."</td></tr>";
	else
	echo "<tr class='even'><td style='text-align:center'>".$i."</td><td>".$res[1]."</td><td style='text-align:center'>".$res[2]."</td><td style='text-align:center'>".$res[3]."</td></tr>";
	}
	echo "<tr><th colspan=4>Ҳамагӣ ".$i." нафар</th></tr></table>";
?>