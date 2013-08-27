<?php
$form = '<FORM action="info.php" method="post">
<P>
<LABEL for="username">Username: </LABEL>
<INPUT type="text" name="username" id="username"><BR>
<LABEL for="password">Password: </LABEL>
<INPUT type="text" name ="password" id="password"><BR>
<INPUT type="submit" value="Send"> 
</P>
</FORM>
';

echo $form;
?>