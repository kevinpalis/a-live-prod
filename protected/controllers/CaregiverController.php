<?php

class CaregiverController extends RController
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
			'rights', //use 	RIGHTS access control filters
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
		$model=new Caregiver;
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionCiView($id)
	{
		$model=new Caregiver('search');
		$this->render('ciView',array(
			'model'=>$this->loadCiModel($id),
		));
		
		/////
		/*
		$model=new Caregiver('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Caregiver'])) {
			$model->attributes=$_GET['Caregiver'];
		}

		$this->render('ciView',array(
			'model'=>$model,
		));*/
	}

	public function loadCiModel($id)
	{
		$model=Clientintake::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Caregiver;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Caregiver']))
		{
			$_POST['Caregiver']['height'] = ($_POST['Caregiver']['heightFt']*12)+$_POST['Caregiver']['heightIn'];
			$model->attributes=$_POST['Caregiver'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Caregiver']))
		{
			$_POST['Caregiver']['height'] = ($_POST['Caregiver']['heightFt']*12)+$_POST['Caregiver']['heightIn'];
			$model->attributes=$_POST['Caregiver'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
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
		$dataProvider=new CActiveDataProvider('Caregiver');
		$ciDataProvider=new CActiveDataProvider('Clientintake');
		$model=new Caregiver('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Caregiver'])) {
			$model->attributes=$_GET['Caregiver'];
		}

		$this->render('index',array(
			'model'=>$model,
			'dataProvider'=>$dataProvider,
			'ciDataProvider'=>$ciDataProvider,
		));

		/*
		$dataProvider=new CActiveDataProvider('Caregiver');
		$ciDataProvider=new CActiveDataProvider('Clientintake');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'ciDataProvider'=>$ciDataProvider,
		));
		*/
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Caregiver('search');
		$ciModel = new Clientintake('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Caregiver'], $_GET['Clientintake'])) {
			$model->attributes=$_GET['Caregiver'];
			$ciModel->attributes=$_GET['Clientintake'];
		}

		$this->render('admin',array(
			'model'=>$model,
			'ciModel'=>$ciModel,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Caregiver::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='caregiver-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
