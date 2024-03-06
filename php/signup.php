<?php
    
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            //checking if email already exist in the database or not
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist\n";
            }else{
                // checking if user has uploaded a file or not
                if(isset($_FILES['image'])){
                    echo "File is uploaded\n";
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    // explode image and get the last extension like jpeg png

                }else{
                    echo "Please select an image file\n";
                }
            }
        
        }else{
            echo "Email is not valid\n";
        }
        
        
    }else{
        echo "All input fields are required\n";
    }


?>