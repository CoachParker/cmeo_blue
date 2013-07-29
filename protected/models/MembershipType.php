<?php

/**
 * This is the model class for table "MembershipType".
 *
 * The followings are the available columns in table 'MembershipType':
 * @property integer $ID
 * @property string $Name
 * @property double $Cost
 * @property string $Description
 * @property string $Benefits
 */
class MembershipType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MembershipType the static model class
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
		return 'MembershipType';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name, Cost, Description', 'required'),
			array('Cost', 'numerical'),
			array('Name', 'length', 'max'=>50),
			array('Benefits', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, Name, Cost, Description, Benefits', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'Name' => 'Name',
			'Cost' => 'Cost',
			'Description' => 'Description',
			'Benefits' => 'Benefits',
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
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Cost',$this->Cost);
		$criteria->compare('Description',$this->Description,true);
		$criteria->compare('Benefits',$this->Benefits,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}