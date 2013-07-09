<?php
class ClientStatus extends CWidget {
 
    public $statuses = array();
    public $label;
 
   

	public function fetchClients($status){
		
		$getDept = Employee::model()->findByPk(Yii::app()->user->getId());
		
		
			//no filter if Admin or Staffing
			if($getDept->department == "Admin" || $getDept->department == "Staffing"){

				$criteria=new CDbCriteria;
				$criteria->select='id,fname,lname';
				$criteria->condition='status=:status';
				$criteria->params=array(':status'=>$status);
				$clients = Client::model()->findAll($criteria);

			}else{
			
				$criteria=new CDbCriteria;
				$criteria->select='id,fname,lname';
				$criteria->condition='employeeId=:employeeId AND status=:status';
				$criteria->params=array(':status'=>$status,':employeeId'=>Yii::app()->user->getId());
				$clients = Client::model()->findAll($criteria);	
			}
			
			return $clients;	
	}
	
	public function run() {
        $this->render('clientStatus');
    }
 
}
?>