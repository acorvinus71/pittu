<?php if(!isset($_SESSION['_lang'])){
	Yii::app()->language = Yii::app()->session['_lang']='tj';}
	else {Yii::app()->language = Yii::app()->user->getState('_lang');}?>
<?php $this->pageTitle=Yii::app()->name . ' - Саҳифаи аввал';
$this->breadcrumbs=array(
	Yii::t('translate','Ахборот'),
);
?>
<?php if(!isset($_GET['search'])) echo"
<div class='alert alert-block alert-success'>
                            <button style='margin:2px 20px 0 0 !important' type='button' class='close' data-dismiss='alert'>
                                <i class='icon-remove'></i>
                            </button>

                            <i class='icon-ok green'></i>".Yii::t('translate','Хуш омадед ба Донишкадаи политехникии Донишгоҳи техникии Тоҷикистон')."
                        </div>"; ?>


<?php 
$l=Yii::app()->language = Yii::app()->user->getState('_lang');
require_once dirname(__FILE__) . '/../site/conn.php';
$num = 4;
if(isset($_GET['page']))
$page = $_GET['page'];
else
$page=-1;
if(isset($_GET['search']) && $l=='tj'){$result = mysqli_query($link,"SELECT COUNT(*), novosti.id_novost FROM novosti where tj_zagolovok like '%".$_GET['search']."%'");}
elseif(isset($_GET['search']) && $l==false){$result = mysqli_query($link,"SELECT COUNT(*), novosti.id_novost FROM novosti where tj_zagolovok like '%".$_GET['search']."%'");}
elseif(isset($_GET['search']) && $l=='ru'){$result = mysqli_query($link,"SELECT COUNT(*), novosti.id_novost FROM novosti where ru_zagolovok like '%".$_GET['search']."%'");}
elseif(isset($_GET['search']) && $l=='en'){$result = mysqli_query($link,"SELECT COUNT(*), novosti.id_novost FROM novosti where en_zagolovok like '%".$_GET['search']."%'");}
else{
$result = mysqli_query($link,"SELECT COUNT(*), novosti.id_novost FROM novosti");}
$temp = mysqli_fetch_array($result);
$posts = $temp[0];
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
$page = intval($page);
if(!isset($page) or $page <0) $page = 1;
if($page > $total) $page = $total;
$start = ($page * $num) - $num;
// Проверяем нужны ли стрелки назад
if(isset($_GET['search']) && $l=='tj'){
$sql= "SELECT * FROM novosti where tj_zagolovok like '%".$_GET['search']."%' order by sanai_hamroh desc LIMIT $start, $num";}
elseif(isset($_GET['search']) && $l==false){
$sql= "SELECT * FROM novosti where tj_zagolovok like '%".$_GET['search']."%' order by sanai_hamroh desc LIMIT $start, $num";}
elseif(isset($_GET['search']) && $l=='ru'){
$sql= "SELECT * FROM novosti where ru_zagolovok like '%".$_GET['search']."%' order by sanai_hamroh desc LIMIT $start, $num";}
elseif(isset($_GET['search']) && $l=='en'){
$sql= "SELECT * FROM novosti where en_zagolovok like '%".$_GET['search']."%' order by sanai_hamroh desc LIMIT $start, $num";}
else
{$sql = "SELECT * FROM novosti order by sanai_hamroh desc,id_novost desc LIMIT $start, $num"; }
$rs_result = mysqli_query($link,$sql); //run the query
if(!$rs_result) echo "<div class='alert alert-block alert-error'>
						<i class='icon-remove red'></i> ".Yii::t('translate','Ҳеҷ чиз ёфт нашуд!')."</div>";else
while ($res = mysqli_fetch_array($rs_result)) { 
if($l=='en')
	echo "<div class='novosti'><img src=images/".strip_tags($res[9]).">
	<h1>".strip_tags($res[3])."</h1>
	<p><span class='more'>".strip_tags($res[6])."</span></p>
	<p1>".Yii::t('translate','Санаи ҳамроҳкунӣ').": ".strip_tags($res[7])."</p1><br>
	<div class='fb-share-button' data-href='https://developers.facebook.com/docs/plugins/' data-layout='button_count'></div></div><hr>";
	elseif($l=='ru')
	echo "<div class='novosti'><img src=images/".strip_tags($res[9]).">
	<h1>".strip_tags($res[2])."</h1>
	<p><span class='more'>".strip_tags($res[5])."</span></p>
	<p1>".Yii::t('translate','Санаи ҳамроҳкунӣ').": ".strip_tags($res[7])."</p1><br>
	<div class='fb-share-button' data-href='https://developers.facebook.com/docs/plugins/' data-layout='button_count'></div></div><hr>";
	else
	echo "<div class='novosti'><img src=images/".strip_tags($res[9]).">
	<h1>".strip_tags($res[1])."</h1>
	<p><span class='more'>".strip_tags($res[4])."</span></p>
	<p1>".Yii::t('translate','Санаи ҳамроҳкунӣ').": ".strip_tags($res[7])."</p1><br>
	<div class='fb-share-button' data-href='https://developers.facebook.com/docs/plugins/' data-layout='button_count'></div></div><hr>";
	
}; 
if(!isset($_GET['search'])){
// Находим две ближайшие станицы с обоих краев, если они есть
if($page - 3 > 0) $page3left = "<a class='pagin' href=index.php?page=". ($page - 3) .">". ($page - 3) ."</a>"; else $page3left = "";
if($page - 2 > 0) $page2left = "<a class='pagin' href=index.php?page=". ($page - 2) .">". ($page - 2) ."</a>"; else $page2left = "";
if($page - 1 > 0) $page1left = "<a class='pagin' href=index.php?page=". ($page - 1) .">". ($page - 1) ."</a>"; else $page1left = "";

if($page + 3 <= $total) $page3right = "<a class='pagin' href=index.php?page=". ($page + 3) .">". ($page + 3) ."</a>"; else $page3right = "";
if($page + 2 <= $total) $page2right = "<a class='pagin' href=index.php?page=". ($page + 2) .">". ($page + 2) ."</a>"; else $page2right = "";
if($page + 1 <= $total) $page1right = "<a class='pagin' href=index.php?page=". ($page + 1) .">". ($page + 1) ."</a>"; else $page1right = "";

// Вывод меню если страниц больше одной
if ($page != 1) $pervpage = "<a class='pagin-left' href=index.php?page=1><i class='icon-fast-backward'></i></a><a class='pagin' href=index.php?page=". ($page - 1) ."><i class='icon-chevron-left'></i></a>"; else $pervpage = "<a class='pagin-left-disabled'><i class='icon-fast-backward'></i></a><a class='pagin-disabled'><i class='icon-chevron-left'></i></a>";
// Проверяем нужны ли стрелки вперед
if ($page != $total) $nextpage = "<a class='pagin' href=index.php?page=". ($page + 1) ."><i class='icon-chevron-right'></i></a><a class='pagin-right' href=index.php?page=" .$total. "><i class='icon-fast-forward'></i></a>"; else $nextpage = "<a class='pagin-disabled'><i class='icon-chevron-right'></i></a><a class='pagin-right-disabled'><i class='icon-fast-forward'></i></a>";}


else{
if($page - 3 > 0) $page3left = "<a class='pagin' href=index.php?page=". ($page - 3) ."&search=".$_GET['search'].">". ($page - 3) ."</a>"; else $page3left = "";
if($page - 2 > 0) $page2left = "<a class='pagin' href=index.php?page=". ($page - 2) ."&search=".$_GET['search'].">". ($page - 2) ."</a>"; else $page2left = "";
if($page - 1 > 0) $page1left = "<a class='pagin' href=index.php?page=". ($page - 1) ."&search=".$_GET['search'].">". ($page - 1) ."</a>"; else $page1left = "";

if($page + 3 <= $total) $page3right = "<a class='pagin' href=index.php?page=". ($page + 3) ."&search=".$_GET['search'].">". ($page + 3) ."</a>"; else $page3right = "";
if($page + 2 <= $total) $page2right = "<a class='pagin' href=index.php?page=". ($page + 2) ."&search=".$_GET['search'].">". ($page + 2) ."</a>"; else $page2right = "";
if($page + 1 <= $total) $page1right = "<a class='pagin' href=index.php?page=". ($page + 1) ."&search=".$_GET['search'].">". ($page + 1) ."</a>"; else $page1right = "";

// Вывод меню если страниц больше одной
if ($page != 1) $pervpage = "<a class='pagin-left' href=index.php?page=1&search=".$_GET['search']."><i class='icon-fast-backward'></i></a><a class='pagin' href=index.php?page=". ($page - 1) ."&search=".$_GET['search']."><i class='icon-chevron-left'></i></a>"; else $pervpage = "<a class='pagin-left-disabled'><i class='icon-fast-backward'></i></a><a class='pagin-disabled'><i class='icon-chevron-left'></i></a>";
// Проверяем нужны ли стрелки вперед
if ($page != $total) $nextpage = "<a class='pagin' href=index.php?page=". ($page + 1) ."&search=".$_GET['search']."><i class='icon-chevron-right'></i></a><a class='pagin-right' href=index.php?page=" .$total. "&search=".$_GET['search']."><i class='icon-fast-forward'></i></a>"; else $nextpage = "<a class='pagin-disabled'><i class='icon-chevron-right'></i></a><a class='pagin-right-disabled'><i class='icon-fast-forward'></i></a>";}
?>

<div style="width:100%; text-align:center; margin-top:50px; margin:0 auto">
<?php if ($total > 1)
echo $pervpage.$page3left.$page2left.$page1left."<b><a class='pagin-active'>".$page."</a></b>".$page1right.$page2right.$page3right.$nextpage;?>
</div>

<?php
//Отправка e-mail
$q=mysqli_query($link,"select * from status, mail, novosti where status.status=0 and mail.id_mail=status.id_mail and novosti.id_novost=status.id_novost");
while($r=mysqli_fetch_array($q)){
//if(mail($r['email'], $r['tj_zagolovok'], $r['tj_text']))
mysqli_query($link,"update status set status=1 where id_stat=".$r['id_stat'].";");
}
?>