<?php
/* @var $this PriemController */
/* @var $model Priem */

$this->breadcrumbs=array(
	'Priems'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Priem', 'url'=>array('index')),
	array('label'=>'Create Priem', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#priem-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Priems</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'priem-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_priem',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_info',
		'ru_info',
		/*
		'en_info',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
