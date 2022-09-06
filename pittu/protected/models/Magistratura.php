<?php

/**
 * This is the model class for table "magistratura".
 *
 * The followings are the available columns in table 'magistratura':
 * @property integer $id_mag
 * @property string $tj_ixtisos
 * @property string $tj_ruzona
 * @property string $tj_goibona
 * @property string $tj_bujavi
 * @property string $tj_shartnomavi
 * @property string $ru_ixtisos
 * @property string $ru_ruzona
 * @property string $ru_goibona
 * @property string $ru_bujavi
 * @property string $ru_shartnomavi
 * @property string $en_ixtisos
 * @property string $en_ruzona
 * @property string $en_goibona
 * @property string $en_bujavi
 * @property string $en_shartnomavi
 */
class Magistratura extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Magistratura the static model class
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
		return 'magistratura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tj_ixtisos, tj_ruzona, tj_goibona, tj_bujavi, tj_shartnomavi, ru_ixtisos, ru_ruzona, ru_goibona, ru_bujavi, ru_shartnomavi, en_ixtisos, en_ruzona, en_goibona, en_bujavi, en_shartnomavi', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mag, tj_ixtisos, tj_ruzona, tj_goibona, tj_bujavi, tj_shartnomavi, ru_ixtisos, ru_ruzona, ru_goibona, ru_bujavi, ru_shartnomavi, en_ixtisos, en_ruzona, en_goibona, en_bujavi, en_shartnomavi', 'safe', 'on'=>'search'),
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
			'id_mag' => 'Id Mag',
			'tj_ixtisos' => 'Tj Ixtisos',
			'tj_ruzona' => 'Tj Ruzona',
			'tj_goibona' => 'Tj Goibona',
			'tj_bujavi' => 'Tj Bujavi',
			'tj_shartnomavi' => 'Tj Shartnomavi',
			'ru_ixtisos' => 'Ru Ixtisos',
			'ru_ruzona' => 'Ru Ruzona',
			'ru_goibona' => 'Ru Goibona',
			'ru_bujavi' => 'Ru Bujavi',
			'ru_shartnomavi' => 'Ru Shartnomavi',
			'en_ixtisos' => 'En Ixtisos',
			'en_ruzona' => 'En Ruzona',
			'en_goibona' => 'En Goibona',
			'en_bujavi' => 'En Bujavi',
			'en_shartnomavi' => 'En Shartnomavi',
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

		$criteria->compare('id_mag',$this->id_mag);
		$criteria->compare('tj_ixtisos',$this->tj_ixtisos,true);
		$criteria->compare('tj_ruzona',$this->tj_ruzona,true);
		$criteria->compare('tj_goibona',$this->tj_goibona,true);
		$criteria->compare('tj_bujavi',$this->tj_bujavi,true);
		$criteria->compare('tj_shartnomavi',$this->tj_shartnomavi,true);
		$criteria->compare('ru_ixtisos',$this->ru_ixtisos,true);
		$criteria->compare('ru_ruzona',$this->ru_ruzona,true);
		$criteria->compare('ru_goibona',$this->ru_goibona,true);
		$criteria->compare('ru_bujavi',$this->ru_bujavi,true);
		$criteria->compare('ru_shartnomavi',$this->ru_shartnomavi,true);
		$criteria->compare('en_ixtisos',$this->en_ixtisos,true);
		$criteria->compare('en_ruzona',$this->en_ruzona,true);
		$criteria->compare('en_goibona',$this->en_goibona,true);
		$criteria->compare('en_bujavi',$this->en_bujavi,true);
		$criteria->compare('en_shartnomavi',$this->en_shartnomavi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}