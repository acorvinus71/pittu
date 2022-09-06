<?php
/* @var $this DurnamoiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Durnamois',
);

$this->menu=array(
	array('label'=>'Create Durnamoi', 'url'=>array('create')),
	array('label'=>'Manage Durnamoi', 'url'=>array('admin')),
);
?>

<h1>Durnamois</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
