<?php
/* @var $this KonferenceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Konferences',
);

$this->menu=array(
	array('label'=>'Create Konference', 'url'=>array('create')),
	array('label'=>'Manage Konference', 'url'=>array('admin')),
);
?>

<h1>Konferences</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
