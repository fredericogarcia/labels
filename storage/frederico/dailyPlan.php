<?php 
include 'import.php'; 

//searchPlan();

$query = $mysqli->query("SELECT * FROM `planning`");

?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Label Search</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css"> 

  </head>
  <body>

  <div class="container">
   <h1 class="page-header">Westerleigh Planner</h1>
 <pre> <table class="table table-hover">

    <thead>
    <tr>

      <?php echo "<p align='left'> <img src='logo.jpg' width='100px'> </p><span>Production date: " . $date . " <br> Day of the year: " . $julian . ""; ?>
        <th>Job Number</th>
<th></th>
        <th>SAP Code</th>
        <th>Cases</th>
        <th>Use by</th>
      </tr>
    </thead>
    <tbody>  
    <?php if ($query->num_rows > 0) { while ($row = $query->fetch_assoc()) { ?>
    	<tr>
    		<th> <?php echo $row['jobnr']; ?> </th>
            <th></th>
    		<th> <?php echo $row['sapcode']; ?> </th>
    		<th> <?php echo $row['cases']; ?> </th>
    		<th> <?php echo $row['useby']; ?> </th>
    	</tr>

	<?php } } ?>
    </tbody>
  </table>
</div>

</body>
</html>
