<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Магистратура';
$this->breadcrumbs=array(
	Yii::t('translate','Магистратура'),
);
?>
<p class="text_teach">	Донишкадаи политехникии донишгоҳи техникии Точикистон ба номи академик М.Осимӣ нақшаи қабулро ба магистратура барои соли таҳсили <?php echo date('Y')-1; echo " - "; echo date('Y'); ?> эълон менамояд ва шумо метавонед вобаста ба номгўи ихтисосҳои зерин бо воситаи пуркардани <a href="#">ариза - онлайн</a> худро бақайд гиред:</p>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from magistratura");
$s1=mysqli_fetch_array(mysqli_query($link,"select SUM(tj_ruzona) from magistratura"));
$s2=mysqli_fetch_array(mysqli_query($link,"select SUM(tj_goibona) from magistratura"));
$s3=mysqli_fetch_array(mysqli_query($link,"select SUM(tj_bujavi) from magistratura"));
$s4=mysqli_fetch_array(mysqli_query($link,"select SUM(tj_shartnomavi) from magistratura"));
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
echo "<table class='table'><tr><th width='400'>Номгўи ихтисосҳо</th><th colspan=2>Теъдоди донишҷўён тибқи литсензия</th><th colspan=2>Теъдоди донишҷўён дар магистратура</th></tr>
<tr><th></th><th>Рўзона</th><th>Ғоибона</th><th>Буҷавӣ</th><th>Шартномавӣ</th></tr>";
$i=0;
while($res=mysqli_fetch_array($sql)){
	$i++;
	if($i%2<>0)
	echo "<tr  class='odd'><td>".$res[1]."</td><td style='text-align:center'>".$res[2]."</td><td style='text-align:center'>".$res[3]."</td><td style='text-align:center'>".$res[4]."</td><td style='text-align:center'>".$res[5]."</td></tr>";
	else
	echo "<tr class='even'><td>".$res[1]."</td><td style='text-align:center'>".$res[2]."</td><td style='text-align:center'>".$res[3]."</td><td style='text-align:center'>".$res[4]."</td><td style='text-align:center'>".$res[5]."</td></tr>";
	}
	echo "<tr><th>Ҳамагӣ</th><th>".$s1[0]."</th><th>".$s2[0]."</th><th>".$s3[0]."</th><th>".$s4[0]."</th></tr></table>";
?>