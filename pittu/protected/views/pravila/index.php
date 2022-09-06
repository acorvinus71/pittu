<?php
/* @var $this PravilaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pravilas',
);

$this->menu=array(
	array('label'=>'Create Pravila', 'url'=>array('create')),
	array('label'=>'Manage Pravila', 'url'=>array('admin')),
);
?>

<h1>Pravilas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
