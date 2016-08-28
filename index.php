<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
  <html>
    <head>
      <title>Family Birthdays</title>
      <link rel="stylesheet" href="style.css" />
    </head>
    <body>
      <h1>Birthdays!</h1>
      <?php
            //load config file
            require_once('error_handler.php');
            require_once('config.php');
            //connect to the database
            $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
            //sql query to execute
            $query = 'SELECT name, birthday FROM birthdays';
            //execute the query
            $result = $mysqli->query($query);

            //create table
            echo "<table class='center'>
                    <tr>
                      <th>Name</th>
                      <th>Birthday</th>
                    </tr>";
            //loop through the results
            while ($row =$result->fetch_array(MYSQLI_ASSOC))
              {
                //extract user id and Name
                $name = $row['name'];
                $birthday = $row['birthday'];
                //do something with data (output)
                echo  "<tr>";
                echo "<td>" . $name . "</td>";
                echo "<td>" . $birthday . "</td>";
                echo "</tr>";
              }
                //close input stream
                $result->close();
                //close the db connection
                $mysqli->close();
                ?>


    </body>
  </html>
