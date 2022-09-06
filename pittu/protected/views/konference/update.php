<?php
/* @var $this KonferenceController */
/* @var $model Konference */

$this->breadcrumbs=array(
	'Konferences'=>array('index'),
	$model->id_konf=>array('view','id'=>$model->id_konf),
	'Update',
);

$this->menu=array(
	array('label'=>'List Konference', 'url'=>array('index')),
	array('label'=>'Create Konference', 'url'=>array('create')),
	array('label'=>'View Konference', 'url'=>array('view', 'id'=>$model->id_konf)),
	array('label'=>'Manage Konference', 'url'=>array('admin')),
);
?>

<h1>Update Konference <?php echo $model->id_konf; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>