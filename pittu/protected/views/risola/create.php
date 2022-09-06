<?php
/* @var $this RisolaController */
/* @var $model Risola */

$this->breadcrumbs=array(
	'Risolas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Risola', 'url'=>array('index')),
	array('label'=>'Manage Risola', 'url'=>array('admin')),
);
?>

<h1>Create Risola</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>