<?php

class Core{

private $currentMethod = 'index'; 
private $controllerPage = 'Controllerpage'; // class
private $currentArray = []; // call method


function __construct(){
	if (class_exists('Controllerpage')) {
		$this->controllerPage = new Controllerpage();
	}
	
	
	$url = $this->getUrl();
	
     if (isset($url[0])) {	
	 	$this->currentArray[] = $url[0];
	 }else{
	    $this->currentArray[] = 'index';
	 }
	


call_user_func_array(array($this->controllerPage, $this->currentMethod),
                     array($this->currentArray[0]));

 }

 function getUrl()
   {

    if (isset($_GET['test'])) {
    	$url = rtrim($_GET['test'], '/');
    	$url = filter_var($url, FILTER_SANITIZE_URL);
    	$url = explode('/', $url);
    	return $url;
    }
 }
}

?>
