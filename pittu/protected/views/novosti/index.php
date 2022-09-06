<?php
/* @var $this NovostiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Novostis',
);

$this->menu=array(
	array('label'=>'Create Novosti', 'url'=>array('create')),
	array('label'=>'Manage Novosti', 'url'=>array('admin')),
);
?>

<h1>Novostis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
