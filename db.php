<?php
/*
 * This code was written by enotit.
 * distribution/modification/copying is free (but please mention me).
 * t.me/enotit 9.2022
 *
 */

$conf_json = file_get_contents("conf.json");
$conf = json_decode($conf_json, true);

$db = mysqli_connect($conf["hostname"], $conf["username"], $conf["password"]);
mysqli_select_db($db, "passing");

$create_table_file = file_get_contents("create_table.sql");

// CREATING TABLE if it doesn't exist
$conn_isTrue = $db->query($create_table_file);
if ($conn_isTrue === false){
    die("Failure with DB. Please write to @enotit");
}
