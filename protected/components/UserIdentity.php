<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public $user_message;
	public function authenticate()
	{
		$this->user_message=Admin::model()->find(array(
			'select'=>'*',
			'condition'=>'login_name=:login_name',
			'params'=>array(':login_name'=>$this->username),
		));
		if(empty($this->user_message))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($this->user_message->password!==md5($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}