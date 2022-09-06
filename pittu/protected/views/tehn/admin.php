<?php
/* @var $this TehnController */
/* @var $model Tehn */

$this->breadcrumbs=array(
	'Tehns'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tehn', 'url'=>array('index')),
	array('label'=>'Create Tehn', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tehn-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tehns</h1>

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
	'id'=>'tehn-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_tehn',
		'tj_zagalovok',
		'ru_zagalovok',
		'en_zagalovok',
		'tj_text1',
		'ru_text1',
		/*
		'en_text1',
		'img1',
		'tj_text2',
		'ru_text2',
		'en_text2',
		'img2',
		'tj_text3',
		'ru_text3',
		'en_text3',
		'img3',
		'tj_text4',
		'ru_text4',
		'en_text4',
		'img4',
		'tj_text5',
		'ru_text5',
		'en_text5',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
