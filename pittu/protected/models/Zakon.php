<?php

/**
 * This is the model class for table "zakon".
 *
 * The followings are the available columns in table 'zakon':
 * @property integer $id_zakon
 * @property string $tj_zagalovok
 * @property string $ru_zagalovok
 * @property string $en_zagalovok
 */
class Zakon extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Zakon the static model class
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
		return 'zakon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tj_zagalovok, ru_zagalovok, en_zagalovok', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_zakon, tj_zagalovok, ru_zagalovok, en_zagalovok', 'safe', 'on'=>'search'),
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
			'id_zakon' => 'Id Zakon',
			'tj_zagalovok' => 'Tj Zagalovok',
			'ru_zagalovok' => 'Ru Zagalovok',
			'en_zagalovok' => 'En Zagalovok',
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

		$criteria->compare('id_zakon',$this->id_zakon);
		$criteria->compare('tj_zagalovok',$this->tj_zagalovok,true);
		$criteria->compare('ru_zagalovok',$this->ru_zagalovok,true);
		$criteria->compare('en_zagalovok',$this->en_zagalovok,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}