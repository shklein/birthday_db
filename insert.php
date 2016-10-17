<?php
      //load config file
      require_once('error_handler.php');
      require_once('config.php');


      //connect to the database
      $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

      //define variables
      $persons_name = $_POST['name'];
      $persons_birthday = $_POST['birthday'];

      //sql query to execute
      $query = 'INSERT INTO birthdays (name, birthday) VALUES ($persons_name, $persons_birthday);';
      //execute the query
      if ($mysqli->query($query)) {
        echo "Birthday added.";
      } else {
          echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
      }


          //close the db connection
          $mysqli->close();
          ?>
