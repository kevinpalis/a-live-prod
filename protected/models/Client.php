<?php

/**
 * This is the model class for table "client".
 *
 * The followings are the available columns in table 'client':
 * @property string $id
 * @property string $fname
 * @property string $lname
 * @property string $address
 * @property string $zipId
 * @property integer $age
 * @property string $primaryNum
 * @property string $secondaryNum
 * @property string $email
 * @property string $createdBy
 * @property string $dateStart
 * @property string $dateEnd
 * @property string $status
 * @property string $holidayWork
 * @property string $sex
 * @property double $height
 * @property double $weight
 * @property string $employeeId
 * @property string $facilityId
 * @property string $facilityContactId
 * @property string $tagforUpdate
 * @property double $depositAmount
 * @property string $dateEntered
 * @property double $creditLimit
 *
 * The followings are the available model relations:
 * @property Absencetracker[] $absencetrackers
 * @property Caregiverassignment[] $caregiverassignments
 * @property Cilentpayment[] $cilentpayments
 * @property Zip $zip
 * @property Employee $employee
 * @property Facility $facility
 * @property FacilityContact $facilityContact
 * @property Clientcontactperson[] $clientcontactpeople
 * @property Clientintake[] $clientintakes
 * @property Otherexpenses[] $otherexpenses
 * @property Payrollcg[] $payrollcgs
 */
class Client extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Client the static model class
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
		return 'client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, lname, address, zipId, primaryNum, holidayWork, sex, employeeId, facilityId, facilityContactId', 'required'),
			array('age', 'numerical', 'integerOnly'=>true),
			array('height, weight, primaryNum, secondaryNum,depositAmount, creditLimit', 'numerical'),
			array('fname, lname', 'length', 'max'=>50),
			array('address', 'length', 'max'=>100),
			array('zipId, status, employeeId, facilityId, facilityContactId', 'length', 'max'=>10),
			array('email', 'length', 'max'=>50),
			array('email', 'email'),
			array('createdBy', 'length', 'max'=>70),
			array('holidayWork, sex, tagforUpdate', 'length', 'max'=>1),
			array('dateStart, dateEnd, dateEntered', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fname, lname, address, zipId, age, primaryNum, secondaryNum, email, createdBy, dateStart, dateEnd, status, holidayWork, sex, height, weight, employeeId, facilityId, facilityContactId, tagforUpdate, depositAmount, dateEntered, creditLimit', 'safe', 'on'=>'search'),
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
			'absencetrackers' => array(self::HAS_MANY, 'Absencetracker', 'clientId'),
			'caregiverassignments' => array(self::HAS_MANY, 'Caregiverassignment', 'clientId'),
			'cilentpayments' => array(self::HAS_MANY, 'Cilentpayment', 'clientId'),
			'zip' => array(self::BELONGS_TO, 'Zip', 'zipId'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'employeeId'),
			'facility' => array(self::BELONGS_TO, 'Facility', 'facilityId'),
			'facilityContact' => array(self::BELONGS_TO, 'Facilitycontact', 'facilityContactId'),
			'clientcontactperson' => array(self::HAS_ONE, 'Clientcontactperson', 'clientId'),
			'clientcontactpeople' => array(self::HAS_MANY, 'Clientcontactperson', 'clientId'),
			'clientintakes' => array(self::HAS_MANY, 'Clientintake', 'clientId'),
			'otherexpenses' => array(self::HAS_MANY, 'Otherexpenses', 'clientId'),
			'payrollcgs' => array(self::HAS_MANY, 'Payrollcg', 'clientId'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fname' => 'First Name',
			'lname' => 'Last Name',
			'address' => 'Address',
			'zipId' => 'City, State, Zip Code',
			'age' => 'Age',
			'primaryNum' => 'Primary Number',
			'secondaryNum' => 'Secondary Number',
			'email' => 'Email',
			'createdBy' => 'Created By',
			'dateStart' => 'Date Start',
			'dateEnd' => 'Date End',
			'status' => 'Status',
			'holidayWork' => 'Holiday Work',
			'sex' => 'Sex',
			'height' => 'Height',
			'weight' => 'Weight',
			'employeeId' => 'Assigned To',
			'facilityId' => 'Facility Name',
			'facilityContactId' => 'Referred By',
			'tagforUpdate' => 'Tagfor Update',
			'depositAmount' => 'Deposit Amount',
			'dateEntered' => 'Date Entered',
			'creditLimit' => 'Credit Limit',
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
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zipId',$this->zipId,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('primaryNum',$this->primaryNum,true);
		$criteria->compare('secondaryNum',$this->secondaryNum,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('createdBy',$this->createdBy,true);
		$criteria->compare('dateStart',$this->dateStart,true);
		$criteria->compare('dateEnd',$this->dateEnd,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('holidayWork',$this->holidayWork,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('height',$this->height);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('employeeId',$this->employeeId,true);
		$criteria->compare('facilityId',$this->facilityId,true);
		$criteria->compare('facilityContactId',$this->facilityContactId,true);
		$criteria->compare('tagforUpdate',$this->tagforUpdate,true);
		$criteria->compare('depositAmount',$this->depositAmount);
		$criteria->compare('dateEntered',$this->dateEntered,true);
		$criteria->compare('creditLimit',$this->creditLimit);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getFullName(){
		return $this->fname.' '.$this->lname;
	}

	public function getClientStatus(){

		
		$statusString="";
		switch ($this->status) {
			case '1':
				$statusString = "New Referral";
				return $statusString;

			case '2':
				$statusString = "For follow-up";
				return $statusString;

			case '3':
				$statusString = "For Interview";
				return $statusString;

			case '4':
				$statusString = "Closed Case";
				return $statusString;

			case '5':
				$statusString = "Admission";
				return $statusString;

			case '6':
				$statusString = "On-hold";
				return $statusString;

			case '7':
				$statusString = "Termination";
				return $statusString;

			
			default:
					return $statusString;
		}

	}

	public function getGender(){
		
		$statusString="";
		switch ($this->sex) {
			case '0':
				$statusString = "Male";
				return $statusString;

			case '1':
				$statusString = "Female";
				return $statusString;

					
			default:
					return $statusString;
		}

	}

	protected function beforeSave(){

		if (!empty($this->dateStart)) {$this->dateStart = date("Y/m/d",strtotime($this->dateStart));}
		if (!empty($this->dateEnd)) {$this->dateEnd = date("Y/m/d",strtotime($this->dateEnd));}


		return parent::beforeValidate();
	}

	protected function afterFind(){
		if (!empty($this->dateStart) && $this->dateStart != "0000-00-00")
		$this->dateStart = date("m/d/Y",strtotime($this->dateStart));
		if (!empty($this->dateEnd) && $this->dateEnd != "0000-00-00")
		$this->dateEnd = date("m/d/Y",strtotime($this->dateEnd));
	}


}