 <?php
 $host ='localhost';
        $dbname='school_data';
        $user='Yehuda';
        $pass ='pcs';
        
                try {
                 $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                } catch (PDOexception $e){
                        echo $e->getMessage();
                                }
                                
        $rowcount = 0;
        
	//put in name of csv file below
		
		@$handle = fopen("", "r");
                        while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
                                if($rowcount ==0){
                                        $rowcount++;
                                        continue; 
                                } else {
                                $rows[] = $data;
                                }
        
        $row = $rows[0];
        unset ($rows);
                
                $array['ID'] = $row[1];
                $array['enrollment'] = $row[4];
              
             $STH =$DBH->prepare("INSERT INTO enrollment (ID, enrollment) VALUES (:ID, :enrollment)");

                        if ($STH->execute($array)) {
                                                echo "Successfully inserted record # $rowcount . <br/>";

                                } else {
                                                echo 'Failed to insert record <br/>';
                        }

                unset($row);
                unset($array);
                $rowcount++;
        }
                fclose($handle);
	?>