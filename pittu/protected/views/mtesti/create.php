<?php
/* @var $this MtestiController */
/* @var $model Mtesti */

$this->breadcrumbs=array(
	'Mtestis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mtesti', 'url'=>array('index')),
	array('label'=>'Manage Mtesti', 'url'=>array('admin')),
);
?>

<h1>Create Mtesti</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>