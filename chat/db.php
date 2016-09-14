<?php
/**
 * Created by PhpStorm.
 * User: Kavi
 * Date: 9/13/16
 * Time: 10:20 PM
 */

$host = "localhost";
$user = "root";
$pass = "root";
$db_name = "chat";

$con = new mysqli($host,$user,$pass,$db_name);

function formatDate($date){
    return date('g:i a', strtotime($date));
}

?>