<!DOCTYPEhtml>
<?php
include_once('pdo_connect.php');

    $STH =$DBH->prepare("SELECT Name, Enrollment FROM project.institutions INNER JOIN enrollment11 ON institutions.ID = enrollment11.ID ORDER BY Enrollment DESC LIMIT 10;");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
                $data = $STH->fetchall();                
  
               include_once ('table.php');
?>
			   
