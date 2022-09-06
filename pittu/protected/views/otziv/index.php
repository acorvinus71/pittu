<?php
/* @var $this OtzivController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Otzivs',
);

$this->menu=array(
	array('label'=>'Create Otziv', 'url'=>array('create')),
	array('label'=>'Manage Otziv', 'url'=>array('admin')),
);
?>

<h1>Otzivs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
