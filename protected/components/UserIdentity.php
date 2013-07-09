<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identify the user.
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
	private $_id;

	public function authenticate()
	{
		
		$record=Employee::model()->findByAttributes(array('email'=>$this->username));
        if($record===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($record->password!==crypt($this->password,$record->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$record->id;
            $this->setState('department', $record->department);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode; 

		/*$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;*/
	}

	public function getId()
    {
        return $this->_id;
    }

 	public function getDepartment()
	{
		return $this->deparmtent;
	}
	
	public function actionCheckVisibility($option){
		
				
				switch ($option) {
				    case 'client':
				        	if($this->department == "Operations")
								return false;
							else
								return true;
							
				    case 'admin':
				        	if($this->department == "Admin" || $this->department == "Management")
								return true;
							else
								return false;
							
				    case 'facility':
				        	if($this->department == "Admin" || $this->department == "Management" || $this->department == "Staffing")
								return true;
							else
								return false;
							
						
					case 'rights':
							if($this->department == "Admin")
								return true;
							else
								return false;
						
						
					case 'caregiver':
							if($this->department == "Admin" || $this->department == "Management" || $this->department == "Staffing")
								return true;
							else
								return false;
					
				}
				
				
		
		
	}
}