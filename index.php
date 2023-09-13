<?php
include("connection.php");
?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name']; 
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];

    $check="SELECT * FROM users WHERE email='$email'";
    $mail=mysqli_query($conn,$check);
    $result=mysqli_num_rows($mail);

    if($result==0){
        $sql="INSERT INTO users(name,email,password,address,phone) VALUES ('$name','$email','$password','$address','$phone')";
        $res=mysqli_query($conn,$sql);
        if($res){
        echo '<script>
        window.location.href="login.php";
        alert("Registered Successfully !!!!");
        </script>';
        }
    }
    else{
        echo '<script>
        window.location.href="index.php";
        alert("User already exist !!!!");
        </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SignUp page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body >
    <h1 class=" text-center my-3 ">Sign Up Here..!</h1>
    <div class="d-flex  justify-content-center">

    <form class="row w-50 mt-2 g-3  p-5 bg-success  rounded" name="form" action="index.php" method="POST">
    <div class="container g-3">
        <div class="row mt-2 form-floating col-lg-12">
        <input type="text" class="form-control" id="floatingText" placeholder="Name" name="name" required>
        <label for="floatingText">Name</label>
        </div>

        <div class="row mt-2 form-floating col-lg-12  ">
        <input type="email" class="form-control" placeholder="name@example.com" name="email" required>
        <label for="floatingInput">Email address</label>
        </div>
        <div class="row mt-2 form-floating col-lg-12  ">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
        <label for="floatingPassword">Password</label>
        </div>
        <div class="row mt-2 form-floating col-lg-12 ">
        <input type="text" class="form-control" id="floatingText" placeholder="Address" name="address" required>
        <label for="floatingText">Address</label>
        </div>
        <div class="row mt-2 form-floating col-lg-12 ">
        <input type="number" class="form-control" id="floatingNumber" placeholder="Number" name="phone" required>
        <label for="floatingNumber">Phone Number</label>
        </div>
        <div class="col-12 mt-3 text-center">
        <button type="submit" class="btn btn-primary" name="submit">Sign Up</button><br>
        <a href="login.php" class="text-decoration-none text-warning"><span class="text-light">Already Registered ?</span> Click Here</a>
        </div>
</form>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>