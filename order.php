<!DOCTYPE html>
<html>

<head>
    <title>Order</title>
    <link rel="stylesheet" href="assets/Ostyle.css">
</head>

<body style="background-image:url(assets/img/aaudi.jpg); background-size:100% 100%">
    <div class="header">
        <h1>Order Here</h1>
    </div>
    <div class="article-container">
        <div class="article">
        <h2>Air Filter</h2>
            <img src="assets/img/airfilterr.png" alt="Air Filter">
            <p>Description: We have Air Filter for all type of cars</p> 
            <p>Price: 25$</p>
            
            <button onclick="showNameField('airFilter')">Order Now</button>

            <div id="nameField_airFilter" style="display: none">
                <label for="name">Name:</label>
                <input type="text" id="name_airFilter" placeholder="Enter your name">
                <label for="surname">Surname:</label>
                <input type="text" id="surname_airFilter" placeholder="Enter your surname">
                <label for="address">Address:</label>
                <input type="text" id="address_airFilter" placeholder="Enter your address">                
                <label for="number">Contact Number:</label>
                <input type="tel" id="number_airFilter" placeholder="Enter your contact number">
                <button onclick="addToCart('airFilter')">Order</button>
            </div>
        </div>
        <div class="article">
            <h2>Battery</h2>
            <img src="assets/img/bateria.png" alt="Battery">
            <p>Description: Produced in Austria with a very high quality</p>
            <p>Price: 70$</p>
            
            <button onclick="showNameField('battery')">Order Now</button>

            <div id="nameField_battery" style="display: none">
                <label for="name">Name:</label>
                <input type="text" id="name_battery" placeholder="Enter your name">
                <label for="surname">Surname:</label>
                <input type="text" id="surname_battery" placeholder="Enter your surname">
                <label for="address">Address:</label>
                <input type="text" id="address_battery" placeholder="Enter your address">
                <label for="number">Contact Number:</label>
                <input type="tel" id="number_battery" placeholder="Enter your contact number">
                <button onclick="addToCart('battery')">Order</button>
            </div>
        </div>
        <div class="article">
            <h2>Brakes</h2>
            <img src="assets/img/br.png" alt="Brakes">
            <p>Description: ABS brakes, which offer safety and quality on your road</p>
            <p>Price: 35$</p>  
            
            <button onclick="showNameField('brakes')">Order Now</button>

            <div id="nameField_brakes" style="display: none">
                <label for="name">Name:</label>
                <input type="text" id="name_brakes" placeholder="Enter your name">
                <label for="surname">Surname:</label>
                <input type="text" id="surname_brakes" placeholder="Enter your surname">
                <label for="address">Address:</label>
                <input type="text" id="address_brakes" placeholder="Enter your address">
                <label for="number">Contact Number:</label>
                <input type="tel" id="number_brakes" placeholder="Enter your contact number">
                <button onclick="addToCart('brakes')">Order</button>
            </div>
        </div>
        <div class="article">
            <h2>Lights</h2>
            <img src="assets/img/light.png" alt="Lights">
            <p>Description: LED, Xenon and Bixenon</p>
            <p>Price: 40$</p>
            <button onclick="showNameField('lights')">Order Now</button>

            <div id="nameField_lights" style="display: none">
                <label for="name">Name:</label>
                <input type="text" id="name_lights" placeholder="Enter your name">
                <label for="surname">Surname:</label>
                <input type="text" id="surname_lights" placeholder="Enter your surname">
                <label for="address">Address:</label>
                <input type="text" id="address_lights" placeholder="Enter your address">
                <label for="number">Contact Number:</label>
                <input type="tel" id="number_lights" placeholder="Enter your contact number">
                <button onclick="addToCart('lights')">Order</button>
            </div>
        </div>
        <div class="article">
            <h2>Steering</h2>
            <img src="assets/img/str.png" alt="Steering">
            <p>Description: Steerings for every car brands</p>
            <p>Price: 100$</p>
                <button onclick="showNameField('Steering')">Order Now</button>

            <div id="nameField_Steering" style="display: none">
                <label for="name">Name:</label>
                <input type="text" id="name_Steering" placeholder="Enter your name">
                <label for="surname">Surname:</label>
                <input type="text" id="surname_Steering" placeholder="Enter your surname">
                <label for="address">Address:</label>
                <input type="text" id="address_Steering" placeholder="Enter your address">
                <label for="number">Contact Number:</label>
                <input type="tel" id="number_Steering" placeholder="Enter your contact number">
                <button onclick="addToCart('Steering')">Order</button>
            </div>
        </div>
        <div class="article">
            <h2>Wheels</h2>
            <img src="assets/img/wheel.png" alt="Wheels">
            <p>Description: Beatiful wheels for your car to feel more comfortable on riding</p>
            <p>Price: 120$</p>
                <button onclick="showNameField('Wheels')">Order Now</button>
                
            <div id="nameField_Wheels" style="display: none">
                <label for="name">Name:</label>
                <input type="text" id="name_Wheels" placeholder="Enter your name">
                <label for="surname">Surname:</label>
                <input type="text" id="surname_Wheels" placeholder="Enter your surname">
                <label for="address">Address:</label>
                <input type="text" id="address_Wheels" placeholder="Enter your address">
                <label for="number">Contact Number:</label>
                <input type="tel" id="number_Wheels" placeholder="Enter your contact number">
                <button onclick="addToCart('Wheels')">Order</button>
            </div>
        </div>
    </div>

    <script>
        function showNameField(item) {
            var nameField = document.getElementById('nameField_' + item);
            nameField.style.display = 'block';
        }

        function addToCart(item) {
            var name = document.getElementById('name_' + item).value;
            var surname = document.getElementById('surname_' + item).value;
            var address = document.getElementById('address_' + item).value;
            var number = document.getElementById('number_' + item).value;

            if (name == '' || surname == '' || address == '' || number == '') {
                alert('Please fill in all fields before proceeding.');
                return;
            }
            alert('Item added to orders for ' + name + ' ' + surname + '!\nAddress: ' + address + '\nContact Number: ' + number + '\nThank you!');
        }
    </script>
</body>
</html>