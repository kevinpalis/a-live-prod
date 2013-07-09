<?php

class ClientintakeController extends RController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
			'rights', //use RIGHTS access control filters
		);
	}


	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	/*public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}*/

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		
		$getClientId = Clientintake::model()->findByPk($id);
		$empId = Client::model()->findByPk($getClientId->clientId);

		$params['employeeId'] = $empId->employeeId;
		if (Yii::app()->user->checkAccess('Client Intake Own', $params) || Yii::app()->user->checkAccess('Admin'))
		{
			$this->render('view',array(
				'model'=>$this->loadModel($id),
			));
		}else
		throw new CHttpException(400,'Invalid request. You do not have authorization to view this data.');
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Clientintake;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);


		if(isset($_POST['Clientintake']))
		{

			$model->attributes=$_POST['Clientintake'];

			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
				//$this->redirect(array('../index.php/client','id'=>$model->clientId));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		
		$getClientId = Clientintake::model()->findByPk($id);
		$empId = Client::model()->findByPk($getClientId->clientId);

		$params['employeeId'] = $empId->employeeId;
		if (Yii::app()->user->checkAccess('Client Intake Own', $params) || Yii::app()->user->checkAccess('Admin'))
		{
			$model=$this->loadModel($id);

			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);

			if(isset($_POST['Clientintake']))
			{
				$model->attributes=$_POST['Clientintake'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}

			$this->render('update',array(
				'model'=>$model,
			));
		}else
		throw new CHttpException(400,'Invalid request. You do not have authorization to edit this data.');
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Clientintake');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Clientintake('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Clientintake']))
			$model->attributes=$_GET['Clientintake'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Clientintake::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='clientintake-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function checkDuplicate($clientId){

		$model = Clientintake::model()->findByAttributes(array('clientId'=>$clientId));
		if(!empty($model)){
			return $model->id;
		}else
			return false;
	}

	public function buttonHiddenDays($serviceDays){

		$stringDays = '';
		foreach($serviceDays as $loopDay => $day){
			switch ($loopDay) {
				case '0':
					if($day=='0'){
						$stringDays.="<input type='hidden' value='0' id='Clientintake_serviceDays_0' name='Clientintake[serviceDays][0]'>";
					}else{
						$stringDays.="<input type='hidden' value='1' id='Clientintake_serviceDays_0' name='Clientintake[serviceDays][0]'>";
					}
					break;
				case '1':
					if($day=='0'){
						$stringDays.="<input type='hidden' value='0' id='Clientintake_serviceDays_1' name='Clientintake[serviceDays][1]'>";
					}else{
						$stringDays.="<input type='hidden' value='1' id='Clientintake_serviceDays_1' name='Clientintake[serviceDays][1]'>";
					}
					break;
				case '2':
					if($day=='0'){
						$stringDays.="<input type='hidden' value='0' id='Clientintake_serviceDays_2' name='Clientintake[serviceDays][2]'>";
					}else{
						$stringDays.="<input type='hidden' value='1' id='Clientintake_serviceDays_2' name='Clientintake[serviceDays][2]'>";
					}
					break;
				case '3':
					if($day=='0'){
						$stringDays.="<input type='hidden' value='0' id='Clientintake_serviceDays_3' name='Clientintake[serviceDays][3]'>";
					}else{
						$stringDays.="<input type='hidden' value='1' id='Clientintake_serviceDays_3' name='Clientintake[serviceDays][3]'>";
					}
					break;
				case '4':
					if($day=='0'){
						$stringDays.="<input type='hidden' value='0' id='Clientintake_serviceDays_4' name='Clientintake[serviceDays][4]'>";
					}else{
						$stringDays.="<input type='hidden' value='1' id='Clientintake_serviceDays_4' name='Clientintake[serviceDays][4]'>";
					}
					break;
				case '5':
					if($day=='0'){
						$stringDays.="<input type='hidden' value='0' id='Clientintake_serviceDays_5' name='Clientintake[serviceDays][5]'>";
					}else{
						$stringDays.="<input type='hidden' value='1' id='Clientintake_serviceDays_5' name='Clientintake[serviceDays][5]'>";
					}
					break;
				case '6':
					if($day=='0'){
						$stringDays.="<input type='hidden' value='0' id='Clientintake_serviceDays_6' name='Clientintake[serviceDays][6]'>";
					}else{
						$stringDays.="<input type='hidden' value='1' id='Clientintake_serviceDays_6' name='Clientintake[serviceDays][6]'>";
					}
					break;
				
				default:
					# code...
					break;
			}
			
		}
		return $stringDays;
	}

	public function buttonPrintDays($serviceDays){

		$stringDays = '';
		foreach($serviceDays as $loopDay => $day){
			switch ($loopDay) {
				case '0':
					if($day=='0'){
						$stringDays.="<a id='M' class='btn active' onClick='updateDays('Clientintake_serviceDays_0');'>Mon</a>";
					}else{
						$stringDays.="<a id='M' class='btn' onClick='updateDays('Clientintake_serviceDays_0');'>Mon</a>";
					}
					break;
				case '1':
					if($day=='0'){
						$stringDays.="<a id='T' class='btn active' onClick='updateDays('Clientintake_serviceDays_1');'>Tue</a>";
					}else{
						$stringDays.="<a id='T' class='btn' onClick='updateDays('Clientintake_serviceDays_1');'>Tue</a>";
					}
					break;
				case '2':
					if($day=='0'){
						$stringDays.="<a id='W' class='btn active' onClick='updateDays('Clientintake_serviceDays_2');'>Wed</a>";
					}else{
						$stringDays.="<a id='W' class='btn' onClick='updateDays('Clientintake_serviceDays_2');'>Wed</a>";
					}
					break;
				case '3':
					if($day=='0'){
						$stringDays.="<a id='Th' class='btn active' onClick='updateDays('Clientintake_serviceDays_3');'>Thu</a>";
					}else{
						$stringDays.="<a id='Th' class='btn' onClick='updateDays('Clientintake_serviceDays_3');'>Thu</a>";
					}
					break;
				case '4':
					if($day=='0'){
						$stringDays.="<a id='F' class='btn active' onClick='updateDays('Clientintake_serviceDays_4');'>Fri</a>";
					}else{
						$stringDays.="<a id='F' class='btn' onClick='updateDays('Clientintake_serviceDays_4');'>Fri</a>";
					}
					break;
				case '5':
					if($day=='0'){
						$stringDays.="<a id='Sa' class='btn active' onClick='updateDays('Clientintake_serviceDays_5');'>Sat</a>";
					}else{
						$stringDays.="<a id='Sa' class='btn' onClick='updateDays('Clientintake_serviceDays_5');'>Sat</a>";
					}
					break;
				case '6':
					if($day=='0'){
						$stringDays.="<a id='Su' class='btn active' onClick='updateDays('Clientintake_serviceDays_6');'>Sun</a>";
					}else{
						$stringDays.="<a id='Su' class='btn' onClick='updateDays('Clientintake_serviceDays_6');'>Sun</a>";
					}
					break;
				
				default:
					# code...
					break;
			}
			
		}
		return $stringDays;
	}
}
