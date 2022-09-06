<?php

/**
 * This is the model class for table "doktorantura".
 *
 * The followings are the available columns in table 'doktorantura':
 * @property integer $id_dok
 * @property string $shifr
 * @property string $tj_ilm
 * @property string $ru_ilm
 * @property string $en_ilm
 */
class Doktorantura extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Doktorantura the static model class
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
		return 'doktorantura';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('shifr, tj_ilm, ru_ilm, en_ilm', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dok, shifr, tj_ilm, ru_ilm, en_ilm', 'safe', 'on'=>'search'),
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
			'id_dok' => 'Id Dok',
			'shifr' => 'Shifr',
			'tj_ilm' => 'Tj Ilm',
			'ru_ilm' => 'Ru Ilm',
			'en_ilm' => 'En Ilm',
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

		$criteria->compare('id_dok',$this->id_dok);
		$criteria->compare('shifr',$this->shifr,true);
		$criteria->compare('tj_ilm',$this->tj_ilm,true);
		$criteria->compare('ru_ilm',$this->ru_ilm,true);
		$criteria->compare('en_ilm',$this->en_ilm,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}