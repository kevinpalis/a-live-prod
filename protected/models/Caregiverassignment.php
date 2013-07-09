<?php

/**
 * This is the model class for table "caregiverassignment".
 *
 * The followings are the available columns in table 'caregiverassignment':
 * @property string $id
 * @property string $clientId
 * @property string $caregiverId
 * @property double $clientRate
 * @property double $caregiverRate
 * @property string $dayWork
 * @property string $startTime
 * @property string $endTime
 * @property string $startDate
 * @property string $endDate
 * @property string $serviceType
 * @property string $dateCreated
 *
 * The followings are the available model relations:
 * @property Client $client
 * @property Caregiver $caregiver
 */
class Caregiverassignment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Caregiverassignment the static model class
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
		return 'caregiverassignment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clientId, caregiverId, clientRate, caregiverRate, dayWork, startTime, endTime, startDate', 'required'),
			array('clientRate, caregiverRate', 'numerical'),
			array('clientId, caregiverId, serviceType', 'length', 'max'=>10),
			array('dayWork', 'length', 'max'=>30),
			array('endDate, dateCreated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, clientId, caregiverId, clientRate, caregiverRate, dayWork, startTime, endTime, startDate, endDate, serviceType, dateCreated', 'safe', 'on'=>'search'),
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
			'client' => array(self::BELONGS_TO, 'Client', 'clientId'),
			'caregiver' => array(self::BELONGS_TO, 'Caregiver', 'caregiverId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'clientId' => 'Client',
			'caregiverId' => 'Caregiver',
			'clientRate' => 'Client Rate',
			'caregiverRate' => 'Caregiver Rate',
			'dayWork' => 'Day Work',
			'startTime' => 'Start Time',
			'endTime' => 'End Time',
			'startDate' => 'Start Date',
			'endDate' => 'End Date',
			'serviceType' => 'Service Type',
			'dateCreated' => 'Date Created',
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
		$criteria->compare('clientId',$this->clientId,true);
		$criteria->compare('caregiverId',$this->caregiverId,true);
		$criteria->compare('clientRate',$this->clientRate);
		$criteria->compare('caregiverRate',$this->caregiverRate);
		$criteria->compare('dayWork',$this->dayWork,true);
		$criteria->compare('startTime',$this->startTime,true);
		$criteria->compare('endTime',$this->endTime,true);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('endDate',$this->endDate,true);
		$criteria->compare('serviceType',$this->serviceType,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}