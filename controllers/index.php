<?php 
function index_index(){
	$data=array();

	$limit=2;
	$limit2=5;	
	$data['category']=model('category')->category();
	$data['posthome']=model('post')->getAllpost($limit);
	$data['posthome1']=model('post')->getAllpost($limit2);
	$data['template_file']='website/post/home.php';
	render('/website/layout.php',$data);

}


?>