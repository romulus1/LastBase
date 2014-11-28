<?php

class Database { //you store information

    private $connection;
    private $host;
    private $username;
    private $passwords;
    private $database;
    public $error;

    public function __construct($host, $username, $password, $database) { //stores the information that passes
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connection = new mysqli($host, $username, $password); //uses mysqli to create the connection, always going to be needed

        if ($this->connection->connect_error) { //creates an if statement and runs the code if the connection is not avialable
            die("<p>Error: " . $this->connection->connect_error . "</p>"); //kills code so nothing appears if there's no connection
        }

        $exists = $this->connection->select_db($database); //selects database

        if (!$exists) { //if statement checks if server exists
            $query = $this->connection->query("CREATE DATABASE $database"); //adds database to the query
            if ($query) { //if statement echo out code if the database exists
                echo "<p>Successfully created databse: " . $database . "</p>"; //runs this code if the database is successful (if it exists)
            }
        } else { //else runs if database already exists
            echo "<p>database already exists.</p>"; //runs if database exists
        }
    }

    public function openConnection() { //eliminates repetition
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) { //creates an if statement and runs the code if the connection is not avialable
            die("<p>Error: " . $this->connection->connect_error . "</p>"); //kills code so nothing appears if there's no connection
        }
    }

    public function closeConnection() { //eliminates repetition
        if (isset($this->connection)) { //isset determines if a variable is empty(null)
            $this->connection->close();
        }
    }

    public function query($string) { //eliminates repetition
        $this->openConnection();

        $query = $this->connection->query($string);

        if(!$query) {
            $this->error = $this->connection->error;
        }
        
        $this->closeConnection();

        return $query;
    }

}
