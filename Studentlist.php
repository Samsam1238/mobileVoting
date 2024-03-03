<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/admin.css" rel="stylesheet" />
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/jquery-min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Voting System Admin</a>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Studnet
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Student Registration</a>
                                    <a class="nav-link" href="#">Student List</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Candidates
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                          <a class="nav-link" href="candidatesreg.php">Candidates Registration</a>
                                    <a class="nav-link" href="candidateslist.php">Candidates List</a>
            
                                    </div>
                                </nav>
                            </div>
                    </div>
                </nav>
            </div> 
        </div>
        <div class="sidecontent">
            <div class="container">
                <div class="col-4 mx-auto gy-4">
                <h1> Student List</h1>
                </div>
                <div class="col-11">
                    <table class="table table-bordered" id="cantable">
                        <thead>
                            <tr>
                                <th scope="col">LRN</th>
                                <th scope="col">FistName</th>
                                <th scope="col">LastName</th>
                                <th scope="col">MiddleName</th>
                                <th scope="col">BirthDate</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Section</th>
                                <th scope="col">VoteStatus</th>
                                <th scope="col">Email</th>  
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    

        <script src="../mobileVoting/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
        <script src="../mobileVoting/js/script.js"></script>
        <script type="text/javascript" src="js/studentlist.js"></script>
        

      
    </body>
</html>
