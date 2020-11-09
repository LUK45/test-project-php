<?php

require_once 'vendor/autoload.php';
use Respect\Validation\Validator as v;

$app = require "./core/app.php";

// Create new instance of user
$user = new User($app->db);
// Insert it to database with POST data

$data = array(
	'name' => $_POST['name'],
	'email' => $_POST['email'],
	'phone_number' => $_POST['phone_number'],
	'city' => $_POST['city']
);

$rules = array(
	'name' => v::stringType()->notEmpty()->length(1,60)->setName('name'),
	'email' => v::email()->notEmpty()->setName('email'),
	'phone_number' => v::phone()->notEmpty()->setName('phone number'),
	'city' => v::stringType()->notEmpty()->length(1,60)->setName('city')
);

$errors = array();
$error = False;

foreach($data as $key => $value){
	try {
		$rules[$key]->check($value);
	} catch (Exception $e){
		array_push($errors, array('value' => $key, 'error' => $e->getMessage()));
		$error = True;
	}
}	

if(empty($errors) && !$error){
	$user->insert($data);
	$users = User::find($app->db,'*');
	
	// Start capturing of output
	ob_start();
	include './views/table.php';
	// Assign output to $content which will be rendered in layout
	$content = ob_get_contents();
	// Stop output capturing
	ob_end_clean();

	http_response_code(200);
	header('Content-Type: application/json');
	echo json_encode(array(
		'success' => True,
		'content' => $content
	));

} else {
	http_response_code(422);
	header('Content-Type: application/json');
	echo json_encode(array(
		'success' => False, 
		'errors' => $errors
	));

}
