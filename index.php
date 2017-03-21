<?php
 $db = mysqli_connect('localhost','root','22t!nk3r2','juice')
 or die('Error connecting to MySQL server.');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Front-end juice</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <header class="hero">
      <div class="container">
        <p class="logo">Juice List</p>
      </div>
    </header>
    <main class="content">
      <div class="container">

        <header class="subheader">
          <h1>Quick and Easy Juices</h1>
          <p>All your favorite juices! <a class="js-add-link" href="#"> Add a juice now!</a></p>
            <form class="form js-form">
              <label class="form-label" for="form-link-input">Add a juice:</label>
              <input class="form-input" type="text" id="form-link-input" />
            </form>
        </header>

        <ol class="juice">
            <li class="juice-item">
              <a class="juice-link" href="#">Cucumber Lemonade</a>
              <ul class="juice-meta">
                <li class="juice-meta-item">
                  <em>Posted by:</em>
                  <a href="#">Sue Haas</a>
                </li>
                <li class="juice-meta-item">
                  <a href="">2 comments</a>
                </li>
                <li class="juice-meta-item">
                  <a class="js-like" href="#">Like this juice!</a>
                </li>
              </ul>
            </li>
            <li class="juice-item">
              <a class="juice-link" href="#">Apple Beet Carrot</a>
            </li>


            <?php
            $query = "SELECT * FROM juice";
            mysqli_query($db, $query) or die('Error querying database.');

            $result = mysqli_query($db, $query);

            while ($row = mysqli_fetch_array($result)) {
             echo $row['juicename'] . ' ' . $row['juicedescription'] . '<br />';
            }

            mysqli_close($db);
            ?>



<!--            <li class="juice-item">
              <a class="juice-link" href="#">Cukeberry</a>
            </li> -->
          </ol>
        </div>
    </main>




    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
</html>