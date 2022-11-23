<?php
$DB_host = "us-cdbr-east-06.cleardb.net";
$DB_user = "b9c28cbf4adf72";
$DB_pass = "1b37ac79";
$DB_name = "heroku_0ff8aba676bf77f";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>