<?php
/* @var $this VstupController */
/* @var $model Vstup */

$this->breadcrumbs=array(
	'Vstups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vstup', 'url'=>array('index')),
	array('label'=>'Manage Vstup', 'url'=>array('admin')),
);
?>

<h1>Create Vstup</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>