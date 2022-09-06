<?php
/* @var $this DurnamoiController */
/* @var $model Durnamoi */

$this->breadcrumbs=array(
	'Durnamois'=>array('index'),
	$model->id_durnamoi=>array('view','id'=>$model->id_durnamoi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Durnamoi', 'url'=>array('index')),
	array('label'=>'Create Durnamoi', 'url'=>array('create')),
	array('label'=>'View Durnamoi', 'url'=>array('view', 'id'=>$model->id_durnamoi)),
	array('label'=>'Manage Durnamoi', 'url'=>array('admin')),
);
?>

<h1>Update Durnamoi <?php echo $model->id_durnamoi; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>