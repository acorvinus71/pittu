<?php
/* @var $this FosilaviController */
/* @var $model Fosilavi */

$this->breadcrumbs=array(
	'Fosilavis'=>array('index'),
	$model->id_fosilavi=>array('view','id'=>$model->id_fosilavi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fosilavi', 'url'=>array('index')),
	array('label'=>'Create Fosilavi', 'url'=>array('create')),
	array('label'=>'View Fosilavi', 'url'=>array('view', 'id'=>$model->id_fosilavi)),
	array('label'=>'Manage Fosilavi', 'url'=>array('admin')),
);
?>

<h1>Update Fosilavi <?php echo $model->id_fosilavi; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>