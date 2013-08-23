<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $login_name
 * @property string $password
 * @property integer $sex
 * @property string $province
 * @property string $city
 * @property string $email
 * @property string $insert_time
 * @property integer $stauts
 * @property string $user_name
 * @property string $birthday
 * @property string $work
 * @property string $mobile
 * @property string $home_province
 * @property string $home_city
 * @property integer $mary
 * @property string $school
 * @property string $like
 * @property string $good_at
 * @property string $pic_url
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login_name, password, sex, province, city, email, insert_time, stauts, user_name, birthday, work, mobile, home_province, home_city, mary, school, like, good_at, pic_url', 'required'),
			array('sex, stauts, mary', 'numerical', 'integerOnly'=>true),
			array('login_name, password, email, user_name, work, mobile, school, like, good_at, pic_url', 'length', 'max'=>255),
			array('province, city, home_province, home_city', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, login_name, password, sex, province, city, email, insert_time, stauts, user_name, birthday, work, mobile, home_province, home_city, mary, school, like, good_at, pic_url', 'safe', 'on'=>'search'),
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
			'login_name' => 'Login Name',
			'password' => 'Password',
			'sex' => 'Sex',
			'province' => 'Province',
			'city' => 'City',
			'email' => 'Email',
			'insert_time' => 'Insert Time',
			'stauts' => 'Stauts',
			'user_name' => 'User Name',
			'birthday' => 'Birthday',
			'work' => 'Work',
			'mobile' => 'Mobile',
			'home_province' => 'Home Province',
			'home_city' => 'Home City',
			'mary' => 'Mary',
			'school' => 'School',
			'like' => 'Like',
			'good_at' => 'Good At',
			'pic_url' => 'Pic Url',
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
		$criteria->compare('login_name',$this->login_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('insert_time',$this->insert_time,true);
		$criteria->compare('stauts',$this->stauts);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('work',$this->work,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('home_province',$this->home_province,true);
		$criteria->compare('home_city',$this->home_city,true);
		$criteria->compare('mary',$this->mary);
		$criteria->compare('school',$this->school,true);
		$criteria->compare('like',$this->like,true);
		$criteria->compare('good_at',$this->good_at,true);
		$criteria->compare('pic_url',$this->pic_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
