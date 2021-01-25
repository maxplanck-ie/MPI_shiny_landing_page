<html>
<head>
<title>Server Side Logger</title>
</head>

<body>

<?php
    error_reporting(E_ALL); ini_set('display_errors', 'on');

/**    if ( isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' )
{**/
    echo("Success");
    $jsonstr = $_POST["data"];
    
    file_put_contents("/var/www/html/logger.json", $jsonstr, FILE_APPEND);
    file_put_contents("/var/www/html/logger.json", "\n", FILE_APPEND);
    error_log($jsonstr,0);

//}
?>

</body>

</html>
