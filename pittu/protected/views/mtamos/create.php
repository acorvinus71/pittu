<?php
/* @var $this MtamosController */
/* @var $model Mtamos */

$this->breadcrumbs=array(
	'Mtamoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mtamos', 'url'=>array('index')),
	array('label'=>'Manage Mtamos', 'url'=>array('admin')),
);
?>

<h1>Create Mtamos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>