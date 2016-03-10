<?php

class usuarios extends AppController {

    public function __construct() {
        $querySQL = $this->db->execute("SELECT *FROM user");
        
        while($row = mysqli_fetch_array($querySQL)) {
	  echo $row['nome'] . "<br />";

          
	  }
    }
}
