<?php
/* @var $this PolozhenieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Polozhenies',
);

$this->menu=array(
	array('label'=>'Create Polozhenie', 'url'=>array('create')),
	array('label'=>'Manage Polozhenie', 'url'=>array('admin')),
);
?>

<h1>Polozhenies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
