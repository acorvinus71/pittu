<?php
/* @var $this MagistraturaController */
/* @var $model Magistratura */

$this->breadcrumbs=array(
	'Magistraturas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Magistratura', 'url'=>array('index')),
	array('label'=>'Manage Magistratura', 'url'=>array('admin')),
);
?>

<h1>Create Magistratura</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>