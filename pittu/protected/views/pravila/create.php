<?php
/* @var $this PravilaController */
/* @var $model Pravila */

$this->breadcrumbs=array(
	'Pravilas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pravila', 'url'=>array('index')),
	array('label'=>'Manage Pravila', 'url'=>array('admin')),
);
?>

<h1>Create Pravila</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>