<!DOCTYPEhtml>
<?php
include_once('pdo_connect.php');

    $STH =$DBH->prepare("SELECT Name, Liabilities FROM project.institutions INNER JOIN financial11 ON institutions.ID = financial11.ID ORDER BY Liabilities DESC LIMIT 10;");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
                $data = $STH->fetchall();                
  
               include_once ('table.php');
?>