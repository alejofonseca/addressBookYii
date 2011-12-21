<?php
// jquery funcionando
Yii::app()->clientScript->registerCoreScript('jquery');

Yii::app()->clientScript->registerScript('helloscript',"
        $('#login').click(function(){
        	alert('jindex');
        });
    ",CClientScript::POS_READY);
?>

<?php $this->pageTitle=Yii::app()->name; ?>

<p align="justify">This application was built in order to fulfill the requirements for a software
developer position at <?php echo CHtml::link('Mesaenlinea','http://www.mesaenlinea.com',
array('target'=>'_blank'));?>.
It is a small address book that allows users to log in and create, edit and delete
their contacts, which are saved into a database. JQuery was used to load the view files, 
PHP as the server language and MySql as the database engine. </p>

<p>The sample usernames to log in are <b>demo1</b> and <b>demo2</b>, which share the
same password <b>01123</b> (first 5 Fibonacci numbers).</p>

<div id="errorMsg"></div>

<p>Username: <input type="text" name="usrname" id="usrname" size="10" value="">
<br /><br />
Password: <input type="password" name="password" id="password" size="8" value="">
<br /><br />
<input type="button" id="login" value="Log In" />
</p>




<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login CActiveForm'); ?>
	</div>
	
	<?php echo CHtml::button('Button Text', array('id' => 'logins')); ?>

<?php $this->endWidget(); ?>