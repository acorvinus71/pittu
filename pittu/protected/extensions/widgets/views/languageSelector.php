<?php echo CHtml::form(); ?>
    <div id="language-select">
        <?php 
        if(sizeof($languages) < 4) {
            $lastElement = end($languages);
            foreach($languages as $key=>$lang) {
                if($key != $currentLang) {
                    echo CHtml::ajaxLink($lang,'',
                        array(
                            'type'=>'post',
                            'data'=>'_lang='.$key.'&YII_CSRF_TOKEN='.Yii::app()->request->csrfToken,
                            'success' => 'function(data) {window.location.reload();}'
                        ),
                        array()
                    );
                } else echo '<b>'.$lang.'</b>';
                if($lang != $lastElement) echo ' | ';
            }
        }
		// Если хотим видить в виде флагов то используем этот код
		/*
		if(sizeof($languages) < 4) {
            $lastElement = end($languages);
            foreach($languages as $key=>$lang) {
                if($key != $currentLang) {
                    echo CHtml::ajaxLink('<img src="images/'.$key.'.png" title="'.$lang.'" style="padding-left:8px;" width=36 height=21>','',
                        array(
                            'type'=>'post',
                            'data'=>'_lang='.$key.'&YII_CSRF_TOKEN='.Yii::app()->request->csrfToken,
                            'success' => 'function(data) {window.location.reload();}'
                        ),
                        array()
                    );
                } else echo '<img src="images/'.$key.'.png" title="'.$lang.'" style="padding-left:8px;" width=36 height=21>';
                
            }
        }
		*/
        else {
            echo CHtml::dropDownList('_lang', $currentLang, $languages,
                array(
                    'submit' => '',
                    'csrf'=>true,
                )
            ); 
        }
        ?>
    </div>
<?php echo CHtml::endForm(); ?>