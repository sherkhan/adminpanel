<?php
// check if a form was submitted
if( !empty( $_POST ) ){
	$file = '';
	echo "<pre>".print_r($_POST, true)."</pre>";
	if (!empty($_POST['master'])) {
		$file = $_POST['master'].'.json';
		unset($_POST['master']);		
	} else {
		die();
	}
// convert form data to json format
$json = json_encode( $_POST );
// make sure there were no problems
//if( json_last_error() != JSON_ERROR_NONE ){
    //exit;  // do your error handling here instead of exiting
// }
// write to file
//   note: _server_ path, NOT "web address (url)"!
file_put_contents( $file, $json, FILE_APPEND);
echo 'ok';
} ?>