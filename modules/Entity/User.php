<?php
require_once '../database/LibraryClasses.php';

class Model_User extends RedBean_SimpleModel {
	
	private $emailId; //email
	private $password; // password
	private $firstName; // firstname
	private $middleName; //middlename
	private $lastName;  // lastname
	private $contact;  //contact
	private $address;  //address
	private $capability; // capability
	private $profilePicture; //picture
	private $billingAddresses; //billingaddress
	private $lastLogin; //lastlogin
	private $cart; //cart
	
			
	function __construct(){
		
	}
	
    public function addUser(){
    	$this -> bean -> emailId='y@g.com';
		R::store($this->bean);		
    }
}


	
?>