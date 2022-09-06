<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . ' - Саҳифаи аввал';
$this->breadcrumbs=array(
	Yii::t('translate','Саҳифаҳо'),
);
?>
<a href="index.php?r=novosti/admin"><?php echo Yii::t('translate','Ахборот')?></a><br />
<a href="index.php?r=tarih/admin"><?php echo Yii::t('translate','Таърихи донишкада')?></a><br />
<a href="index.php?r=fakultet/admin"><?php echo Yii::t('translate','Факултет')?></a><br />
<a href="index.php?r=nashriya/admin"><?php echo Yii::t('translate','Нашрияи мо')?></a><br />
<a href="index.php?r=konference/admin"><?php echo Yii::t('translate','Конфронсҳо')?></a><br />
<a href="index.php?r=durnamoi/admin"><?php echo Yii::t('translate','Дурнамои донишкада')?></a><br />
<a href="index.php?r=kafedra/admin"><?php echo Yii::t('translate','Кафедра')?></a><br />
<a href="index.php?r=polozhenie/admin"><?php echo Yii::t('translate','Низомномаи донишкада')?></a><br />
<a href="index.php?r=priem/admin"><?php echo Yii::t('translate','Қоидаи тартиботи дохилӣ')?></a><br />
<a href="index.php?r=risola/admin"><?php echo Yii::t('translate','Рисолати донишкада')?></a><br />
<a href="index.php?r=struktura/admin"><?php echo Yii::t('translate','Сохтори донишкада')?></a><br />
<a href="index.php?r=ustav/admin"><?php echo Yii::t('translate','Оинномаи донишкада')?></a><br />
<a href="index.php?r=zakon/admin"><?php echo Yii::t('translate','Қонуни маориф')?></a><br />
<a href="index.php?r=mail/admin"><?php echo Yii::t('translate','Ирсоли хабарҳо')?></a><br />
<a href="index.php?r=magistratura/admin"><?php echo Yii::t('translate','Магистратура')?></a><br />
<a href="index.php?r=aspirantura/admin"><?php echo Yii::t('translate','Аспирантура')?></a><br />
<a href="index.php?r=doktorantura/admin"><?php echo Yii::t('translate','Докторантура')?></a><br />
<a href="index.php?r=gallery/admin"><?php echo Yii::t('translate','Фотогалерея')?></a><br />
<a href="index.php?r=vstup/admin"><?php echo Yii::t('translate','Намунаи маводҳои дохилшавӣ')?></a><br />
<a href="index.php?r=tehn/admin"><?php echo Yii::t('translate','Парки Технологӣ')?></a><br />
<a href="index.php?r=tamos/admin"><?php echo Yii::t('translate','Тамос')?></a><br />
<a href="index.php?r=spec/admin"><?php echo Yii::t('translate','Ихтисосҳо')?></a><br />
<a href="index.php?r=pravila/admin"><?php echo Yii::t('translate','Қоидаҳои қабул')?></a><br />
<a href="index.php?r=munosibat/admin"><?php echo Yii::t('translate','Муносибатҳо')?></a><br />
<a href="index.php?r=imtihon/admin"><?php echo Yii::t('translate','Имтиҳонҳо')?></a><br />
<a href="index.php?r=fosilavi/admin"><?php echo Yii::t('translate','Таҳсили фосилавӣ')?></a><br />
<a href="index.php?r=otziv/admin"><?php echo Yii::t('translate','Алоқа бо мо')?></a><br />
<a href="index.php?r=hujjat/admin"><?php echo Yii::t('translate','Ҳуҷҷатҳои меъёрӣ')?></a><br />
<a href="index.php?r=hatmkunanda/admin"><?php echo Yii::t('translate','Хатмкунанда')?></a><br />
<a href="index.php?r=barnoma/admin"><?php echo Yii::t('translate','Барномаҳои байналхалқӣ')?></a><br />
<a href="index.php?r=muntamos/admin"><?php echo Yii::t('translate','Тамос')?></a><br />
<a href="index.php?r=mtesti/admin"><?php echo Yii::t('translate','Маркази Тестӣ')?></a><br />
<a href="index.php?r=mtamos/admin"><?php echo Yii::t('translate','Тамос')?></a><br />