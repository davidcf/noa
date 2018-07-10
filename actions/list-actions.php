<?php

// Includs database connection
include "db_connect.php";

// Makes query with rowid
$query = "SELECT rowid, * FROM actions";

// Run the query and set query result in $result
// Here $db comes from "db_connection.php" 
$result = $db->query($query);

?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://getbootstrap.com/docs/3.3/examples/navbar/#">N.O.A.</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="https://getbootstrap.com/docs/3.3/examples/navbar/">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="https://getbootstrap.com/docs/3.3/examples/navbar-static-top/">Static top</a></li>
              <li><a href="https://getbootstrap.com/docs/3.3/examples/navbar-fixed-top/">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2>Accions</h2>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
      </div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Mandate 1</th>
      <th scope="col">Mandate 2</th>
      <th scope="col">Mandate 3</th>
      <th scope="col">Action</th>
      <th scope="col">Answer</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = $result->fetchArray()) {?>
    <tr>
      <td><?php echo $row['mandate1'];?></td>
      <td><?php echo $row['mandate2'];?></td>
      <td><?php echo $row['mandate3'];?></td>
      <td><?php echo $row['action'];?></td>
      <td><?php echo $row['answer'];?></td>
	  <td><a class="btn btn-success" href="update-action.php?id=<?php echo $row['rowid'];?>" role="button">Edit</a> <a class="btn btn-danger" href="delete-action.php?id=<?php echo $row['rowid'];?>" onclick="return confirm('Are you sure delete action?');">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

      <footer class="mastfoot mt-auto">
      <BR>
        <div class="inner">
          <p>NOA copyright 2018.</p>
        </div>
      </footer>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  
</body></html>