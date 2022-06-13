<?php
include_once("db_connect.php");
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['Nom'])) {
		$update_field.= "Nom='".$input['Nom']."'";
	} else if(isset($input['Nombre'])) {
		$update_field.= "Nombre='".$input['Nombre']."'";
	} else if(isset($input['Prix_unitaire'])) {
		$update_field.= "Prix_unitaire='".$input['Prix_unitaire']."'";
	} else if(isset($input['Prix_total'])) {
		$update_field.= "Prix_total='".$input['Prix_total']."'";
	} else if(isset($input['Description'])) {
		$update_field.= "Description='".$input['Decription']."'";
	} else if(isset($input['Date_premiere'])) {
		$update_field.= "Date_premiere='".$input['Date_premiere']."'";
	} else if(isset($input['Date_derniere'])) {
		$update_field.= "Date_derniere='".$input['Date_derniere']."'";
	}	
	if($update_field && $input['id']) {
		$sql_query = "UPDATE BDD SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}


