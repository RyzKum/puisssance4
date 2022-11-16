<?php

// $className = 'database.inc';

// spl_autoload_register(function($className){
//     require 'include/'.$className.'.php';
//  });

include('../include/database.inc.php');



$sth = $dbh->query('SELECT * FROM utlisateur');
$donnees = $sth->fetchAll();
print_r($donnees);

?>