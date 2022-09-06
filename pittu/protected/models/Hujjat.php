<?php

/**
 * This is the model class for table "hujjat".
 *
 * The followings are the available columns in table 'hujjat':
 * @property integer $id_huj
 * @property string $img
 * @property string $tj_text
 * @property string $ru_text
 * @property string $en_text
 */
class Hujjat extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Hujjat the static model class
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
		return 'hujjat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('img, tj_text, ru_text, en_text', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_huj, img, tj_text, ru_text, en_text', 'safe', 'on'=>'search'),
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
			'id_huj' => 'Id Huj',
			'img' => 'Img',
			'tj_text' => 'Tj Text',
			'ru_text' => 'Ru Text',
			'en_text' => 'En Text',
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

		$criteria->compare('id_huj',$this->id_huj);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('tj_text',$this->tj_text,true);
		$criteria->compare('ru_text',$this->ru_text,true);
		$criteria->compare('en_text',$this->en_text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}