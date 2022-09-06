<?php
/* @var $this PriemController */
/* @var $model Priem */

$this->breadcrumbs=array(
	'Priems'=>array('index'),
	$model->id_priem=>array('view','id'=>$model->id_priem),
	'Update',
);

$this->menu=array(
	array('label'=>'List Priem', 'url'=>array('index')),
	array('label'=>'Create Priem', 'url'=>array('create')),
	array('label'=>'View Priem', 'url'=>array('view', 'id'=>$model->id_priem)),
	array('label'=>'Manage Priem', 'url'=>array('admin')),
);
?>

<h1>Update Priem <?php echo $model->id_priem; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>