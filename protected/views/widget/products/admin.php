<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Manage Products Advance', 'url'=>array('product_adv')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('products-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Products</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<!------------------------------------------------------->
<br />TESTING NUMBERR:
<?php
//string money_format ( string $format , float $number ) 
//setlocale(LC_MONETARY, 'en_US');
//echo money_format('%i', '30000');
echo number_format(3000000.00);
?>
<!------------------------------------------------------->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'products-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'proID',
		'catID',
		'supID',
		'item',
		//'price',
		//array( 'name'=>'price', 'value'=>'$data->price','htmlOptions'=>array('width'=>'50px'),),  
		array( 'name'=>'price', 'value'=>'number_format($data->price)',), // CONVER VALUE TO number_format()
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
