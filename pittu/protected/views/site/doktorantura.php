<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . 'Докторантура';
$this->breadcrumbs=array(
	Yii::t('translate','Докторантура'),
);
?>
<p class="text_teach">	Донишкадаи политехникии донишгоҳи техникии Точикистон ба номи академик М.Осимӣ нақшаи қабулро ба магистратура барои соли таҳсили <?php echo date('Y')-1; echo " - "; echo date('Y'); ?> эълон менамояд ва шумо метавонед вобаста ба номгўи ихтисосҳои зерин бо воситаи пуркардани <a href="#">ариза - онлайн</a> худро бақайд гиред:</p>
<?php
require_once dirname(__FILE__) . '/../site/conn.php';
$sql=mysqli_query($link,"select * from doktorantura");
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
$i=0;
echo "<table class='table'><tr><th>р/т</th><th>Шифри соҳаи ихтисос</th><th>Соҳаи илм ва ихтисос</th></tr>";
while($res=mysqli_fetch_array($sql)){
	$i++;
	if($i%2<>0)
	echo "<tr class='odd'><td style='text-align:center'>".$i."</td><td style='text-align:center'>".$res[1]."</td><td>".$res[2]."</td></tr>";
	else
	echo "<tr class='even'><td style='text-align:center'>".$i."</td><td style='text-align:center'>".$res[1]."</td><td>".$res[2]."</td></tr>";
	}
	echo "</table>";
?>