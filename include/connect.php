<?php
//DEV
/*
$serverName = "192.168.1.37, 1433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"EAMDEV", "UID"=>"EAMDEV", "PWD"=>"EAMDEVpASSWORD1401()");
*/
//UAT

$serverName = "192.168.1.38, 1433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"EAMPRD", "UID"=>"sa", "PWD"=>"pASSWORD1401()");

/*
$serverName = "localhost\SQLEXPRESS"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"EAMDEV4", "UID"=>"sa", "PWD"=>"P3ople4u");
*/

$conn = sqlsrv_connect( $serverName, $connectionInfo);

if(!$conn) {
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}


?>