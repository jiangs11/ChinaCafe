<?php

// ConnectDB() - takes no arguments, returns database handle
// USAGE: $dbh = ConnectDB();
function ConnectDB() {

    /*** mysql server info ***/
    $hostname = 'localhost';
    $username = 'root';
    $password = 'Kaneki420!';
    $dbname   = 'chinacafe';

    try {
        $dbh = new PDO("mysql:host=$hostname;dbname=$dbname",
                       $username, $password);
    } catch(PDOException $e) {
        die ('PDO error in "ConnectDB()": ' . $e->getMessage() );
    }

    return $dbh;
}

?>
