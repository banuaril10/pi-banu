<?php
	//change font size 
	$html = chr(27) . "!" . 0;
	$html .= $_POST['html'];
	$html .= '\r\n'; 
	$html .= '\r\n'; 
	$html .= '\r\n'; 
	$html .= '\r\n'; 
	$html .= '\r\n'; 
	$html .= chr(29) . "V" . 0; 
	// $html .= '\r\n'; 
	
	
	$cmd='';
    $cmd='echo "'.$html.'" | lpr -o raw'; //linux

    $child = shell_exec($cmd); 
	
	$data = array("result"=>1, "msg"=>$child);
		
	$json_string = json_encode($data);	
	echo $json_string;

?>