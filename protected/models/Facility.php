<?php

/**
 * This is the model class for table "facility".
 *
 * The followings are the available columns in table 'facility':
 * @property string $id
 * @property string $facilityName
 * @property string $address
 * @property string $zipId
 * @property string $facilityStatus
 * @property double $latitude
 * @property double $longitude
 *
 * The followings are the available model relations:
 * @property Checkin[] $checkins
 * @property Client[] $clients
 * @property Zip $zip
 * @property Facilitycontact[] $facilitycontacts
 */
class Facility extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Facility the static model class
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
		return 'facility';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('latitude, longitude', 'required'),
			array('latitude, longitude', 'numerical'),
			array('facilityName, address', 'length', 'max'=>100),
			array('zipId', 'length', 'max'=>10),
			array('facilityStatus', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, facilityName, address, zipId, facilityStatus, latitude, longitude', 'safe', 'on'=>'search'),
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
			'checkins' => array(self::HAS_MANY, 'Checkin', 'facilityId'),
			'clients' => array(self::HAS_MANY, 'Client', 'facilityId'),
			'zip' => array(self::BELONGS_TO, 'Zip', 'zip'),
			'facilitycontacts' => array(self::HAS_MANY, 'Facilitycontact', 'facilityId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'facilityName' => 'Facility Name',
			'address' => 'Address',
			'zipId' => 'Zip',
			'facilityStatus' => 'Facility Status',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('facilityName',$this->facilityName,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zipId',$this->zipId,true);
		$criteria->compare('facilityStatus',$this->facilityStatus,true);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longitude',$this->longitude);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}