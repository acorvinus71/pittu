<?php
/* @var $this FakultetController */
/* @var $model Fakultet */

$this->breadcrumbs=array(
	'Fakultets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fakultet', 'url'=>array('index')),
	array('label'=>'Manage Fakultet', 'url'=>array('admin')),
);
?>

<h1>Create Fakultet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>