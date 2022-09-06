<?php
/* @var $this FakultetController */
/* @var $model Fakultet */

$this->breadcrumbs=array(
	'Fakultets'=>array('index'),
	$model->id_fakultet=>array('view','id'=>$model->id_fakultet),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fakultet', 'url'=>array('index')),
	array('label'=>'Create Fakultet', 'url'=>array('create')),
	array('label'=>'View Fakultet', 'url'=>array('view', 'id'=>$model->id_fakultet)),
	array('label'=>'Manage Fakultet', 'url'=>array('admin')),
);
?>

<h1>Update Fakultet <?php echo $model->id_fakultet; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>