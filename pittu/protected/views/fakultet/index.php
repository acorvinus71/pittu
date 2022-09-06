<?php
/* @var $this FakultetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fakultets',
);

$this->menu=array(
	array('label'=>'Create Fakultet', 'url'=>array('create')),
	array('label'=>'Manage Fakultet', 'url'=>array('admin')),
);
?>

<h1>Fakultets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
