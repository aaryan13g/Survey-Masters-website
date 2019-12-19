<?php
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: home.php");
}

require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT s_no, username, password FROM users WHERE (username = ?)";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $s_no, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["s_no"] = $s_no;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: home.php");
                            
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
        
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <style type="text/css">
        body{ 
            font: 14px sans-serif;
            margin-left: auto;
            background-size: cover;
        }
        .wrapper{
            width: 30%;
            align-items: center;
            margin: auto;
            margin-top: 5%;
            padding: 70px 20px;
            color:#ffffff;
        }
        .textbox{
            width: 300px;
            height: 10px;
            border: none;
            border-radius: 40px;
            margin:10px;
            padding: 20px;
            opacity: 0.7;
        }
        .buttonx{
            width: 340px;
            border: none;
            height: 50px;
            border-radius: 40px;
            margin:10px;
            color: #ffffff;
            font-size: 15px;
            background-color: #2DD881;
            cursor: pointer;
        }

    </style>
</head>
<body background="images\logbg.jpg">
    <div class="wrapper" align="center">
        <h1>Login</h1>
            <p>Please fill in your credentials to login.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <input type="text" name="username" placeholder="Username" class="textbox" value="<?php echo $username; ?>">
                    <p class="help-block"><?php echo $username_err; ?></p>
                </div>    
                <div class="<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <input type="password" name="password" placeholder="Password" class="textbox">
                    <p class="help-block"><?php echo $password_err; ?></p>
                </div>
                <div>
                    <input type="submit" class="buttonx" value="Login">
                </div>
                <p>Don't have an account? <a href="register.php" style="text-decoration: none; color:#2DD881;">Sign up now</a>.</p>
            </form>
    </div>     
</body>
</html>