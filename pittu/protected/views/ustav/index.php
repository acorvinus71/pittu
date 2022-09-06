<?php
/* @var $this UstavController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ustavs',
);

$this->menu=array(
	array('label'=>'Create Ustav', 'url'=>array('create')),
	array('label'=>'Manage Ustav', 'url'=>array('admin')),
);
?>

<h1>Ustavs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
