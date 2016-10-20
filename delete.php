<?php
      //load config file
      require_once('error_handler.php');
      require_once('config.php');


      //connect to the database
      $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

      //define variables

      $name = mysqli_real_escape_string($mysqli, $_POST['name']);


      //sql query to execute
      $query = "DELETE FROM WHERE name = $name;



      //execute the query
      if (mysqli_query($mysqli, $query)) {
        header('Location: index.php');
      } else {
          echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
      }


          //close the db connection
          $mysqli->close();
          ?>
