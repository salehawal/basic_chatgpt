<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
include('chatgpt.php');

if(isset($_POST['query']))
{
    $ai = new ChatGPT();
    //$result = $ai->generateImage('a cat on a post lamp');
    $result = $ai->createTextRequest($_POST['query']);
    // response
    if(is_array($result)) print_r($result); else echo $result;
}
?>