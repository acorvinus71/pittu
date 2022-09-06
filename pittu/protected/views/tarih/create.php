<?php
/* @var $this TarihController */
/* @var $model Tarih */

$this->breadcrumbs=array(
	'Tarihs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tarih', 'url'=>array('index')),
	array('label'=>'Manage Tarih', 'url'=>array('admin')),
);
?>

<h1>Create Tarih</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>