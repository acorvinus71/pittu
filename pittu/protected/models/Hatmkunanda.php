<?php

/**
 * This is the model class for table "hatmkunanda".
 *
 * The followings are the available columns in table 'hatmkunanda':
 * @property integer $id_hatm
 * @property string $fio
 * @property string $ixtisos
 * @property string $soli_hatm
 */
class Hatmkunanda extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Hatmkunanda the static model class
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
		return 'hatmkunanda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fio', 'length', 'max'=>150),
			array('ixtisos', 'length', 'max'=>50),
			array('soli_hatm', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_hatm, fio, ixtisos, soli_hatm', 'safe', 'on'=>'search'),
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
			'id_hatm' => 'Id Hatm',
			'fio' => 'Fio',
			'ixtisos' => 'Ixtisos',
			'soli_hatm' => 'Soli Hatm',
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

		$criteria->compare('id_hatm',$this->id_hatm);
		$criteria->compare('fio',$this->fio,true);
		$criteria->compare('ixtisos',$this->ixtisos,true);
		$criteria->compare('soli_hatm',$this->soli_hatm,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}