<?php
/* @var $this OtzivController */
/* @var $model Otziv */

$this->breadcrumbs=array(
	'Otzivs'=>array('index'),
	$model->name=>array('view','id'=>$model->id_otziv),
	'Update',
);

$this->menu=array(
	array('label'=>'List Otziv', 'url'=>array('index')),
	array('label'=>'Create Otziv', 'url'=>array('create')),
	array('label'=>'View Otziv', 'url'=>array('view', 'id'=>$model->id_otziv)),
	array('label'=>'Manage Otziv', 'url'=>array('admin')),
);
?>

<h1>Update Otziv <?php echo $model->id_otziv; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>