<?php
/* @var $this BarnomaController */
/* @var $model Barnoma */

$this->breadcrumbs=array(
	'Barnomas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Barnoma', 'url'=>array('index')),
	array('label'=>'Manage Barnoma', 'url'=>array('admin')),
);
?>

<h1>Create Barnoma</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>