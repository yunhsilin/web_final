<?php
session_start();
require_once 'DB.php';

$dsn = 'pgsql://postgres:postgres@127.0.0.1/good';

$db = DB::connect($dsn);
if (PEAR::isError($db)) {
    die($db->getMessage());
}

?>
