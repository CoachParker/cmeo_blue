<?php

/**
 * This is the model class for table "Person".
 *
 * The followings are the available columns in table 'Person':
 * @property integer $ID
 * @property string $FirstName
 * @property string $LastName
 * @property string $BirthDate
 * @property integer $TypeID
 * @property string $Address1
 * @property string $Address2
 * @property string $City
 * @property string $State
 * @property string $Zip
 * @property string $Email
 * @property string $Phone
 * @property string $Comments
 *
 * The followings are the available model relations:
 * @property Donation[] $donations
 * @property Entity[] $entities
 * @property PersonType $type
 */
class Person extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Person the static model class
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
		return 'Person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FirstName, LastName, TypeID', 'required'),
			array('TypeID', 'numerical', 'integerOnly'=>true),
			array('FirstName', 'length', 'max'=>20),
			array('LastName', 'length', 'max'=>30),
			array('Address1, Address2, Email', 'length', 'max'=>80),
			array('City', 'length', 'max'=>50),
			array('State', 'length', 'max'=>2),
			array('Zip', 'length', 'max'=>10),
			array('Phone', 'length', 'max'=>12),
			array('BirthDate, Comments, entities', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, FirstName, LastName, BirthDate, TypeID, Address1, Address2, City, State, Zip, Email, Phone, Comments', 'safe', 'on'=>'search'),
		);
	}

        
        
        public function behaviors() {
            return array( 'CAdvancedArBehavior' => array(
            'class' => 'CAdvancedArBehavior'));
        }
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'donations' => array(self::HAS_MANY, 'Donation', 'PersonID'),
			'entities' => array(self::MANY_MANY, 'Entity', 'EntityPerson(PersonID, EntityID)'),
			'type' => array(self::BELONGS_TO, 'PersonType', 'TypeID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'FirstName' => 'First Name',
			'LastName' => 'Last Name',
			'BirthDate' => 'Birth Date',
			'TypeID' => 'Type',
			'Address1' => 'Address1',
			'Address2' => 'Address2',
			'City' => 'City',
			'State' => 'State',
			'Zip' => 'Zip',
			'Email' => 'Email',
			'Phone' => 'Phone',
                    'entities' => 'Entities',
			'Comments' => 'Comments',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('BirthDate',$this->BirthDate,true);
		$criteria->compare('TypeID',$this->TypeID);
		$criteria->compare('Address1',$this->Address1,true);
		$criteria->compare('Address2',$this->Address2,true);
		$criteria->compare('City',$this->City,true);
		$criteria->compare('State',$this->State,true);
		$criteria->compare('Zip',$this->Zip,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Phone',$this->Phone,true);
		$criteria->compare('Comments',$this->Comments,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getEntityList()
        {
            $result=array();
            If ($this->entities){
                foreach ($this->entities as $entity){
                    $result[] = CHtml::link(CHtml::encode($entity->Name),
                            array('entity/view','id'=>$entity->ID));
                }
            }
            else{
                $result[] = "What?! NO ENTITIES!  Fix This!";
            }
        return implode(", ",$result);
        }
        /*CHtml::link(CHtml::encode($model->entities['0']->Name),
				array('entity/view','id'=>$model->entities['0']->ID));*/
}