<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="assets/Rstyle.css"/>
</head>

<body>
    <h1>Registration Form</h1>
    <p>Please fill out this form with the required information</p>

    <fieldset>
        <form method="post" id="myForm">
            <label for="first-name">First Name: <input id="first-name" name="first-name" type="text"
                    required /></label>
            <label for="username">Username: <input id="username" name="username" type="text"
                    required /></label>
            <label for="email">Enter Your Email: <input id="email" name="email" type="email" required /></label>
            <label for="password">Create a Password: <input id="password" name="password"
                    type="password" required />
            </label>
            <label for="confirmPassword">Confirm Password <input type="password" name="confirmPassword"
                    id="confirmPassword" required>
            </label>            
    </fieldset>

    <label for="terms-and-conditions">
        <input class="inline" id="terms-and-conditions" type="checkbox" name="terms-and-conditions" /> I
        accept the <a href="https://www.partsgeek.com/terms-and-conditions.html">terms and conditions</a>
    </label>
    <input type="submit" value="Submit" />
    </form>

    <script type="text/javascript">
        document.getElementById('myForm').addEventListener('submit', function (event) {
            event.preventDefault();
            validateForm();
        });

        function validateForm() {
            var firstName = document.getElementById('first-name').value;
            var userName = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;

            var nameRegex = /^[A-Z][a-z]+$/
            if (!nameRegex.test(firstName)) {
                alert("Please enter a valid name!");
                return false;
            }

            var usernameRegex = /^[a-zA-Z0-9]{3,20}$/
            if (!usernameRegex.test(userName)) {
                alert('Please enter a valid username!');
                return false;
            }

            var regexEmail = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
            if (!regexEmail.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }

            var passwordRegex = /^[A-Z][a-zA-Z]+\d{1,3}$/
            if (!passwordRegex.test(password)) {
                alert("Please enter a valid password!");
                return false;
            }

            if (passwordRegex !== password) {
                alert('Passwords do not match!');
                return false;
            }

            alert("Form submitted successfully.");
            return true;
        }
    </script>

</body>
</html>