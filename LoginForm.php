<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1b1b32;
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

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
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
            color: #000;
            text-decoration: none;
        }

        a:hover {
            color: #4CAF50;
        }
    </style>

</head>

<body>
    <div class="container">
        <form name="loginForm" onSubmit="return validateForm()" method="post">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" id="uname" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id="psw" name="psw" required>

            <a href="Registration form.html">Don't have an account? Sign up
                here.</a>

            <button type="submit">Login</button>

        </form>
    </div>

    <script>
        function validateForm() {
            var username = document.forms["loginForm"]["uname"].value;
            var password = document.forms["loginForm"]["psw"].value;

            var usernameRegex = /^[a-zA-Z0-9]{3,20}$/
            if(!usernameRegex.test(username)) {
                alert('Username nuk ekziston!');
                return false;
            }

            var passwordRegex = /^[A-Z][a-zA-Z]+\d{1,3}$/
            if(!passwordRegex.test(password)) {
                alert('Passwordi eshte gabim ose nuk eshte valid!');
                return false;
            }

            alert('Tani ju jeni qasur ne account tuaj!');
            return true;
        }
    </script>

</body>
</html>