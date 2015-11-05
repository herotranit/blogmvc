<?php 
function index_index(){
	$data=array();

	$limit=3;	
	
	$data['category2']=model('category')->category();
	$category=model('category')->category();
	$cats = array();
	$category_id = array();
	foreach ($category as &$c) {
		$category_id = $c['category_id'];
	    $c['post'] = model('post')->getposthome($category_id,$limit);
	}
	
	//die();
	$data['posthome']=$category;
	$data['template_file']='website/post/home.php';
	render('/website/layout.php',$data);

}


?>