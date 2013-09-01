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
  print_r($_REQUEST);
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
  print_r($_POST);
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
?>
