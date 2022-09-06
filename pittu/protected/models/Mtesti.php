<?php

/**
 * This is the model class for table "mtesti".
 *
 * The followings are the available columns in table 'mtesti':
 * @property integer $id_mtesti
 * @property string $mtesti
 * @property string $maksad
 * @property string $ahborot
 * @property string $doc
 * @property string $soxt
 * @property string $vazifa
 * @property string $jadval
 */
class Mtesti extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mtesti the static model class
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
		return 'mtesti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('doc, soxt', 'length', 'max'=>200),
			array('mtesti, maksad, ahborot, vazifa, jadval', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mtesti, mtesti, maksad, ahborot, doc, soxt, vazifa, jadval', 'safe', 'on'=>'search'),
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
			'id_mtesti' => 'Id Mtesti',
			'mtesti' => 'Mtesti',
			'maksad' => 'Maksad',
			'ahborot' => 'Ahborot',
			'doc' => 'Doc',
			'soxt' => 'Soxt',
			'vazifa' => 'Vazifa',
			'jadval' => 'Jadval',
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

		$criteria->compare('id_mtesti',$this->id_mtesti);
		$criteria->compare('mtesti',$this->mtesti,true);
		$criteria->compare('maksad',$this->maksad,true);
		$criteria->compare('ahborot',$this->ahborot,true);
		$criteria->compare('doc',$this->doc,true);
		$criteria->compare('soxt',$this->soxt,true);
		$criteria->compare('vazifa',$this->vazifa,true);
		$criteria->compare('jadval',$this->jadval,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}