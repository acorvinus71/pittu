<?php
/* @var $this VstupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vstups',
);

$this->menu=array(
	array('label'=>'Create Vstup', 'url'=>array('create')),
	array('label'=>'Manage Vstup', 'url'=>array('admin')),
);
?>

<h1>Vstups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
