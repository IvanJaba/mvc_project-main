<?php
if (file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

echo "GET-параметры:<br>";
print_r($_GET);
echo "<br>";
echo "URL запроса:".$_SERVER['REQUEST_URI'];
//php_info();
?>

