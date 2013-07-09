<?php

/**
 * This is the model class for table "facilitycontact".
 *
 * The followings are the available columns in table 'facilitycontact':
 * @property string $id
 * @property string $facilityId
 * @property string $fname
 * @property string $lname
 * @property string $primaryContact
 * @property string $secondaryContactNum
 * @property string $facilityContactType
 *
 * The followings are the available model relations:
 * @property Facility $facility
 */
class Facilitycontact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Facilitycontact the static model class
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
		return 'facilitycontact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('facilityId', 'required'),
			array('facilityId', 'length', 'max'=>10),
			array('fname, lname, facilityContactType', 'length', 'max'=>50),
			array('primaryContact, secondaryContactNum', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, facilityId, fname, lname, primaryContact, secondaryContactNum, facilityContactType', 'safe', 'on'=>'search'),
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
			'fname' => 'Fname',
			'lname' => 'Lname',
			'primaryContact' => 'Primary Contact',
			'secondaryContactNum' => 'Secondary Contact Num',
			'facilityContactType' => 'Facility Contact Type',
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
		$criteria->compare('fname',$this->fname,true);
		$criteria->compare('lname',$this->lname,true);
		$criteria->compare('primaryContact',$this->primaryContact,true);
		$criteria->compare('secondaryContactNum',$this->secondaryContactNum,true);
		$criteria->compare('facilityContactType',$this->facilityContactType,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getFullName(){
		return $this->fname.' '.$this->lname;
	}

		public function getFacilityContacts($facilityID)
	{
		$reglist=CHtml::listData($this->findAll('id=:id', array(':id'=>(int)$facilityID)), 'id', 'fullName');

		if (isset($facilityID))
        {

        	 echo CHtml::tag('option', array('value'=>'NULL'), 'Select Contact',true);

                foreach($reglist as $value=>$name)
                {
                        echo CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
                }
        }
        else
        {
                return $reglist;
        }
	}

}