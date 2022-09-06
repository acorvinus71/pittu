<?php
/* @var $this BarnomaController */
/* @var $model Barnoma */

$this->breadcrumbs=array(
	'Barnomas'=>array('index'),
	$model->id_bar=>array('view','id'=>$model->id_bar),
	'Update',
);

$this->menu=array(
	array('label'=>'List Barnoma', 'url'=>array('index')),
	array('label'=>'Create Barnoma', 'url'=>array('create')),
	array('label'=>'View Barnoma', 'url'=>array('view', 'id'=>$model->id_bar)),
	array('label'=>'Manage Barnoma', 'url'=>array('admin')),
);
?>

<h1>Update Barnoma <?php echo $model->id_bar; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>