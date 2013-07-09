<?php

/**
 * This is the model class for table "checkin".
 *
 * The followings are the available columns in table 'checkin':
 * @property string $id
 * @property string $facilityId
 * @property string $facilityContactId
 * @property string $employeeId
 * @property string $dateCreated
 * @property string $notes
 * @property string $materialGiven
 * @property string $materialQty
 *
 * The followings are the available model relations:
 * @property Facility $facility
 * @property FacilityContact $facilityContact
 * @property Employee $employee
 */
class Checkin extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Checkin the static model class
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
		return 'checkin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('facilityId, facilityContactId, employeeId', 'required'),
			array('facilityId, facilityContactId, employeeId', 'length', 'max'=>10),
			array('notes', 'length', 'max'=>100),
			array('materialGiven, materialQty', 'length', 'max'=>50),
			array('dateCreated', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, facilityId, facilityContactId, employeeId, dateCreated, notes, materialGiven, materialQty', 'safe', 'on'=>'search'),
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
			'facility' => array(self::BELONGS_TO, 'Facility', 'facilityId'),
			'facilityContact' => array(self::BELONGS_TO, 'FacilityContact', 'facilityContactId'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'employeeId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'facilityId' => 'Facility',
			'facilityContactId' => 'Facility Contact',
			'employeeId' => 'Employee',
			'dateCreated' => 'Date Created',
			'notes' => 'Notes',
			'materialGiven' => 'Material Given',
			'materialQty' => 'Material Qty',
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
		$criteria->compare('facilityId',$this->facilityId,true);
		$criteria->compare('facilityContactId',$this->facilityContactId,true);
		$criteria->compare('employeeId',$this->employeeId,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('materialGiven',$this->materialGiven,true);
		$criteria->compare('materialQty',$this->materialQty,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}