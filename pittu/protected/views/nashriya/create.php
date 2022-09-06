<?php
/* @var $this NashriyaController */
/* @var $model Nashriya */

$this->breadcrumbs=array(
	'Nashriyas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nashriya', 'url'=>array('index')),
	array('label'=>'Manage Nashriya', 'url'=>array('admin')),
);
?>

<h1>Create Nashriya</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>