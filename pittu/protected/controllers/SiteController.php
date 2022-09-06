<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	
	

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	
	public function actionIndex()
	{
		// Set up several flashes
// (this should be done somewhere in controller, of course).
$user = Yii::app()->getComponent('user');
$user->setFlash(
    'success',
    "✓ Хуш омадед ба Донишкадаи политехникии Донишгоҳи техникии Тоҷикистон."
);
$user->setFlash(
    'info',
    "<strong>Heads up!</strong> I'm a valuable information!."
);
$user->setFlash(
    'warning',
    "<strong>Warning!</strong> Check yourself, you're not looking too good."
);
$user->setFlash(
    'error',
    '<strong>Oh snap!</strong> Change something and try submitting again.'
);
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}
	
	//Меню донишкада
	public function actionUstav()
	{
		 $this->render('ustav');
	}
	public function actionMtamos()
	{
		 $this->render('mtamos');
	}
	public function actionConfe()
	{
		 $this->render('confe');
	}
	public function actionJadval()
	{
		 $this->render('jadval');
	}
	public function actionVazifa()
	{
		 $this->render('vazifa');
	}
	public function actionSoxt()
	{
		 $this->render('soxt');
	}
	public function actionTartib()
	{
		 $this->render('tartib');
	}
	public function actionAhborot()
	{
		 $this->render('ahborot');
	}
	public function actionMtesti()
	{
		 $this->render('mtesti');
	}
	public function actionMun_tamos()
	{
		 $this->render('mun_tamos');
	}
	public function actionBarnoma()
	{
		 $this->render('barnoma');
	}
public function actionZakon()
	{
		 $this->render('zakon');
	}
	public function actionHujjat()
	{
		 $this->render('hujjat');
	}
		public function actionHatmkunanda()
	{
		 $this->render('hatmkunanda');
	}
public function actionPolozhenie()
	{
		 $this->render('polozhenie');
	}
public function actionDurnamoi()
	{
		 $this->render('durnamoi');
	}
public function actionPriem()
	{
		 $this->render('priem');
	}
public function actionStructura()
	{
		 $this->render('structura');
	}
public function actionRisola()
	{
		 $this->render('risola');
	}
public function actionTarih()
	{
		 $this->render('tarih');
	}
	//Меню Факультет
public function actionIktisod()
	{
		 $this->render('iktisod');
	}
public function actionTechnolog()
	{
		 $this->render('technolog');
	}
public function actionEnergy()
	{
		 $this->render('energy');
	}
public function actionSohtmon()
	{
		 $this->render('sohtmon');
	}
// Меню Кафедра
public function actionIdora()
	{
		 $this->render('idora');
	}
public function actionFinansi()
	{
		 $this->render('finansi');
	}
public function actionMathematics()
	{
		 $this->render('Mathematics');
	}
public function actionStroitelstvo()
	{
		 $this->render('stroitelstvo');
	}
public function actionProgramirovanie()
	{
		 $this->render('Programirovanie');
	}
public function actionGosudarstvenniy()
	{
		 $this->render('gosudarstvenniy');
	}	
public function actionHimiya()
	{
		 $this->render('himiya');
	}	
public function actionEnergosnabzhenie()
	{
		 $this->render('energosnabzhenie');
	}		
public function actionForeign()
	{
		 $this->render('foreign');
	}	
public function actionAgrotechnology()
	{
		 $this->render('agrotechnology');
	}
public function actionAutomobiles()
	{
		 $this->render('automobiles');
	}
public function actionTechnology()
	{
		 $this->render('technology');
	}
	public function actionIxtisos()
	{
		 $this->render('ixtisos');
	}
		public function actionMagistratura()
	{
		 $this->render('magistratura');
	}
		public function actionAspirantura()
	{
		 $this->render('aspirantura');
	}
		public function actionDoktorantura()
	{
		 $this->render('doktorantura');
	}	
//Munosibthoi baynalhalki
	public function actionMunosibat()
	{
		$this->render('munosibat');
	}
	public function actionTehn()
	{
		$this->render('tehn');
	}
		public function actionTamos()
	{
		$this->render('tamos');
	}
		public function actionPravila()
	{
		$this->render('pravila');
	}
		public function actionSpec()
	{
		$this->render('spec');
	}
		public function actionImtihon()
	{
		$this->render('imtihon');
	}
			public function actionVstup()
	{
		$this->render('vstup');
	}
		public function actionFosilavi()
	{
		$this->render('fosilavi');
	}
		public function actionGallery()
	{
		$this->render('gallery');
	}
	public function actionSahifaho()
	{
		$this->render('sahifaho');
	}
	public function actionPassword()
	{
		$this->render('password');
	}
	public function actionOtziv()
	{
		$this->render('otziv');
	}
	public function actionCreate()
	{
		$this->render('create');
	}
	/**
	 * This is the action to handle external exceptions.
	 */		
	 
	 public function actionLang()
	{
        $app = Yii::app();
        if (isset($_GET['_lang']))
        {
            $app->language = $_GET['_lang'];
            $app->session['_lang'] = $app->language;
        }
        else if (isset($app->session['_lang']))
        {
            $app->language = $app->session['_lang'];
        }
		$this->render('index');
	}
	 
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name=$model->name;
				$email=$model->email;
				$subject=$model->subject;
				$body=$model->body;
					$link=mysqli_connect('localhost','root','','kbtut');
					mysqli_query($link,'set names utf8');
					mysqli_query($link,"insert into otziv values(default,'$name','$email','$subject','$body',date(now()))");

				Yii::app()->user->setFlash('contact','Раҳмат барои саҳмгузорӣ.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
