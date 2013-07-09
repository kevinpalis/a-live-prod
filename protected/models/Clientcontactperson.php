<?php

/**
 * This is the model class for table "clientcontactperson".
 *
 * The followings are the available columns in table 'clientcontactperson':
 * @property string $id
 * @property string $clientId
 * @property string $fname
 * @property string $lname
 * @property string $address
 * @property string $createdBy
 * @property string $zipId
 * @property string $primaryNum
 * @property string $secondaryNum
 * @property string $email
 * @property integer $contactType
 * @property integer $clientRelationship
 *
 * The followings are the available model relations:
 * @property Client $client
 * @property Zip $zip
 */
class Clientcontactperson extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Clientcontactperson the static model class
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
		return 'clientcontactperson';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clientId, fname, lname, address, zipId, primaryNum, contactType, clientRelationship', 'required'),
			array('contactType, clientRelationship', 'numerical', 'integerOnly'=>true),
			array('clientId, zipId', 'length', 'max'=>10),
			array('fname, lname', 'length', 'max'=>50),
			array('address', 'length', 'max'=>100),
			array('createdBy', 'length', 'max'=>70),
			array('primaryNum, secondaryNum, email', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, clientId, fname, lname, address, createdBy, zipId, primaryNum, secondaryNum, email, contactType, clientRelationship', 'safe', 'on'=>'search'),
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
			'zip' => array(self::BELONGS_TO, 'Zip', 'zipId'),
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
			'fname' => "Contact's First Name",
			'lname' => "Contact's Last Name",
			'address' => 'Address',
			'createdBy' => 'Created By',
			'zipId' => 'City, State, Zip',
			'primaryNum' => 'Primary Num',
			'secondaryNum' => 'Secondary Num',
			'email' => 'Email',
			'contactType' => 'Contact Type',
			'clientRelationship' => 'Client Relationship',
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
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('createdBy',$this->createdBy,true);
		$criteria->compare('zipId',$this->zipId,true);
		$criteria->compare('primaryNum',$this->primaryNum,true);
		$criteria->compare('secondaryNum',$this->secondaryNum,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contactType',$this->contactType);
		$criteria->compare('clientRelationship',$this->clientRelationship);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getFullName()
	{
		return $this->fname.' '.$this->lname;
	}

	public function getContactPerson()
	{
		return $this->fname.' '.$this->lname;
	}

	public function getCPPrimaryNumber()
	{
		return $this->primaryNum;
	}
	
	public function getContactTypePrint(){
		
		$statusString="";
		switch ($this->contactType) {
			case '0':
				$statusString = "All Concerns";
				return $statusString;

			case '1':
				$statusString = "Billing Concerns";
				return $statusString;
				
			case '2':
				$statusString = "General/Non-billing Concerns";
				return $statusString;

			case '3':
				$statusString = "Emergency Contact AM";
				return $statusString;
				
			case '4':
				$statusString = "Emergency Contact PM";
				return $statusString;
			
					
			default:
					return $statusString;
		}
	}
		
		public function getRelationshipTypePrint(){

			$statusString="";
			switch ($this->contactType) {
				case '0':
					$statusString = "Son/Daughter";
					return $statusString;

				case '1':
					$statusString = "Sibling";
					return $statusString;

				case '2':
					$statusString = "Parents";
					return $statusString;

				case '3':
					$statusString = "Other Relatives";
					return $statusString;

				case '4':
					$statusString = "Conservator";
					return $statusString;
					
				case '5':
					$statusString = "Neighbor";
					return $statusString;

				case '6':
					$statusString = "Non-Relative";
					return $statusString;

				default:
						return $statusString;
			}
	
	
	}
}