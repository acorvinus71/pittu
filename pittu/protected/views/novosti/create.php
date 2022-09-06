<?php
/* @var $this NovostiController */
/* @var $model Novosti */

$this->breadcrumbs=array(
	'Novostis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Novosti', 'url'=>array('index')),
	array('label'=>'Manage Novosti', 'url'=>array('admin')),
);
?>

<h1>Create Novosti</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>