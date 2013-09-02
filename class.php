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

  protected function post() {
    print_r($_SERVER['QUERY_STRING']);
	if ($_SERVER['QUERY_STRING'] == 'class=sign_up') {
    $obj = new write_info;
	}
	elseif ($_SERVER['QUERY_STRING'] == 'class=login') {
    //run an authenticating class here 
    echo 'hi Mark';
	$obj = new authenticate;
  // print_r($obj);
   }
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
<LABEL for="email">email: </LABEL>
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

}

class login extends page {
  public function __construct() {
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
}

class homepage extends page {}

class write_info{
  function __construct(){
    
	$first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
	$username = $_POST['username'];
    $password = $_POST['password'];
    
	$user_info = array('first name' =>$first_name,'last name'=>$last_name, 'email' => $email,'username'=>$username,'password'=> $password);
    print_r($user_info);
    
	$user_file = fopen('user_records.csv', 'a');
    fputcsv($user_file, $user_info);
    fclose($user_file);
   }
    
}   
class authenticate{
function __construct(){
echo 'hello Mark!';
if ($_POST['username'] == null || $_POST['password'] == null){
echo 'please write both your username and your password'; 
 //$obj = new login;
 }
 }
}
?>
