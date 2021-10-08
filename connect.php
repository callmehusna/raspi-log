<?php
$MyUsername = "raspi";  
$MyPassword = "password"; 
$MyHostname = "localhost";      // this is usually "localhost" unless your database resides on a different server
$dbh = mysql_pconnect($MyHostname , $MyUsername, $MyPassword);
$selected = mysql_select_db("raspi_db",$dbh); //Enter your database name here 
?>
