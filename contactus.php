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
        <form name="contactForm" action="../actions/contact_action.php" onSubmit="return validateForm()" method="post">
            <label for="fname">Name</label>
            <input type="text" id="fname" name="name" placeholder="Your first name..." required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email..." required>

            <label for="subject">Message</label>
            <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"
                required></textarea>

            <input type="submit" value="Send">
        </form>
        <p>You can also reach us through our number: +383 44 200 777</p>
        <p>Location: "Rr.Garibaldi" Prishtina 1000</p>
    </div>

</body>

</html>