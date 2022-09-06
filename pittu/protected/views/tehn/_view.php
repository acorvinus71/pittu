<?php
/* @var $this TehnController */
/* @var $data Tehn */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tehn')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tehn), array('view', 'id'=>$data->id_tehn)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_zagalovok')); ?>:</b>
	<?php echo CHtml::encode($data->tj_zagalovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_zagalovok')); ?>:</b>
	<?php echo CHtml::encode($data->ru_zagalovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_zagalovok')); ?>:</b>
	<?php echo CHtml::encode($data->en_zagalovok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_text1')); ?>:</b>
	<?php echo CHtml::encode($data->tj_text1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_text1')); ?>:</b>
	<?php echo CHtml::encode($data->ru_text1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_text1')); ?>:</b>
	<?php echo CHtml::encode($data->en_text1); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('img1')); ?>:</b>
	<?php echo CHtml::encode($data->img1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_text2')); ?>:</b>
	<?php echo CHtml::encode($data->tj_text2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_text2')); ?>:</b>
	<?php echo CHtml::encode($data->ru_text2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_text2')); ?>:</b>
	<?php echo CHtml::encode($data->en_text2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img2')); ?>:</b>
	<?php echo CHtml::encode($data->img2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_text3')); ?>:</b>
	<?php echo CHtml::encode($data->tj_text3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_text3')); ?>:</b>
	<?php echo CHtml::encode($data->ru_text3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_text3')); ?>:</b>
	<?php echo CHtml::encode($data->en_text3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img3')); ?>:</b>
	<?php echo CHtml::encode($data->img3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_text4')); ?>:</b>
	<?php echo CHtml::encode($data->tj_text4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_text4')); ?>:</b>
	<?php echo CHtml::encode($data->ru_text4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_text4')); ?>:</b>
	<?php echo CHtml::encode($data->en_text4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img4')); ?>:</b>
	<?php echo CHtml::encode($data->img4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tj_text5')); ?>:</b>
	<?php echo CHtml::encode($data->tj_text5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ru_text5')); ?>:</b>
	<?php echo CHtml::encode($data->ru_text5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('en_text5')); ?>:</b>
	<?php echo CHtml::encode($data->en_text5); ?>
	<br />

	*/ ?>

</div>