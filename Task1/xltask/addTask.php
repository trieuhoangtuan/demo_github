<?php
    $taskname =$_GET['t'];
    $st=0;
    $create = time();
    $cmd="insert into tasks (task, status, created_at) values('$taskname', '$st', '$create')";
    $db=new PDO('mysql:host=localhost;dbname=angularcode_task','root','');
    $result=$db->exec($cmd);
    echo $json_response=  json_encode($result);
?>
