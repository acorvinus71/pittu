<!DOCTYPE html>
<html lang="en">

<head>
	<?php Yii::app()->language = Yii::app()->user->getState('_lang');?>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <title><?php echo Yii::t('translate','Донишкадаи политехникии Донишгоҳи техникии Тоҷикистон') ?></title>
    <link href="images/favicon.png" rel="shortcut icon" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.min.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/ace.min.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/toggle.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/prettyPhoto.css" rel="stylesheet" />
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/read_more.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.prettyPhoto.js"></script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="navbar navbar-default" id="navbar">
<div class="navbar-container" id="navbar-container">
	<div class="navbar-brand-logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" style="height:80px"></div>
    <div class="navbar-header pull-left">
		<a class="navbar-brand" href="<?php echo $this->createURL('site/index') ?>">
	        <?php echo Yii::t('translate','Донишкадаи политехникии Донишгоҳи техникии Тоҷикистон') ?></a>
        <br><br><br><a href="<?php echo $this->createURL('site/index') ?>" class="navbar-brand" style="font-size:20px !important; width:100%; margin-top:-18px"><?php echo Yii::t('translate','Ба номи академик М.С.Осимӣ дар шаҳри Хуҷанд') ?></a><!-- /.brand -->
            
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
    <div id="lang">
<div  id="language-selector" style="float:right; margin:5px;">
    <?php 
        $this->widget('ext.widgets.LanguageSelector');
    ?>
</div>
    </div><!-- /lang -->
</div>
<?php Yii::app()->bootstrap->register(); ?>
<div class="main-container" id="main-container">
    <div class="main-container-inner">
    <!-- right -->
		<a class="menu-link" href="#menu">Menu</a>
		
    <script>
jQuery( document ).ready( function( $ ) {

	var $menu = $('#menu'),
	  $menulink = $('.menu-link'),
	  $menuTrigger = $('.has-submenu > a');

	$menulink.click(function(e) {
		e.preventDefault();
		$menulink.toggleClass('active');
		$menu.toggleClass('active');
	});

	$menuTrigger.click(function(e) {
		e.preventDefault();
		var $this = $(this);
		$this.toggleClass('active').next('ul').toggleClass('active');
	});

});
</script>
    <!-- /right -->
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>
        <div class="sidebar" id="sidebar">
         <ul class="nav">

<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
			    array('label'=>Yii::t('translate','Саҳифаи аввал'), 'url'=>array('/site/index')),
				array(
                        'label' =>Yii::t('translate','Донишкада'), 'url'=>'',
                        'items' => array(
                            array('label' =>Yii::t('translate','Таърихи донишкада'), 'url' =>array('site/tarih')),
							array('label' =>Yii::t('translate','Дурнамои донишкада'), 'url' =>array('site/durnamoi')),
							array('label' =>Yii::t('translate','Рисолати донишкада'), 'url' =>array('site/risola')),
							array('label' =>Yii::t('translate','Ҳуҷҷатҳои меъёрӣ'), 'url' =>array('site/hujjat')),
							array('label' =>Yii::t('translate','Сохтори Донишкада'), 'url' =>array('site/structura')),
							array('label' =>Yii::t('translate','Оинномаи донишкада'), 'url' =>array('site/ustav')),
							array('label' =>Yii::t('translate','Низомномаи донишкада'), 'url' =>array('site/polozhenie')),
							array('label' =>Yii::t('translate','Қоидаи тартиботи дохилӣ'), 'url' => array('site/priem')),
							array('label' =>Yii::t('translate','Қонуни маориф'), 'url' =>array('site/zakon')),
                        )
                    ),
				array(
                        'label' =>Yii::t('translate','Факултет'), 'url'=>'',
                        'items' => array(
                            array('label' =>Yii::t('translate','Муҳандисӣ- иқтисодӣ'), 'url' => array('site/iktisod')),
							array('label' =>Yii::t('translate','Технологӣ-иттилоотӣ'), 'url' => array('site/technolog')),
							array('label' =>Yii::t('translate','Муҳандисӣ - энергетикӣ'), 'url' => array('site/energy')),
							array('label' =>Yii::t('translate','Сохтмон ва Наклиёт'), 'url' => array('site/sohtmon')),
                        )
                    ),
				array(
                        'label' =>Yii::t('translate','Кафедра'), 'url'=>'',
                        'items' => array(
                            array('label' =>Yii::t('translate','Иқтисодиёт ва Идора'), 'url' =>array('site/idora')),
							array('label' =>Yii::t('translate','Молия ва қарз'), 'url' =>array('site/finansi')),
							array('label' =>Yii::t('translate','Математикаи олӣ ва физика'), 'url' =>array('site/mathematics')),
							array('label' =>Yii::t('translate','Сохтмон ва меъморӣ'), 'url' =>array('site/stroitelstvo')),
							array('label' =>Yii::t('translate','Барномарезӣ ва низомҳои иттилоотӣ'), 'url' =>array('site/programirovanie')),
							array('label' =>Yii::t('translate','Забони давлатӣ ва ҷомеашиносӣ'), 'url' =>array('site/gosudarstvenniy')),
							array('label' =>Yii::t('translate','Химия ва Технологияи маводи хӯрока'), 'url' =>array('site/himiya')),
							array('label' =>Yii::t('translate','Таъминоти барқ ва автоматика'), 'url' =>array('site/energosnabzhenie')),
							array('label' =>Yii::t('translate','Забонҳои хориҷӣ'), 'url' =>array('site/foreign')),
							array('label' =>Yii::t('translate','Агротехнология'), 'url' =>array('site/agrotechnology')),
							array('label' =>Yii::t('translate','Автомобилҳо ва Идоракунӣ дар Нақлиёт'), 'url' =>array('site/automobiles')),
							array('label' =>Yii::t('translate','Технология ва тарҳрезии маҳсулоти саноати сабук'), 'url' =>array('site/technology')),
                        )
                    ),
					array('label' =>Yii::t('translate','Ихтисосҳо'), 'url'=>array('site/ixtisos')),
					array(
                        'label' =>Yii::t('translate','Довталаб'), 'url'=>'',
                        'items' => array(
                            array('label' =>Yii::t('translate','Қоидаҳои қабул'), 'url' =>array('site/pravila')),
							array('label' =>Yii::t('translate','Ихтисосҳо'), 'url' => array('site/spec')),
							array('label' =>Yii::t('translate','Имтиҳонҳо'), 'url' =>  array('site/imtihon')),
							array('label' =>Yii::t('translate','Намунаи маводҳои дохилшавӣ'), 'url' => array('site/vstup')),
							array('label' =>Yii::t('translate','Ариза-онлайн'), 'url' => ''),
							array('label' =>Yii::t('translate','Таҳсили фосилавӣ'), 'url' =>  array('site/fosilavi')),
							array('label' =>Yii::t('translate','Суроғаи комиссияи қабул'), 'url' => ''),
                        )
                    ),
					array('label' =>Yii::t('translate','Донишҷӯ'), 'url'=>''),
					array('label' =>Yii::t('translate','Хатмкунанда'), 'url'=>array('site/hatmkunanda')),
					array(
                        'label' =>Yii::t('translate','Илм'), 'url'=>'',
                        'items' => array(
                            array('label' =>Yii::t('translate','Магистратура'), 'url' => array('site/magistratura')),
							array('label' =>Yii::t('translate','Аспирантура'), 'url' => array('site/aspirantura')),
							array('label' =>Yii::t('translate','Докторантура'), 'url' => array('site/doktorantura')),
							array('label' =>Yii::t('translate','Мавзӯъҳои илмӣ'), 'url' => ''),
							array('label' =>Yii::t('translate','Корҳои методӣ'), 'url' => ''),
							array('label' =>Yii::t('translate','Корҳои илмии донишҷӯён'), 'url' => ''),
							array('label' =>Yii::t('translate','Мақолаҳо илмӣ'), 'url' => ''),
							array('label' =>Yii::t('translate','Дастовардҳо'), 'url' => ''),
							array('label' =>Yii::t('translate','Ҷадвали раванди таълим'), 'url' => ''),
                        )
                    ),
					array(
                        'label' =>Yii::t('translate','Маркази Тестӣ'), 'url'=>'',
                        'items' => array(
							array('label' =>Yii::t('translate','Маркази Тестӣ'), 'url' => array('site/mtesti')),
                            array('label' =>Yii::t('translate','Ахборот'), 'url' => array('site/ahborot')),
							array('label' =>Yii::t('translate','Тартиби гузаронидани имтиҳони маъмурӣ'), 'url' => array('site/tartib')),
							array('label' =>Yii::t('translate','Сохтори Маркази тестӣ'), 'url' => array('site/soxt')),
							array('label' =>Yii::t('translate','Вазифаҳои маркази тестӣ'), 'url' => array('site/vazifa')),
							array('label' =>Yii::t('translate','Маводҳои санҷишӣ'), 'url' => ''),
							array('label' =>Yii::t('translate','Ҷадвали имтиҳон'), 'url' => array('site/jadval')),
							array('label' =>Yii::t('translate','Конференсия'), 'url' => array('site/confe')),
							array('label' =>Yii::t('translate','Фотогалерея'), 'url' => array('site/gallery')),
							array('label' =>Yii::t('translate','Тамос'), 'url' => array('site/mtamos')),
                        )
                    ),
					array('label' =>Yii::t('translate','Парки Технологӣ'), 'url'=>array('site/tehn')),
					array(
                        'label' =>Yii::t('translate','Муносибатҳои байналхалқӣ'), 'url'=>'',
                        'items' => array(
							array('label' =>Yii::t('translate','Муносибатҳо'), 'url' =>array('site/munosibat')),
                            array('label' =>Yii::t('translate','Барномаҳои байналхалқӣ'), 'url' => array('site/barnoma')),
							array('label' =>Yii::t('translate','Тамос'), 'url' => array('site/mun_tamos'))
                        )
                    ),
					array(
                        'label' =>Yii::t('translate','Маркази Мартаба'), 'url'=>'',
                        'items' => array(
                            array('label' =>Yii::t('translate','Лоиҳаи UNIWORK'), 'url' => ''),
							array('label' =>Yii::t('translate','Тамос'), 'url' => '')
                        )
                    ),
					array('label' =>Yii::t('translate','Нашрия'), 'url'=>''),
					array('label' =>Yii::t('translate','Тамос'), 'url'=>array('site/tamos')),
				array('label'=>Yii::t('translate','Дохилшавӣ'), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>Yii::t('translate','Саҳифаҳо'), 'url'=>array('/site/sahifaho'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('translate','Сабт'), 'url'=>array('/site/create'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('translate','Ивази парол'), 'url'=>array('/site/password'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('translate','Алоқа бо мо'), 'url'=>array('/site/otziv'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>Yii::t('translate','Баромад').' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));?>
	</ul>
        <?php require_once dirname(__FILE__) . '/../site/mail.php'; ?>
        </div>
               <div class="main-content">
            <div class="breadcrumbs">
            <ul class="breadcrumb">
                    <?php if(isset($this->breadcrumbs) && !empty($this->breadcrumbs))
    echo "<i class='icon-home home-icon'></i>";?>
    <?php if(isset($this->breadcrumbs)):?>
    <?php $this->widget(
    'bootstrap.widgets.TbBreadcrumbs',
    array(
        'links' => $this->breadcrumbs)); ?>
	<?php endif?>    
    </ul><!-- .breadcrumb -->
                <div class="nav-search" id="nav-search">
                    <form class="form-search" action="index.php" method="get">
                        <span class="input-icon">
                            <input type="text" placeholder="<?php echo Yii::t('translate','Ҷустуҷў')?>..." class="nav-search-input" value="<?php if(isset($_GET['search']))echo $_GET['search']?>" name="search"/>
                            <i class="icon-search nav-search-icon"></i>
                        </span>
                    </form>
                </div><!-- #nav-search -->
            </div>
            
<table style="margin-top:-1px" width="100%"><tr><td valign="top">
                        <div class="page-content">
                       
                       <!--$this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'images/1.jpg', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam.'),
        array('image'=>'images/2.jpg', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam.'),
        array('image'=>'images/3.jpg', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam.'),
    ),
    ));--->


	<?php echo $content; ?>
</div></td><td valign="top" class="new" width="17%" style="border: 1px solid #ccc;border-width: 0 0 0 1px"><!-- /.main-content -->
            <nav id="menu" class="menu">
	<ul>
    <?php $this->beginContent('//site/rightbar');?>
	<?php echo $content; ?>
	<?php $this->endContent(); ?>
    </ul>
</nav>
</td></tr></table><!--/correct>   
    </div><!-- /.main-container-inner -->
            </div><!-- /.page-content -->
</div><!-- /.main-container -->

<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/ace.min.js"></script>
<div id="footer"><table align="center" width="950"><tr><td>&copy; Copyright 2015 - <?php echo date('Y'); ?> <?php echo Yii::t('translate','Донишкадаи политехникии Донишгоҳи техникии Тоҷикистон') ?></td>
<td width="240"><i class="icon-phone"></i> <?php echo Yii::t('translate','Телефон/Факс')?>: (+992 3422) 6-04-54</td></tr>
<tr><td><i class="icon-home"></i> <?php echo Yii::t('translate','Сӯроға: 735700, Ҷумҳурии Тоҷикистон, ш.Хуҷанд, кӯч.Ленин 226')?></td><td><i class="icon-envelope"></i> Email: <a href="mailto:kbtut@kbtut.khujandi.com">kbtut@kbtut.khujandi.com</a></td>
</tr>
<tr><td><i class="icon-cog"></i> <?php echo Yii::t('translate','Рушди сомона')?>: <a href="mailto:marvellousboy@mail.ru">Hasan Aliboev</a> & <a href="mailto:parvizich_36@mail.ru">Parviz Akmalkhodjaev</a></td><td><i class="icon-star"></i> <a href="<?php echo $this->createURL('site/contact')?>"><?php echo Yii::t('translate','Алоқа бо мо');?></a></td></tr>
</table>
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse" style="position: static !important; float:right; margin-top:-16px; margin-bottom:-20px; margin-right:-10px">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div>
<div class="footer">
&copy; Copyright 2015 - <?php echo date('Y'); ?> <?php echo Yii::t('translate','Донишкадаи политехникии Донишгоҳи техникии Тоҷикистон') ?><br>
<i class="icon-home"></i> <?php echo Yii::t('translate','Сӯроға: 735700, Ҷумҳурии Тоҷикистон, ш.Хуҷанд, кӯч.Ленин 226')?><br>
<i class="icon-phone"></i> <?php echo Yii::t('translate','Телефон/Факс')?>: (+992 3422) 6-04-54<br>
<i class="icon-envelope"></i> Email: <a href="mailto:kbtut@kbtut.khujandi.com">kbtut@kbtut.khujandi.com</a><br>
<i class="icon-star"></i> <a href="<?php echo $this->createURL('site/contact')?>"><?php echo Yii::t('translate','Алоқа бо мо');?></a><br>
<i class="icon-cog"></i> <?php echo Yii::t('translate','Рушди сомона')?>: <a href="mailto:marvellousboy@mail.ru">Hasan Aliboev</a> & <a href="mailto:parvizich_36@mail.ru">Parviz Akmalkhodjaev</a>
</div>
</body>
</html>
