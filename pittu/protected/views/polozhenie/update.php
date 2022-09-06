<?php
/* @var $this PolozhenieController */
/* @var $model Polozhenie */

$this->breadcrumbs=array(
	'Polozhenies'=>array('index'),
	$model->id_polozhenie=>array('view','id'=>$model->id_polozhenie),
	'Update',
);

$this->menu=array(
	array('label'=>'List Polozhenie', 'url'=>array('index')),
	array('label'=>'Create Polozhenie', 'url'=>array('create')),
	array('label'=>'View Polozhenie', 'url'=>array('view', 'id'=>$model->id_polozhenie)),
	array('label'=>'Manage Polozhenie', 'url'=>array('admin')),
);
?>

<h1>Update Polozhenie <?php echo $model->id_polozhenie; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>