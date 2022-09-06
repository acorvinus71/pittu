<?php
/* @var $this RisolaController */
/* @var $model Risola */

$this->breadcrumbs=array(
	'Risolas'=>array('index'),
	$model->id_risola=>array('view','id'=>$model->id_risola),
	'Update',
);

$this->menu=array(
	array('label'=>'List Risola', 'url'=>array('index')),
	array('label'=>'Create Risola', 'url'=>array('create')),
	array('label'=>'View Risola', 'url'=>array('view', 'id'=>$model->id_risola)),
	array('label'=>'Manage Risola', 'url'=>array('admin')),
);
?>

<h1>Update Risola <?php echo $model->id_risola; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>