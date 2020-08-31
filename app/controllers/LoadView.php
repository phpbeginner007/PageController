<?php

class LoadView{


function view($view){
  if (file_exists( APPROOT."/views/".$view.".php" )) {

  	require APPROOT."/views/".$view.".php"; 
  	
  }else{
    require APPROOT."/views/index.php"; 
  }
 }
}

?>