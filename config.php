<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'forevery.database.windows.net');
define('DB_USERNAME', 'jorgen.sorheim@southbrook.capital');
define('DB_PASSWORD', 'Jf89j9825q!');
define('DB_NAME', 'persons');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>