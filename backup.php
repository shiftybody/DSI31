<?php

    $databases = ["controlvehicular31"];
    $user = "root";
    $password = "";
    $host = "localhost";

    if(!file_exists("C:/xampp/htdocs/DSI31")){
        mkdir("C:/xampp/htdocs/DSI31");
    }

    foreach($databases as $database) {
        
        $filename = $database;
        $folder = "C:/xampp/htdocs/DSI31/".$filename.".sql";

        exec("C:/xampp/mysql/bin/mysqldump --user=$user --password=$password --host=$host $database --result-file=$folder", $output);

        print_r($output);
    }
