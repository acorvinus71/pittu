<?php
/* @var $this KonferenceController */
/* @var $model Konference */

$this->breadcrumbs=array(
	'Konferences'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Konference', 'url'=>array('index')),
	array('label'=>'Manage Konference', 'url'=>array('admin')),
);
?>

<h1>Create Konference</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>