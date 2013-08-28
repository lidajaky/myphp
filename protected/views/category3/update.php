<?php
/* @var $this Category3Controller */
/* @var $model Category3 */

$this->breadcrumbs=array(
	'Category3s'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Category3', 'url'=>array('index')),
	array('label'=>'Create Category3', 'url'=>array('create')),
	array('label'=>'View Category3', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Category3', 'url'=>array('admin')),
);
?>

<h1>Update Category3 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>