<?php
$serverName = "TPCV359-268.teleperformance.co\SQL2016DEV,5082"; //serverName\instanceName
$connectionInfo = array( "Database"=>"TPCLCODESAAIMIberoLatam", "UID"=>"usrDESAAIMIberoLatam", "PWD"=>"1DESAAIMIberoLatam*");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>