<?php

/**
 * This is the model class for table "group".
 *
 * The followings are the available columns in table 'group':
 * @property string $id
 * @property string $group_name
 * @property string $uid
 * @property string $user_name
 * @property string $category_3_id
 * @property string $description
 * @property string $pic_url
 * @property string $view_num
 * @property string $insert_time
 */
class Group extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'group';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_name, uid, user_name, category_3_id, description, pic_url, view_num, insert_time', 'required'),
			array('group_name, user_name, description, pic_url', 'length', 'max'=>255),
			array('uid, category_3_id, view_num', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, group_name, uid, user_name, category_3_id, description, pic_url, view_num, insert_time', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'group_name' => 'Group Name',
			'uid' => 'Uid',
			'user_name' => 'User Name',
			'category_3_id' => 'Category 3',
			'description' => 'Description',
			'pic_url' => 'Pic Url',
			'view_num' => 'View Num',
			'insert_time' => 'Insert Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('group_name',$this->group_name,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('category_3_id',$this->category_3_id,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('pic_url',$this->pic_url,true);
		$criteria->compare('view_num',$this->view_num,true);
		$criteria->compare('insert_time',$this->insert_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Group the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
