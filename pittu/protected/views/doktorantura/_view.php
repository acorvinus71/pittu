<?php
/* @var $this DoktoranturaController */
/* @var $data Doktorantura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dok')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dok), array('view', 'id'=>$data->id_dok)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shifr')); ?>:</b>
	<?php echo CHtml::encode($data->shifr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_ilm')); ?>:</b>
	<?php echo CHtml::encode($data->tj_ilm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_ilm')); ?>:</b>
	<?php echo CHtml::encode($data->ru_ilm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_ilm')); ?>:</b>
	<?php echo CHtml::encode($data->en_ilm); ?>
	<br />


</div>