<?php
/* @var $this MtestiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mtestis',
);

$this->menu=array(
	array('label'=>'Create Mtesti', 'url'=>array('create')),
	array('label'=>'Manage Mtesti', 'url'=>array('admin')),
);
?>

<h1>Mtestis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
