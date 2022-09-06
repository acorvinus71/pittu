<?php
/* @var $this TehnController */
/* @var $model Tehn */

$this->breadcrumbs=array(
	'Tehns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tehn', 'url'=>array('index')),
	array('label'=>'Manage Tehn', 'url'=>array('admin')),
);
?>

<h1>Create Tehn</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>