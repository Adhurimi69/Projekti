<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Auto Repair</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }
        

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: white;
            border-radius: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: orange;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: orange;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Contact Us</h2>
        <form name="contactForm" action="/submit_contact_us" onSubmit="return validateForm()" method="post">
            <label for="fname">Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your first name..." required>

            <label for="uname">Username</label>
            <input type="text" id="uname" name="username" placeholder="Your username..." required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email..." required>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"
                required></textarea>

            <input type="submit" value="Submit">
        </form>
        <p>You can also reach us through our number: +383 44 200 777</p>
        <p>Location: "Rr.Garibaldi" Prishtina 1000</p>
    </div>

    <script>
        function validateForm() {
            var name = document.forms["contactForm"]["fname"].value;
            var username = document.forms["contactForm"]["uname"].value;
            var email = document.forms["contactForm"]["email"].value;

            var nameRegex = /^[A-Z][a-z]+$/
            if (!nameRegex.test(name)) {
                alert("Please enter a valid name!");
                return false;
            }

            var usernameRegex = /^[a-zA-Z0-9]{3,20}$/
            if (!usernameRegex.test(username)) {
                alert('This username not exist');
                return false;
            }

            var emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email addres!');
                return false;
            }

            alert('Mesazhi juaj do te dergohet tek ekipet tona dhe do te pergjigjemi se shpejti!');
            return true;
        }
    </script>
</body>

</html>