<?php
/* @var $this AdTypeController */
/* @var $model AdType */

$this->breadcrumbs=array(
	'Ad Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AdType', 'url'=>array('index')),
	array('label'=>'Create AdType', 'url'=>array('create')),
	array('label'=>'View AdType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AdType', 'url'=>array('admin')),
);
?>

<h1>Update AdType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>