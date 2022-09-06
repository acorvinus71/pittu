<?php
/* @var $this RisolaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Risolas',
);

$this->menu=array(
	array('label'=>'Create Risola', 'url'=>array('create')),
	array('label'=>'Manage Risola', 'url'=>array('admin')),
);
?>

<h1>Risolas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
