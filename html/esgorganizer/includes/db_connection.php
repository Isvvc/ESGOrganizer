<?php
  include ($path_long.'/../../esorganizer.conf.php');
  
  define("DB_SERVER", "localhost");
  define("DB_USER", $dbuser);
  define("DB_PASS", $dbpass);
  define("DB_NAME", "esmanager");

  // 1. Create a database connection
  $db = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>