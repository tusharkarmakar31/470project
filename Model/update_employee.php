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
        <div class="container"> <a class="navbar-brand" href="#">
                <h2>BANGLADESH MILITARY</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="show_employee.php">PASSWORD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="update_employee.php">UPDATE P</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add_employee.php">ADD P</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="del_employee.php">DELETE P</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="salary_employee.php">SALARY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">UPDATE S</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">ADD S</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">DELETE S</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <section id="contact">
        <h1 class="header">
            UPDATE MEMBER
        </h1>
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="form">
                        <form method="POST" action="update_e.php">
                            <div>
                                <input type="number" id="id" name="id">
                                <label>ID</label>
                            </div>
                            <div>
                                <input type="text" id="pass" name="pass" >
                                <label>Password</label>
                            </div>
                            <button type="submit" value="UPDATE">Submit</button>
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