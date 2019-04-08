<!doctype html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Login to Equinox</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
    <link href="patientCSS.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div class="container, whiteContainer">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <a href="login.php"><img src="images/logo.png" width="150"></a>
                </div>
                <div class="col, justifyCenter">
                    <h1>Equinox Medicine Health Portal</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <center><h2 class="appTitle">Login</h2></center>
                </div>
            </div>
            <div class="row">
                <div class="col, skinnyForm" style="min-width: 300px;">
                        <form>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button><br><br>
                                <p>No account? <a href="signUp.php">Sign up here.</a></p>
                        </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>