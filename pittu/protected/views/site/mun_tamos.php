<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Тамос';
$this->breadcrumbs=array(
	Yii::t('translate','Тамос'),
);
?>
<p class="barnoma">Мо шод мешавем, агар Шумо ба шуъбаи мо оед, занг занед ё хат нависед.</p>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from mun_tamos");
$sql1=mysqli_fetch_array(mysqli_query($link,"select dop from mun_tamos where id_tam=1"));
$sql2=mysqli_fetch_array(mysqli_query($link,"select dop from mun_tamos where id_tam=2"));
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
$i=0;
echo "<table class='table'><tr><th>Ном</th><th>Номи идора</th><th>Email</th><th>Телефон</th></tr>
<tr class='odd'><td colspan=4 style='text-align:center'>".$sql1['0']."</td></tr>";
while($res=mysqli_fetch_array($sql)){
	$i++;
	if($i%2<>0)
	echo "<tr class='even'><td>".$res[1]."</td><td>".$res[2]."</td><td>".$res[3]."</td><td style='text-align:center'>".$res[4]."</td></tr>";
	else
	echo "<tr class='even'><td>".$res[1]."</td><td>".$res[2]."</td><td>".$res[3]."</td><td style='text-align:center'>".$res[4]."</td></tr>";
	}
	echo "<tr class='odd'><td colspan=4 style='text-align:center'>".$sql2['0']."</td></tr></table>";
?>