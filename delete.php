<?php
      //load config file
      require_once('error_handler.php');
      require_once('config.php');


      //connect to the database
      $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

      //define variables

      $id = mysqli_real_escape_string($mysqli, $_GET['id']);


      //sql query to execute
      $query = "DELETE FROM birthdays WHERE id = $id;";



      //execute the query
      if (mysqli_query($mysqli, $query)) {
        header('Location: index.php');
      } else {
          echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
      }


          //close the db connection
          $mysqli->close();
          ?>
