<?php
/* @var $this HujjatController */
/* @var $model Hujjat */

$this->breadcrumbs=array(
	'Hujjats'=>array('index'),
	$model->id_huj=>array('view','id'=>$model->id_huj),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hujjat', 'url'=>array('index')),
	array('label'=>'Create Hujjat', 'url'=>array('create')),
	array('label'=>'View Hujjat', 'url'=>array('view', 'id'=>$model->id_huj)),
	array('label'=>'Manage Hujjat', 'url'=>array('admin')),
);
?>

<h1>Update Hujjat <?php echo $model->id_huj; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>