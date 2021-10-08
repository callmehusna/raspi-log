<?php
    // Connect to MySQL
    include("connect.php");
  date_default_timezone_set('Asia/Jakarta');
 $dateS = date('m/d/Y h:i:s', time());
echo $dateS;
$SQL = "INSERT INTO raspi_db.data (date, data) VALUES ('$dateS','".$_GET["data"]."')";     
// Execute SQL statement
mysql_query($SQL);
