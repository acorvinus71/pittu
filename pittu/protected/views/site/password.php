<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . ' - Саҳифаи аввал';
$this->breadcrumbs=array(
	Yii::t('translate','Ивази парол'),
);
?>
<?php
if(isset($_POST['sub'])){
require_once dirname(__FILE__) . '/../site/conn.php';
$tp=$_POST['tp'];
$np=$_POST['np'];
$pp=$_POST['pp'];
$sql=mysqli_query($link,"select * from users where password='".$tp."'");
$res=mysqli_fetch_array($sql);
if(!$res){
echo "<div class='alert alert-block alert-error'>
          	<i class='icon-remove red'></i> ".Yii::t('translate','Пароли кӯҳна хато ворид шуд').".
          </div>";}
elseif($np<>$pp){echo "
	<div class='alert alert-block alert-error'>
          	<i class='icon-remove red'></i> ".Yii::t('translate','Мувофиқати пароли нав нодуруст').".
          </div>";
	}
else{
	$upd=mysqli_query($link,"update users set password='".$np."'");
	if($upd){echo"
		<div class='alert alert-block alert-success'>
          	<i class='icon-ok green'></i>".Yii::t('translate','Парол бо муваффақият дигар шуд').".
          </div>";
	}
	else{echo"<div class='alert alert-block alert-error'>
          	<i class='icon-remove red'></i> ".Yii::t('translate','Парол дигар нашуд').".
          </div>";
		  }
}
}
?>
<?php
if(!Yii::app()->user->isGuest){echo'
<form method="post">
<label>'.Yii::t('translate','Пароли пешина').':</label><br />
<input type="password" name="tp" required="required" /><br />
<label>'.Yii::t('translate','Пароли нав').':</label><br />
<input type="password" name="np" required="required" /><br />
<label>'.Yii::t('translate','Тасдиқи парол').':</label><br />
<input type="password" name="pp" required="required" /><br />
<input type="submit" name="sub" value="'.Yii::t('translate','Сабт кардан').'" />
</form>';}
else{echo"<div class='alert alert-block alert-error'>
          	<i class='icon-remove red'></i> ".Yii::t('translate','Шумо ҳуқуқи аз URL даромаданро надоред')."!
          </div>";
		  }
?>