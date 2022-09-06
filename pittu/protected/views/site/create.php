<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . ' - Саҳифаи аввал';
$this->breadcrumbs=array(
	Yii::t('translate','Сабт'),
);
?>
<?php if(!Yii::app()->user->isGuest){
echo "<div class='alert alert-block alert-warning'>
          	<b>!</b> ".Yii::t('translate','Файл бояд форматҳои (jpg, gif, png, pdf, doc, xls, docx, xlsx, ppt, pptx) ва номи файл аз ҳарфҳои лотинӣ иборат бошад').".
          </div>";

if(!empty($_FILES["filename"]["tmp_name"]))
{if($_FILES["filename"]["type"]=='image/jpeg' or $_FILES["filename"]["type"]=='image/gif' or $_FILES["filename"]["type"]=='image/png' or $_FILES["filename"]["type"]=='application/pdf' or $_FILES["filename"]["type"]=='application/msword' or $_FILES["filename"]["type"]=='application/vnd.ms-excel' or $_FILES["filename"]["type"]=='application/vnd.openxmlformats-officedocument.wordprocessingml.document' or $_FILES["filename"]["type"]=='application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' or $_FILES["filename"]["type"]=='application/vnd.ms-powerpoint' or $_FILES["filename"]["type"]=='application/vnd.openxmlformats-officedocument.presentationml.presentation'){
   // Проверяем загружен ли файл
   if(move_uploaded_file($_FILES["filename"]["tmp_name"], "images/".$_FILES["filename"]["name"]))
   {
     echo "<div class='alert alert-block alert-success'>
          	<i class='icon-ok green'></i>".Yii::t('translate','Файл бо муваффақият сабт шуд').".
          </div>";
   } 
   else
   {
      echo "<div class='alert alert-block alert-error'>
          	<i class='icon-remove red'></i> ".Yii::t('translate','Файл сабт нашуд').".
          </div>";
   }
}
else echo "<div class='alert alert-block alert-error'>
          	<i class='icon-remove red'></i> ".Yii::t('translate','Танҳо форматҳои дар эзоҳ буда сабт карда мешаванд').".
          </div>";
}
elseif(empty($_FILES["filename"]["tmp_name"]) && isset($_POST['submit']))
{
	echo "<div class='alert alert-block alert-error'>
          	<i class='icon-remove red'></i> ".Yii::t('translate','Файлро интихоб кунед').".
          </div>";
}
?>
<form method="post" enctype="multipart/form-data"> 
<input type="file" name="filename"><br> 
<input type="submit" value="<?php echo Yii::t('translate','Сабт')?>" name='submit'> 
</form> 
<?php
}
else{echo"<div class='alert alert-block alert-error'>
          	<i class='icon-remove red'></i> ".Yii::t('translate','Шумо ҳуқуқи аз URL даромаданро надоред')."!
          </div>";
		  }
?>