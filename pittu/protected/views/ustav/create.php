<?php
/* @var $this UstavController */
/* @var $model Ustav */

$this->breadcrumbs=array(
	'Ustavs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ustav', 'url'=>array('index')),
	array('label'=>'Manage Ustav', 'url'=>array('admin')),
);
?>

<h1>Create Ustav</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>