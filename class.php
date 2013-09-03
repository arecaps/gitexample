<?php

$obj = new program();

class program {
  public function __construct() {	
    if(isset($_REQUEST['class'])) {
      
      $class = $_REQUEST['class'];
      $obj = new $class();
      } else {	

          $obj = new homepage();
        }
    }
}

class page {	
  public function __construct() {
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
      $this->get();
      } else {
        $this->post();
        }	
  
    }
  protected function get() {
    echo '<a href="class.php?class=sign_up">Sign up</a>' . "<br> \n";
    echo '<a href="class.php?class=login">Log in</a>' . "<br> \n";	 
	}
}

class sign_up extends page {
  public function get() {

  $form = '<FORM action="class.php?class=sign_up" method="post">
	<P>
	<LABEL for="firstname">First name: </LABEL>
	<INPUT type="text" name="firstname" id="firstname"><BR>
	<LABEL for="lastname">Last name: </LABEL>
	<INPUT type="text" name="lastname" id="lastname"><BR>
	<LABEL for="email    ">email: </LABEL>
	<INPUT type="text" name="email"id="email"><BR>
	<LABEL for="username">Username: </LABEL>
	<INPUT type="text" name="username" id="username"><BR>		
	<LABEL for="password">Password: </LABEL>
	<INPUT type="text" name="password" id="password"><BR>
	<INPUT type="submit" value="Send"> 
	</P>
	</FORM>';

  echo $form;
  }	
  public function post(){
    $obj = new write_info;
  }
}

class login extends page {
  public function get() {
	$form = '<FORM action="class.php?class=login" method="post">
	<P>
	<LABEL for="username">Username: </LABEL>
	<INPUT type="text" name="username" id="username"><BR>
	<LABEL for="password">Password: </LABEL>
	<INPUT type="text" name="password" id="password"><BR>
	<INPUT type="submit" value="Send"> 
	</P>
	</FORM>';
	
	echo $form;
  }

  public function post(){
    $obj = new authenticate;
  }
}

class homepage extends page {}

class write_info{
  function __construct(){
    if ($_POST['firstname'] == null || $_POST['lastname'] == null || $_POST['email'] == null || $_POST[username] == null || $_POST['password'] == null){
	echo 'Sorry, you must fill out all fields to proceed';
	echo sign_up::get();
	}
	else {
	$first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
	$username = $_POST['username'];
    $password = $_POST['password'];
    
	$user_info = array($first_name,$last_name, $email, $username, $password);
    print_r($user_info);
    
	$user_file = fopen('user_records.csv', 'a');
    fputcsv($user_file, $user_info);
    fclose($user_file);
   }
   }
 //instantiate transactions class here   
}   

class authenticate{
  function __construct(){
    if ($_POST['username'] == null || $_POST['password'] == null){
      echo 'Error! Please enter both your username and your password in order to proceed<br>';
      echo login::get();
    }
 //validate here
//else
 //after validation send it to transactions
 }
}
?>
