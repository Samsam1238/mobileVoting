
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../mobileVoting/css/bootstrap.min.css">
    <link rel="stylesheet" href="../mobileVoting/css/homecss.css">
    <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/jquery-min.js"></script>
</head>
<body>
    <h1 class="title">WEB-BASED VOTING SYSTEM</h1>
    <div class="box">
        <div class="container">
        <form action="index.php" method="post" class="needs-validation" novalidate>
            <div class="row gy-4 align-items-center">
                <div class="col logincon">
                <h2 class="log-in">Log-in</h2>
                </div>
                <div class="col-12">
                    <label class="form-label" for="">LRN</label>
                <input class="form-control " type="text"  placeholder="Enter your LRN" id="Lrn" required>
                <div class="invalid-feedback">Plss Provide a Valid LRN</div>
                </div>
                <div class="col-12">
                    <label class="form-label" for="">Brith Date</label>
                <input class="form-control" type="date" placeholder="Enter your Birth Day" id="bday" required>
                <div class="invalid-feedback">Plss Provide a Valid birthdate</div>
                </div>
                <div class="col-6 mx-auto">
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
        
</body>

</html>