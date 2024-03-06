<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Chat Application</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- New Online File -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- External CSS File -->
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body background="img/background.jpg">
        
        <div class="wrapper">
            <section class="form signup">
                <header>Realtime Chat App</header>
                <form action="#" enctype="multipart/form-data">
                    <div class="error-txt">This is an error Message!!</div>
                    
                    <!-- Class only for Name -->
                    <div class="name-details">
                        <!-- Field for first name -->
                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                    
                        <!-- Field for last name -->
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                    
                    </div>

                    <!-- Field for Email -->
                    <div class="field input">
                            <label>Email Address</label>
                            <input type="email" name="email" placeholder="Enter ur Mail" required>
                    </div>
                                        
                    <!-- Field for Password -->
                    <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter ur Password" required>
                            <!-- <i class="fas fa-eye"></i> -->
                            <i class="fas fa-toggle-off"></i>
                    </div>
                    
                    <!-- Field for Selecting Profile Photo -->
                    <div class="field image">
                            <label>Select Image</label>
                            <input type="file" name="image" required>
                    </div>

                    <!-- Field for Button -->
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                        
                    </div>

                </form>

                <div class="link">Already signed up? <a href="login.php">Login now</a> </div>
            </section>
        </div>
        
        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/signup.js"></script>
    </body>
</html>