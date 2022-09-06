<?php
/* @var $this SpecController */
/* @var $model Spec */

$this->breadcrumbs=array(
	'Specs'=>array('index'),
	$model->id_pravila=>array('view','id'=>$model->id_pravila),
	'Update',
);

$this->menu=array(
	array('label'=>'List Spec', 'url'=>array('index')),
	array('label'=>'Create Spec', 'url'=>array('create')),
	array('label'=>'View Spec', 'url'=>array('view', 'id'=>$model->id_pravila)),
	array('label'=>'Manage Spec', 'url'=>array('admin')),
);
?>

<h1>Update Spec <?php echo $model->id_pravila; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>