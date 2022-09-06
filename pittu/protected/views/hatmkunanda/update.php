<?php
/* @var $this HatmkunandaController */
/* @var $model Hatmkunanda */

$this->breadcrumbs=array(
	'Hatmkunandas'=>array('index'),
	$model->id_hatm=>array('view','id'=>$model->id_hatm),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hatmkunanda', 'url'=>array('index')),
	array('label'=>'Create Hatmkunanda', 'url'=>array('create')),
	array('label'=>'View Hatmkunanda', 'url'=>array('view', 'id'=>$model->id_hatm)),
	array('label'=>'Manage Hatmkunanda', 'url'=>array('admin')),
);
?>

<h1>Update Hatmkunanda <?php echo $model->id_hatm; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>