<?php
/* @var $this UstavController */
/* @var $model Ustav */

$this->breadcrumbs=array(
	'Ustavs'=>array('index'),
	$model->id_ustav=>array('view','id'=>$model->id_ustav),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ustav', 'url'=>array('index')),
	array('label'=>'Create Ustav', 'url'=>array('create')),
	array('label'=>'View Ustav', 'url'=>array('view', 'id'=>$model->id_ustav)),
	array('label'=>'Manage Ustav', 'url'=>array('admin')),
);
?>

<h1>Update Ustav <?php echo $model->id_ustav; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>