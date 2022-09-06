<?php
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
?>
<div style="width:170px; margin:auto; margin-top:30px">
<form method="post" class="mail">
<p><?php echo Yii::t('translate','Ирсоли хабарҳо')?></p>
<input type="email" name="email" placeholder="<?php echo Yii::t('translate','E-mail шумо')?>" required="required" />
<input type="text" name="name" placeholder="<?php echo Yii::t('translate','Номи шумо')?>" required="required" />
<input type="submit" value="<?php echo Yii::t('translate','Аъзо шудан')?>" name="dontvalidate" />
</form>
</div>
<?php
$link=mysqli_connect('localhost','root','','kbtut');
if(isset($_POST['dontvalidate'])){
	$e=$_POST['email'];
	$n=$_POST['name'];
	mysqli_query($link,'set names utf8');
	$sql=mysqli_query($link,"select * from mail where email='".$e."'");
	$res=mysqli_fetch_array($sql);
	if($res){
		echo "<p class='red'>".Yii::t('translate','E-mail воридшуда мавҷуд аст')."!</p>";
	}else{
	$query=mysqli_query($link,"insert into mail values(default,'".$e."','".$n."')");
	if($query){
		echo "<p class='green'>".Yii::t('translate','Шумо аъзо шудед')."!</p>";
	}
	else{
		echo "<p class='red'>".Yii::t('translate','Шумо аъзо нашудед')."!</p>";
	}
	}
}
$t=mysqli_num_rows(mysqli_query($link,"select * from mail"));
echo "<p class='blue'>".Yii::t('translate','Аъзоён').": $t ".Yii::t('translate','нафар')."</p>";
?>