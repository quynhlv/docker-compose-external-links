<?php 
$user = 'root';
$pass = '123456';

try {
    $dbh = new PDO('mysql:host=mysql;dbname=test', $user, $pass);
    foreach($dbh->query('SELECT COUNT(*) from test') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

phpinfo();
