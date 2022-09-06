<?php
/* @var $this MunosibatController */
/* @var $model Munosibat */

$this->breadcrumbs=array(
	'Munosibats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Munosibat', 'url'=>array('index')),
	array('label'=>'Manage Munosibat', 'url'=>array('admin')),
);
?>

<h1>Create Munosibat</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>