<?php
$host = '127.0.0.1'; //'dedwards-cst323-azurewebapp.mysql.database.azure.com';
$username = 'root';
$password = '';
$db_name = 'contactmanagement';

//$mysql_handler = mysql_connect($host, $username, $password);
//mysql_select_db($db_name, $mysql_handler);

//Initializes MySQLi
$conn = mysqli_init();

//mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, $host, $username, $password, $db_name, 53542, NULL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
//$connect = new mysqli('localhost', 'root', '', 'contactmanagement');

        //if(!$connect){
            //die(mysqli_error($connect));
        //}
    
?>
