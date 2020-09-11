<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bangladesh Army</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container"> <a class="navbar-brand" href="#"><h2>BANGLADESH MILITARY</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="show_employee.php">EMPLOYEE ZONE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="show_army.php">ALL MILITARY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add_new.php">ADD NEW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="update_army.php">UPDATE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="del_army.php">DELETE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">LOG OUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
  
  <section id="login">
  <div class="container">
  <h1 class="header">Details of Army</h1>
  <div class="row" style="padding-bottom:20px;">
  <div class="col-lg-2"><h4>ID</h4></div>
  <div class="col-lg-3"><h4>First Name</h4></div>
  <div class="col-lg-3"><h4>Last Name</h4></div>
  <div class="col-lg-2"><h4>Joining Date</h4></div>
  <div class="col-lg-2"><h4>Position</h4></div>
  </div>
  
  
  <?php
  require_once("DBconnect.php");
  $sql="SELECT * FROM army";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) !=0){
	  while($row = mysqli_fetch_array($result)){
		  
	?>
	<div class="row" style="padding:10px">
  <div class="col-lg-2"><?php echo $row[0];?></div>
  <div class="col-lg-3"><?php echo $row[1];?></div>
  <div class="col-lg-3"><?php echo $row[2];?></div>
  <div class="col-lg-2"><?php echo $row[3];?></div>
  <div class="col-lg-2"><?php echo $row[4];?></div>
  </div>
	<?php
	  }
  }
  
  
  ?>
  
  
  
  
  
  </div>
  </section>
  
  
  
  
  
  
  
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  
</body>

</html>