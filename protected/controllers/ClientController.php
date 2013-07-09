<?php

class ClientController extends RController
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
			
			$empId = Client::model()->findByPk($id);
			
			$params['employeeId'] = $empId->employeeId;
			
			if (Yii::app()->user->checkAccess('Client Own', $params) || Yii::app()->user->checkAccess('Admin'))
			{
			$this->render('view',array(
				'model'=>$this->loadModel($id),
			));
			}else{
				throw new CHttpException(400,'Invalid request. You do not have authorization to view this data.');
			}
			
			
			
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Client;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Client']))
		{
			//compute client height
			$_POST['Client']['height'] = ($_POST['Client']['heightFt']*12)+$_POST['Client']['heightIn'];
			$model->attributes=$_POST['Client'];
			if($model->save())
				$this->redirect(array('clientcontactperson/create','clientId'=>$model->id,'success'=>'Client'));
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
		
		
		$empId = Client::model()->findByPk($id);
		
		$params['employeeId'] = $empId->employeeId;
		
		if (Yii::app()->user->checkAccess('Client Own', $params) || Yii::app()->user->checkAccess('Admin'))
		{
			$model=$this->loadModel($id);

			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);

			if(isset($_POST['Client']))
			{
				//compute client height
				$_POST['Client']['height'] = ($_POST['Client']['heightFt']*12)+$_POST['Client']['heightIn'];
			
				$model->attributes=$_POST['Client'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}

			$this->render('update',array(
				'model'=>$model,
			));
		}else{
			throw new CHttpException(400,'Invalid request. You do not have authorization to edit this data.');
		}
		
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
		$dataProvider=new CActiveDataProvider('Client',array(
		    'criteria'=>array(
		        'with'=>array('clientcontactpeople'),
		        'together'=>'true',


		    ),
		    'pagination'=>array(
		        'pageSize'=>20,
		    ),
	));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionList()
	{
		$dataProvider=new CActiveDataProvider('Client');
		$this->render('list',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Client('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Client']))
			$model->attributes=$_GET['Client'];

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
		$model=Client::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='client-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionSimpleSearch(){
		if(isset($_GET['clientID'])){
			$this->redirect(array('client/'.$_GET['clientID'],));
		}
	}
	
	public function actionUpdateStatus($id){
			$model=$this->loadModel($id);
			
			
			if(isset($_POST['Client']))
			{
			
				$model->attributes=$_POST['Client'];
				if($model->save())
					$this->redirect('../../site/page?view=client_menu');
			}

			
			$this->render('updateStatus',array(
				'model'=>$model,
			));
	}
}
