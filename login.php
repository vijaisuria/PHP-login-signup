<?php
include('connection.php');

$alert = '';

if(isset($_POST["login"])){

    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $query1="SELECT * FROM user where email='$email' and password='$password'";
    $exe=mysqli_query($conn,$query1);
    $row = mysqli_fetch_array($exe, MYSQLI_ASSOC);  
    $count1 = mysqli_num_rows($exe); 

    if($count1>0){
        echo "<div id='snackbar' style='background-color: blue' >
                <i class='fi fi-rr-exclamation d-flex'></i> Logged in successfully
            </div>";
            echo '<script>var x = document.getElementById("snackbar");
                    x.className = "show";
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)</script>';
    }
            
    else{
            echo "<div id='snackbar' style='background-color: red' >
                <i class='fi fi-rr-exclamation d-flex'></i> Invalid credentials
            </div>";
            echo '<script>var x = document.getElementById("snackbar");
                    x.className = "show";
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)</script>';
        }            
    }





?>