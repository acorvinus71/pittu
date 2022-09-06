<?php
/* @var $this AspiranturaController */
/* @var $model Aspirantura */

$this->breadcrumbs=array(
	'Aspiranturas'=>array('index'),
	$model->id_asp=>array('view','id'=>$model->id_asp),
	'Update',
);

$this->menu=array(
	array('label'=>'List Aspirantura', 'url'=>array('index')),
	array('label'=>'Create Aspirantura', 'url'=>array('create')),
	array('label'=>'View Aspirantura', 'url'=>array('view', 'id'=>$model->id_asp)),
	array('label'=>'Manage Aspirantura', 'url'=>array('admin')),
);
?>

<h1>Update Aspirantura <?php echo $model->id_asp; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>