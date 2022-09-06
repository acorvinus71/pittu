<?php

/**
 * This is the model class for table "kafedra".
 *
 * The followings are the available columns in table 'kafedra':
 * @property integer $id_kafedra
 * @property string $tj_zagalovok
 * @property string $ru_zagalovok
 * @property string $en_zagalovok
 * @property string $img
 * @property string $tj_info
 * @property string $ru_info
 * @property string $en_info
 * @property string $tj_infokaf
 * @property string $ru_infokaf
 * @property string $en_infokaf
 */
class Kafedra extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kafedra the static model class
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
		return 'kafedra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tj_zagalovok, ru_zagalovok, en_zagalovok, img, tj_info, ru_info, en_info, tj_infokaf, ru_infokaf, en_infokaf', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_kafedra, tj_zagalovok, ru_zagalovok, en_zagalovok, img, tj_info, ru_info, en_info, tj_infokaf, ru_infokaf, en_infokaf', 'safe', 'on'=>'search'),
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
			'id_kafedra' => 'Id Kafedra',
			'tj_zagalovok' => 'Tj Zagalovok',
			'ru_zagalovok' => 'Ru Zagalovok',
			'en_zagalovok' => 'En Zagalovok',
			'img' => 'Img',
			'tj_info' => 'Tj Info',
			'ru_info' => 'Ru Info',
			'en_info' => 'En Info',
			'tj_infokaf' => 'Tj Infokaf',
			'ru_infokaf' => 'Ru Infokaf',
			'en_infokaf' => 'En Infokaf',
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

		$criteria->compare('id_kafedra',$this->id_kafedra);
		$criteria->compare('tj_zagalovok',$this->tj_zagalovok,true);
		$criteria->compare('ru_zagalovok',$this->ru_zagalovok,true);
		$criteria->compare('en_zagalovok',$this->en_zagalovok,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('tj_info',$this->tj_info,true);
		$criteria->compare('ru_info',$this->ru_info,true);
		$criteria->compare('en_info',$this->en_info,true);
		$criteria->compare('tj_infokaf',$this->tj_infokaf,true);
		$criteria->compare('ru_infokaf',$this->ru_infokaf,true);
		$criteria->compare('en_infokaf',$this->en_infokaf,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}