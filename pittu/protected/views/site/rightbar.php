    <table style="margin-top:10px; margin-bottom:10px"><tr><td style="background-color:#438eb9; color:#fff; text-transform:uppercase; text-align:center; width:180px; font-size:14px; padding:4px;"><?php echo Yii::t('translate','Нашрияи мо');?>!</td></tr>
    <tr><td style="padding:0">
    <?php 
		$link=mysqli_connect('localhost','root','','kbtut');
		mysqli_query($link,'set names utf8');
		$sql=mysqli_query($link,"select img from nashriya limit 1");
		$res=mysqli_fetch_array($sql);
		echo "<img style='margin-top:5px; border:solid 1px #438eb9; margin-bottom:15px' src=images/".$res[0]." width=180>";	
	?>
	</td></tr>
    <tr><td style="background-color:#438eb9; color:#fff; text-transform:uppercase; text-align:center; width:180px; font-size:14px; padding:4px"><?php echo Yii::t('translate','Конфронсҳо');?></td></tr>
    <tr><td style="padding:0; padding-top:5px">
    <?php
		$l=Yii::app()->language = Yii::app()->user->getState('_lang');
    	$sql=mysqli_query($link,"select * from konference");
		$lastElement = mysqli_num_rows($sql);
		$i=0;
		while($res=mysqli_fetch_array($sql)){
			$i++;
			if($i<> $lastElement+1 && $i<>1) echo "<hr style='margin:5px'>";
			if($l=='en')
			echo "<a target='_blank' href=".$res['en_adres'].">".$res['en_tema'];
			elseif($l=='ru')
			echo "<a target='_blank' href=".$res['ru_adres'].">".$res['ru_tema'];
			else
			echo "<a target='_blank' href=".$res['tj_adres'].">".$res['tj_tema'];
		}
	?>
    </td></tr>
    <tr><td><?php $this->widget('ext.googleAnalytics.EGoogleAnalyticsWidget',
			array('account'=>'UA-62307819-1','domainName'=>'kbtut.mcdir.ru')
			);?></td></tr>
    </table>
