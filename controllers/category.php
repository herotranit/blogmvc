<?php 

function category_list(){
	$data=array();
	$data['category']=model('category')->category();
	render('/website/category/menu.php',$data);
}
