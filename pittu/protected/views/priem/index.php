<?php
/* @var $this PriemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Priems',
);

$this->menu=array(
	array('label'=>'Create Priem', 'url'=>array('create')),
	array('label'=>'Manage Priem', 'url'=>array('admin')),
);
?>

<h1>Priems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
