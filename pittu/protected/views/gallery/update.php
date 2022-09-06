<?php
/* @var $this GalleryController */
/* @var $model Gallery */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	$model->id_gal=>array('view','id'=>$model->id_gal),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gallery', 'url'=>array('index')),
	array('label'=>'Create Gallery', 'url'=>array('create')),
	array('label'=>'View Gallery', 'url'=>array('view', 'id'=>$model->id_gal)),
	array('label'=>'Manage Gallery', 'url'=>array('admin')),
);
?>

<h1>Update Gallery <?php echo $model->id_gal; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>