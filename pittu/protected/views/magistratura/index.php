<?php
/* @var $this MagistraturaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Magistraturas',
);

$this->menu=array(
	array('label'=>'Create Magistratura', 'url'=>array('create')),
	array('label'=>'Manage Magistratura', 'url'=>array('admin')),
);
?>

<h1>Magistraturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
