<?php
$serverName = "server
$connectionInfo = array( "Database"=>"database", "UID"=>"user", "PWD"=>"pass*");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>