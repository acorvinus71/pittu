<?php

/**
 * This is the model class for table "tamos".
 *
 * The followings are the available columns in table 'tamos':
 * @property integer $id_tamos
 * @property string $tj_zagalovok
 * @property string $ru_zagalovok
 * @property string $en_zagalovok
 * @property string $img
 * @property string $tj_text
 * @property string $ru_text
 * @property string $en_text
 * @property string $tj_zag
 * @property string $ru_zag
 * @property string $en_zag
 * @property string $tj_info
 * @property string $ru_info
 * @property string $en_info
 */
class Tamos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tamos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tamos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tj_zagalovok, ru_zagalovok, en_zagalovok, img, tj_text, ru_text, en_text, tj_zag, ru_zag, en_zag, tj_info, ru_info, en_info', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_tamos, tj_zagalovok, ru_zagalovok, en_zagalovok, img, tj_text, ru_text, en_text, tj_zag, ru_zag, en_zag, tj_info, ru_info, en_info', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tamos' => 'Id Tamos',
			'tj_zagalovok' => 'Tj Zagalovok',
			'ru_zagalovok' => 'Ru Zagalovok',
			'en_zagalovok' => 'En Zagalovok',
			'img' => 'Img',
			'tj_text' => 'Tj Text',
			'ru_text' => 'Ru Text',
			'en_text' => 'En Text',
			'tj_zag' => 'Tj Zag',
			'ru_zag' => 'Ru Zag',
			'en_zag' => 'En Zag',
			'tj_info' => 'Tj Info',
			'ru_info' => 'Ru Info',
			'en_info' => 'En Info',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_tamos',$this->id_tamos);
		$criteria->compare('tj_zagalovok',$this->tj_zagalovok,true);
		$criteria->compare('ru_zagalovok',$this->ru_zagalovok,true);
		$criteria->compare('en_zagalovok',$this->en_zagalovok,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('tj_text',$this->tj_text,true);
		$criteria->compare('ru_text',$this->ru_text,true);
		$criteria->compare('en_text',$this->en_text,true);
		$criteria->compare('tj_zag',$this->tj_zag,true);
		$criteria->compare('ru_zag',$this->ru_zag,true);
		$criteria->compare('en_zag',$this->en_zag,true);
		$criteria->compare('tj_info',$this->tj_info,true);
		$criteria->compare('ru_info',$this->ru_info,true);
		$criteria->compare('en_info',$this->en_info,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}