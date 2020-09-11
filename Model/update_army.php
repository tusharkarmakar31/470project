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



    <section id="contact">
        <h1 class="header">
            UPDATE MEMBER
        </h1>
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="form">
                        <form method="POST" action="update.php">
                            <div>
                                <input type="number" id="id" name="id">
                                <label>ID</label>
                            </div>
                            <div>
                                <input type="text" id="fname" name="fname" >
                                <label>First Name</label>
                            </div>
                            <div>
                                <input type="text" id="lname" name="lname" >
                                <label>Last Name</label>
                            </div>
                            <div>
                                <input type="date" id="date" name="date" >
                                <label>Joining Date</label>
                            </div>
                            <div>
                                <input type="text" id="pos" name="pos" >
                                <label>Position</label>
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