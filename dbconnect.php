<?php
//$host = '127.0.0.1:53542'; //'dedwards-cst323-azurewebapp.mysql.database.azure.com';
//$username = 'azure';
//$password = '6#vWHD_$';
//$db_name = 'contactmanagement';

//$mysql_handler = mysql_connect($host, $username, $password);
//mysql_select_db($db_name, $mysql_handler);

//Initializes MySQLi
//$conn = mysqli_init();
//$connect = mysqli_real_connect($host, $username, $password, $db_name, 53542, NULL);
//mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
//mysqli_real_connect(mysqli_init(), $host, $username, $password, $db_name, 53542, NULL);

//If connection failed, show the error
//if (mysqli_connect_errno())
//{
    //die('Failed to connect to MySQL: '.mysqli_connect_error());
//}
$connect = new mysqli('127.0.0.1:53542', 'azure', '6#vWHD_$', 'contactmanagement');

        if(!$connect){
            die(mysqli_error($connect));
        }
    
?>
