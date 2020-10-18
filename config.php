<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>projectForevery</title>
</head>
<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:forevery.database.windows.net,1433; Database = forevery", "jorgen.sorheim", "{Jf89j9825q!}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "jorgen.sorheim", "pwd" => "{Jf89j9825q!}", "Database" => "forevery", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:forevery.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
<body>
</body>
</html>