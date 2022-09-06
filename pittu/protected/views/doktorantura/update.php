<?php
/* @var $this DoktoranturaController */
/* @var $model Doktorantura */

$this->breadcrumbs=array(
	'Doktoranturas'=>array('index'),
	$model->id_dok=>array('view','id'=>$model->id_dok),
	'Update',
);

$this->menu=array(
	array('label'=>'List Doktorantura', 'url'=>array('index')),
	array('label'=>'Create Doktorantura', 'url'=>array('create')),
	array('label'=>'View Doktorantura', 'url'=>array('view', 'id'=>$model->id_dok)),
	array('label'=>'Manage Doktorantura', 'url'=>array('admin')),
);
?>

<h1>Update Doktorantura <?php echo $model->id_dok; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>