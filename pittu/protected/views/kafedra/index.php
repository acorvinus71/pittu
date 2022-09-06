<?php
/* @var $this KafedraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kafedras',
);

$this->menu=array(
	array('label'=>'Create Kafedra', 'url'=>array('create')),
	array('label'=>'Manage Kafedra', 'url'=>array('admin')),
);
?>

<h1>Kafedras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
