<?php
include('connection.php');

$alert = '';

if(isset($_POST["register"])){

    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    $sql1 = "select * from user where email = '$email' ";  
    $result = mysqli_query($conn, $sql1);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count1 = mysqli_num_rows($result);  

    $repeat_error ="";
    if($count1!=0)
        $repeat_error .= "Email ";

    if($count1 == 0){
        $sql = "INSERT INTO user(uname,email,password) values('$full_name','$email','$password');";
        $insert = $conn->query($sql);

        if($insert){
            echo "<div id='snackbar' style='background-color: blue' >
                <i class='fi fi-rr-exclamation d-flex'></i> User created successfully
            </div>";
            echo '<script>var x = document.getElementById("snackbar");
                    x.className = "show";
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)</script>';
        }else{
            echo "<div id='snackbar' style='background-color: blue' >
                <i class='fi fi-rr-exclamation d-flex'></i> Sorry, unable to process your request
            </div>";
            echo '<script>var x = document.getElementById("snackbar");
                    x.className = "show";
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)</script>';
        }            
    }

    else{
        echo "<div id='snackbar' style='background-color: red' >
                <i class='fi fi-rr-exclamation d-flex'></i> User already exists with ".$email."
            </div>";
        echo '<script>var x = document.getElementById("snackbar");
                    x.className = "show";
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000)</script>';
    }


}

?>