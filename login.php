<?php
session_start();
if($_SESSION['isLogin']==true){
    echo "belum login";
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      
    </div>
    <div class="col-sm-4">
        <strong>Login</strong>
        <div>
            <form action="login_process.php" method="POST">
                <div class="form-group">
                    <label for="email">
                    <input type="email" class="form-control" name="email" placeholder="email" />
                </div>
                <div class="form-group">
                    <label for="password">
                    <input type="password" class="form-control" name="password" placeholder="password" />
                </div>
                <button class="btn btn-primary">Masuk</button>
            </form>
        </div>
    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
</div>

</body>
</html>
