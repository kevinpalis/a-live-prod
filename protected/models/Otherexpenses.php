<?php

/**
 * This is the model class for table "otherexpenses".
 *
 * The followings are the available columns in table 'otherexpenses':
 * @property string $id
 * @property string $clientId
 * @property string $caregiverId
 * @property string $expenseType
 * @property string $expenseAmount
 * @property string $milesDriven
 * @property string $mileRate
 * @property string $startDate
 * @property string $endDate
 * @property string $startTime
 * @property string $endTime
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Client $client
 * @property Caregiver $caregiver
 */
class Otherexpenses extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Otherexpenses the static model class
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
		return 'otherexpenses';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clientId, caregiverId', 'required'),
			array('clientId, caregiverId, expenseType, expenseAmount, milesDriven, mileRate', 'length', 'max'=>10),
			array('notes', 'length', 'max'=>100),
			array('startDate, endDate, startTime, endTime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, clientId, caregiverId, expenseType, expenseAmount, milesDriven, mileRate, startDate, endDate, startTime, endTime, notes', 'safe', 'on'=>'search'),
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
			'expenseType' => 'Expense Type',
			'expenseAmount' => 'Expense Amount',
			'milesDriven' => 'Miles Driven',
			'mileRate' => 'Mile Rate',
			'startDate' => 'Start Date',
			'endDate' => 'End Date',
			'startTime' => 'Start Time',
			'endTime' => 'End Time',
			'notes' => 'Notes',
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
		$criteria->compare('expenseType',$this->expenseType,true);
		$criteria->compare('expenseAmount',$this->expenseAmount,true);
		$criteria->compare('milesDriven',$this->milesDriven,true);
		$criteria->compare('mileRate',$this->mileRate,true);
		$criteria->compare('startDate',$this->startDate,true);
		$criteria->compare('endDate',$this->endDate,true);
		$criteria->compare('startTime',$this->startTime,true);
		$criteria->compare('endTime',$this->endTime,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}