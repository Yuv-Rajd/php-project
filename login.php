<?php
    include("connection.php");
?>
<?php
if(isset($_GET['submit'])){
    $email=$_GET["email"];
    $password=$_GET["password"];
    $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $res=mysqli_query($conn,$sql);
    $rowcount= mysqli_num_rows($res) ;
    if($rowcount==1){
        echo '<script>
        window.location.href="login.php";
        alert("Successfully Sign In");
        </script>';
    }
    else{
        echo '<script>
        window.location.href="login.php";
        alert("Wrong Credentials, Try Again!!");
        </script>';

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body >
    <h1 class="text-center my-3">Sign In Here..!</h1>
    
    <div class="d-flex justify-content-center ">
        
        <form class=" w-50  rounded p-5 bg-warning" name="form" action="login.php" action="GET">
        <div class="container justify-content-center">
                <div class="row col-md-12 ">
                    <label for="floatingInput">Email address</label>    
                    <input type="email" class="form-control w-100" id="floatingInput" placeholder="name@example.com" name="email" required>
                </div>
 
                <div class="row col-md-12 my-3">
                    <label for="floatingPassword">Password</label>
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                </div>
          
                <div class="  row col-md-12   text-center">
                    <button type="submit" class="btn btn-primary" name="submit">Sign In</button><br>
                    <a href="index.php" class="text-decoration-none mt-1 text-success"><span class="text-dark">New User?</span> Register Here</a>
                </div>
            </div>
        </div>
            </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
