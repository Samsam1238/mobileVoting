
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Candidates List</title>
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
                                    <a class="nav-link" href="Studentlist.php">Student List</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Candidates
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                          <a class="nav-link" href="#">Candidates Registration</a>
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
                <div class="row my-3">
                    <div class="col d-flex justify-content-center"> <h1>Candidates Registration</h1></div>
                </div>
                <form class="needs-validation" novalidate action="">
                    <div class="row my-5">
                        <div class="col align-self-center">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="FirstName" placeholder="" required  onkeydown="return /[a-z]/i.test(event.key)"  />
                                        <label for="floatingInput">First Name</label>
                                        <div class="invalid-feedback">Plss Provide a Valid First Name</div>
                                    </div>      
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="LastName" required placeholder=""  onkeydown="return /[a-z]/i.test(event.key)"  />
                                        <label for="floatingInput">Last Name</label>
                                        <div class="invalid-feedback">Plss Provide a Valid Last Name</div>
                                    </div>      
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="MiddleName" required placeholder="" onkeydown="return /[a-z]/i.test(event.key)"  />
                                        <label for="floatingInput">Middle Name</label>
                                        <div class="invalid-feedback">Plss Provide a Valid Middle Name</div>
                                    </div>      
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="Extention" placeholder="" onkeydown="return /[a-z]/i.test(event.key)"  />
                                        <label for="floatingInput">Extension</label>
                                    </div>      
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="GradeLevel" required placeholder="" />
                                        <label for="floatingInput">Grade Level</label>
                                        <div class="invalid-feedback">Plss Provide a Valid Grade Level</div>
                                    </div>      
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="Section" required placeholder=""  />
                                        <label for="floatingInput">Section</label>
                                        <div class="invalid-feedback">Plss Provide a Valid Section</div>
                                    </div>      
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-4">
                                <div class="form-floating">
                                <select class="form-select" id="Position" aria-label="Floating label select example" required>
                                    <option value="">Position</option>
                                </select>
                                <label for="floatingSelect">Position</label>
                                <div class="invalid-feedback">Chose a position</div>
                                    </div>  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="Partylist" placeholder="" required onkeydown="return /[a-z]/i.test(event.key)"  />
                                        <label for="floatingInput">Partylist</label>
                                        <div class="invalid-feedback">Plss Provide a Valid Partylist</div>
                                    </div>      
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <button class="btn btn-primary" >Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    

        <script src="../mobileVoting/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
        <script src="../mobileVoting/js/scripts.js"></script>
        <script type="text/javascript" src="js/candidatesreg.js"></script>

    
    </body>
</html>
