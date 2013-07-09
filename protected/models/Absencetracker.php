<?php

/**
 * This is the model class for table "absencetracker".
 *
 * The followings are the available columns in table 'absencetracker':
 * @property string $id
 * @property string $caregiverId
 * @property string $clientId
 * @property string $dateStart
 * @property string $dateEnd
 * @property string $timeStart
 * @property string $timeEnd
 * @property string $absenceType
 * @property string $absenceReason
 * @property string $dateCreated
 * @property integer $isDeducted
 *
 * The followings are the available model relations:
 * @property Caregiver $caregiver
 * @property Client $client
 */
class Absencetracker extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Absencetracker the static model class
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
		return 'absencetracker';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('caregiverId, clientId', 'required'),
			array('isDeducted', 'numerical', 'integerOnly'=>true),
			array('caregiverId, clientId, absenceReason', 'length', 'max'=>10),
			array('absenceType', 'length', 'max'=>1),
			array('dateStart, dateEnd, timeStart, timeEnd, dateCreated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, caregiverId, clientId, dateStart, dateEnd, timeStart, timeEnd, absenceType, absenceReason, dateCreated, isDeducted', 'safe', 'on'=>'search'),
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
			'caregiver' => array(self::BELONGS_TO, 'Caregiver', 'caregiverId'),
			'client' => array(self::BELONGS_TO, 'Client', 'clientId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'caregiverId' => 'Caregiver',
			'clientId' => 'Client',
			'dateStart' => 'Date Start',
			'dateEnd' => 'Date End',
			'timeStart' => 'Time Start',
			'timeEnd' => 'Time End',
			'absenceType' => 'Absence Type',
			'absenceReason' => 'Absence Reason',
			'dateCreated' => 'Date Created',
			'isDeducted' => 'Is Deducted',
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
		$criteria->compare('caregiverId',$this->caregiverId,true);
		$criteria->compare('clientId',$this->clientId,true);
		$criteria->compare('dateStart',$this->dateStart,true);
		$criteria->compare('dateEnd',$this->dateEnd,true);
		$criteria->compare('timeStart',$this->timeStart,true);
		$criteria->compare('timeEnd',$this->timeEnd,true);
		$criteria->compare('absenceType',$this->absenceType,true);
		$criteria->compare('absenceReason',$this->absenceReason,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('isDeducted',$this->isDeducted);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}