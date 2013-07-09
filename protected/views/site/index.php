<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

if (Yii::app()->user->isGuest)
            $this->redirect(Yii::app()->createUrl('site/login'));

?>
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>
<br/>
<br/>
<br/>
<div class="row-fluid pagination-centered">
	
	<p class="muted">Dashboard is still under construction. Please wait for updates. :)</p>
	
</div>

<br/>
<br/>
<br/>
<br/>
<br/>