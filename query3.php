<!DOCTYPEhtml>
<?php
include_once('pdo_connect.php');

    $STH =$DBH->prepare("SELECT Name, Assets FROM project.institutions INNER JOIN financial11 ON institutions.ID = financial11.ID ORDER BY Assets;");
        $STH->setFetchMode(PDO::FETCH_ASSOC);
        $STH->execute();
                $data = $STH->fetchall();                
  
               include_once ('table.php');
?>