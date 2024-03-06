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
            <section class="form login">
                <header>Realtime Chat App</header>
                <form action="#">
                    <div class="error-txt">This is an error Message!!</div>
                    

                    <!-- Field for Email -->
                    <div class="field input">
                            <label>Email Address</label>
                            <input type="email" placeholder="Enter ur Mail">
                    </div>
                                        
                    <!-- Field for Password -->
                    <div class="field input">
                            <label>Password</label>
                            <input type="password" placeholder="Enter ur Password">
                            <!-- <i class="fas fa-eye"></i> -->
                            <i class="fas fa-toggle-off"></i>
                    </div>
                    
                    <!-- Field for Button -->
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>

                </form>

                <div class="link">New User? <a href="index.php">Signup now</a> </div>
            </section>
        </div>
        <script src="javascript/pass-show-hide.js"></script>
    </body>
</html>