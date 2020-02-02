<?php
    $servername = "localhost";
    $username = "user";
    $password = "123";
    $database = "gap";
    
    //  Create a new connection to the MySQL database using PDO
    $conn = mysqli_connect($servername, $username, $password, $database) or die ('NÃO FOI POSSIVEL SE CONECTAR');

   //checando a conexão
    
  //if ($conn->connect_error) {
  //    die("Connection failed: " . $conn->connect_error);
  //  } 
  //  echo "Connected successfully";

    
?>