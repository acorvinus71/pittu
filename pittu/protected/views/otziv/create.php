<?php
/* @var $this OtzivController */
/* @var $model Otziv */

$this->breadcrumbs=array(
	'Otzivs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Otziv', 'url'=>array('index')),
	array('label'=>'Manage Otziv', 'url'=>array('admin')),
);
?>

<h1>Create Otziv</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>