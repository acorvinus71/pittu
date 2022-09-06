<?php
/* @var $this NashriyaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nashriyas',
);

$this->menu=array(
	array('label'=>'Create Nashriya', 'url'=>array('create')),
	array('label'=>'Manage Nashriya', 'url'=>array('admin')),
);
?>

<h1>Nashriyas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
