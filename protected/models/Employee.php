<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property string $id
 * @property string $fname
 * @property string $lname
 * @property string $address
 * @property string $zipId
 * @property string $position
 * @property string $supervisor
 * @property string $date_start
 * @property string $birth_date
 * @property string $assigned_facilities
 * @property string $password
 * @property string $department
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Checkin[] $checkins
 * @property Client[] $clients
 * @property Zip $zip
 * @property Materialassignment[] $materialassignments
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
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
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fname, lname, address, zipId, position, date_start, password, email', 'required'),
			array('fname, lname, supervisor, department, email', 'length', 'max'=>50),
			array('address, assigned_facilities, password', 'length', 'max'=>100),
			array('zipId', 'length', 'max'=>10),
			array('position', 'length', 'max'=>40),
			array('birth_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, fname, lname, address, zipId, position, supervisor, date_start, birth_date, assigned_facilities, password, department, email', 'safe', 'on'=>'search'),
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
			'checkins' => array(self::HAS_MANY, 'Checkin', 'employeeId'),
			'clients' => array(self::HAS_MANY, 'Client', 'employeeId'),
			'zip' => array(self::BELONGS_TO, 'Zip', 'zip'),
			'materialassignments' => array(self::HAS_MANY, 'Materialassignment', 'employeeId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'fname' => 'Fname',
			'lname' => 'Lname',
			'address' => 'Address',
			'zipId' => 'Zip',
			'position' => 'Position',
			'supervisor' => 'Supervisor',
			'date_start' => 'Date Start',
			'birth_date' => 'Birth Date',
			'assigned_facilities' => 'Assigned Facilities',
			'password' => 'Password',
			'department' => 'Department',
			'email' => 'Email',
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
		$criteria->compare('position',$this->position,true);
		$criteria->compare('supervisor',$this->supervisor,true);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('birth_date',$this->birth_date,true);
		$criteria->compare('assigned_facilities',$this->assigned_facilities,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave()
    {
        $pass = crypt($this->password, '$2a$10$1qAz2wSx3k3V1n123K3V1n'); //2nd param is the encryption salt
        $this->password = $pass;
        return true;
    }

    public function getFullName(){
		return $this->fname.' '.$this->lname;
	}
	
	public function getHasAccess($function, $id){
		
		if($function=="clientModel"){
			if($this->department == "HCS"){
				$clientCheck = Client::model()->findByPK($id);
					if($this->id == $clientCheck->employeeId)
						return true;
					else
						return false;
			}else
				return true;
		}
	}

}