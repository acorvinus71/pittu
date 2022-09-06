<?php
/* @var $this TarihController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tarihs',
);

$this->menu=array(
	array('label'=>'Create Tarih', 'url'=>array('create')),
	array('label'=>'Manage Tarih', 'url'=>array('admin')),
);
?>

<h1>Tarihs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
