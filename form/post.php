<?php
// check if a form was submitted
if( !empty( $_POST ) ){
// convert form data to json format
$json = json_encode( $_POST );
// make sure there were no problems
//if( json_last_error() != JSON_ERROR_NONE ){
    //exit;  // do your error handling here instead of exiting
// }
$file = 'entries.json';
// write to file
//   note: _server_ path, NOT "web address (url)"!
file_put_contents( $file, $json, FILE_APPEND);
} ?>