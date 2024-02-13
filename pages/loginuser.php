<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="../image/png" sizes="16x16" href="../assets/images/favicon.png">
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>   
    <script src="../assets/js/script.js"></script>
    <title>Login</title>
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" id="body">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img image">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <h2 class="mt-3 text-center">Login</h2>
                        <p class="text-center">Enter your pseudo and password to access user page.</p>
                        <form class="mt-4" action="traitementuser.php"  id="myForm" method="get" >
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="text-dark" for="uname">Pseudo </label>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                            <button type="button">
                                                <!-- <span class="glyphicon glyphicon-eye-close" name="eye"></span> -->
                                            </button>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Pseudo" aria-describedby="basic-addon1" name="pseudo">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="text-dark" for="pwd">Password</label>
                                    <div class="input-group form-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                            <button type="button" onclick="change()">
                                                <!-- <span class="glyphicon glyphicon-eye-close" name="eye"></span> -->
                                            </button>
                                        </span>
                                        <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="pwd">
                                    </div>
                                </div>
                                <div class="col-lg-12 lien">
                                    <label class="text-dark" for="pwd"><a href="index.php">Login for admin</a></label>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" id="submit" class="btn btn-block btn-dark">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>ETU2444_Anthony_ETU2424_Mahaliana_ETU_2608_Kenny</p>
    </footer>
</body>
</html>