<?php
    require_once(__DIR__ . "/../model/config.php"); //opens database code in mdoel folder
    
    $query = $_SESSION["connection"]->query("CREATE TABLE posts (" //creates table
            . "id int(11) NOT NULL AUTO_INCREMENT," //creates ids
            . "title varchar(285) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id))");
    
    if($query) {
        echo "successfully create table: posts"; //echos if it checks the query id and it exists
    }
    else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>"; //checks if there's an error and prints it out as a paragraph
    }
