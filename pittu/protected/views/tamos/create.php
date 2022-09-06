<?php
/* @var $this TamosController */
/* @var $model Tamos */

$this->breadcrumbs=array(
	'Tamoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tamos', 'url'=>array('index')),
	array('label'=>'Manage Tamos', 'url'=>array('admin')),
);
?>

<h1>Create Tamos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>