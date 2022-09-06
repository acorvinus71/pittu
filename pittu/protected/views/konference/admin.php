<?php
/* @var $this KonferenceController */
/* @var $model Konference */

$this->breadcrumbs=array(
	'Konferences'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Konference', 'url'=>array('index')),
	array('label'=>'Create Konference', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#konference-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Konferences</h1>

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
	'id'=>'konference-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_konf',
		'tj_tema',
		'ru_tema',
		'en_tema',
		'tj_adres',
		'ru_adres',
		/*
		'en_adres',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
