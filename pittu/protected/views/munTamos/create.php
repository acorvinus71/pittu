<?php
/* @var $this MunTamosController */
/* @var $model MunTamos */

$this->breadcrumbs=array(
	'Mun Tamoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MunTamos', 'url'=>array('index')),
	array('label'=>'Manage MunTamos', 'url'=>array('admin')),
);
?>

<h1>Create MunTamos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>