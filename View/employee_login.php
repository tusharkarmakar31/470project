<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bangladesh Army</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container"> <a class="navbar-brand" href="#"><h2>BANGLADESH MILITARY</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="employee_login.php">EMPLOYEE LOG IN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">ADMIN LOG IN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT US</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    
   
  
 <section id="contact">
        <h1 class="header">
            EMPLOYEE LOG IN
        </h1>
            <div class="container">
             <div class="row">
             
             <div class="col-lg-6">
                <div class="contact-img">
                 <img src="image/1200px-Roundel_of_Bangladesh_%E2%80%93_Army_Aviation.svg.png" alt="contact">
                 </div>
             </div>
              <div class="col-lg-6">
                <div class="form">
                    <form method="POST" action="employee_signin.php">
                       <div>
                        <input type="ID" id="id" name="id" required>
                        <label>ID</label>
                        </div>
                        <div>
                        <input type="password" id="password" name="password" required>
                        <label>Password</label>
                        </div>
                        <button type="submit" value="Sign In">Submit</button>
                    </form>
                    
                </div>  
              </div>
          </div>
          </div>
    </section>
    
   
  
 
<script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>