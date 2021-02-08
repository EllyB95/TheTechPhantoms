<?php
/* Database credentials.*/

$db_connection = pg_connect("
    host=localhost 
    dbname=cmha 
    user=postgres 
    password=T3chPh@ntoms
") or die('Could not connect:' . pg_last_error());

?>