<?php
/* @var $this VstupController */
/* @var $model Vstup */

$this->breadcrumbs=array(
	'Vstups'=>array('index'),
	$model->id_vstup=>array('view','id'=>$model->id_vstup),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vstup', 'url'=>array('index')),
	array('label'=>'Create Vstup', 'url'=>array('create')),
	array('label'=>'View Vstup', 'url'=>array('view', 'id'=>$model->id_vstup)),
	array('label'=>'Manage Vstup', 'url'=>array('admin')),
);
?>

<h1>Update Vstup <?php echo $model->id_vstup; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>