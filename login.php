<?php 

session_start();

if (isset($_SESSION['session_token']) || isset($_SESSION['user_email'])) {
    header("Location: ../view/dashboard/index.php");
    exit();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }

        .container {
            width: 300px;
            padding: 16px;
            background-color: white;
            margin: 0 auto;
            margin-top: 100px;
            border: 1px solid black;
            border-radius: 4px;
        }

        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: orange;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: orange;
        }
    </style>
</head>

<body>
    <div class="container">
        <form name="loginForm" method="post" action="../actions/login_action.php">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" id="email" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id="password" name="password" required>
<!-- 
            <a href="RegistrationForm.php">Don't have an account? Sign up
                here.</a> -->

            <button type="submit">Login</button>

        </form>
    </div>

</body>
</html>