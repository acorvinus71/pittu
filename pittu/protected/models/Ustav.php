<?php

/**
 * This is the model class for table "ustav".
 *
 * The followings are the available columns in table 'ustav':
 * @property integer $id_ustav
 * @property string $tj_zagalovok
 * @property string $ru_zagalovok
 * @property string $en_zagalovok
 * @property string $tj_info
 * @property string $ru_info
 * @property string $en_info
 * @property string $tj_ustavinfo
 * @property string $ru_ustavinfo
 * @property string $en_ustavinfo
 */
class Ustav extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ustav the static model class
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
		return 'ustav';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tj_zagalovok, ru_zagalovok, en_zagalovok, tj_info, ru_info, en_info, tj_ustavinfo, ru_ustavinfo, en_ustavinfo', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ustav, tj_zagalovok, ru_zagalovok, en_zagalovok, tj_info, ru_info, en_info, tj_ustavinfo, ru_ustavinfo, en_ustavinfo', 'safe', 'on'=>'search'),
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
			'id_ustav' => 'Id Ustav',
			'tj_zagalovok' => 'Tj Zagalovok',
			'ru_zagalovok' => 'Ru Zagalovok',
			'en_zagalovok' => 'En Zagalovok',
			'tj_info' => 'Tj Info',
			'ru_info' => 'Ru Info',
			'en_info' => 'En Info',
			'tj_ustavinfo' => 'Tj Ustavinfo',
			'ru_ustavinfo' => 'Ru Ustavinfo',
			'en_ustavinfo' => 'En Ustavinfo',
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

		$criteria->compare('id_ustav',$this->id_ustav);
		$criteria->compare('tj_zagalovok',$this->tj_zagalovok,true);
		$criteria->compare('ru_zagalovok',$this->ru_zagalovok,true);
		$criteria->compare('en_zagalovok',$this->en_zagalovok,true);
		$criteria->compare('tj_info',$this->tj_info,true);
		$criteria->compare('ru_info',$this->ru_info,true);
		$criteria->compare('en_info',$this->en_info,true);
		$criteria->compare('tj_ustavinfo',$this->tj_ustavinfo,true);
		$criteria->compare('ru_ustavinfo',$this->ru_ustavinfo,true);
		$criteria->compare('en_ustavinfo',$this->en_ustavinfo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}