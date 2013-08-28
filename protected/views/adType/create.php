<?php
/* @var $this AdTypeController */
/* @var $model AdType */

$this->breadcrumbs=array(
	'Ad Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AdType', 'url'=>array('index')),
	array('label'=>'Manage AdType', 'url'=>array('admin')),
);
?>

<h1>Create AdType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>