<!DOCTYPE html>
<html lang="en">

<head>
    <title>Auto Parts & Car Repair</title>
    <link rel="stylesheet" href="assets/Hstyle.css">
</head>

<body>
    <header>
        <div class="headeri">
            <img src="assets/img/logo.png" height="65px">
            <div class="name">
                <p>Auto Parts & Car Repair</p>
            </div>
        </div>
        <ul>
            <li><a style="text-decoration:none; color: black;" href="AboutUs.php">About Us</a></li>
            <li><a style="text-decoration:none; color: black;" href="ContactUs.php">Contact Us</a></li>
            <li><a style="text-decoration:none; color: black;" href="news.php">News</a></li>
            <li><a style="text-decoration:none; color: black;" href="order.php">Order</a></li>
            <li><a style="text-decoration:none; color: black;" href="LoginForm.php">Log In</a></li>

        </ul>
    </header>
    <main>
        <div class="bgfoto" id="bgfotoDiv" style="background-image: url(assets/img/autogarage.png); background-size: 100% 100%;">
            <input type="text" placeholder="Search" style="height: 20px;">
            <button class="butoni_bg"><img src="img/search.png" alt=""></button>
        </div>
        <script>
            let i = 0;
            let bgfotoArray = ['assets/img/autogarage.png', 'assets/img/autogarage2.png','assets/img/pp.png'];
        
            function changeImg() {
                let bgfotoDiv = document.getElementById('bgfotoDiv');

                bgfotoDiv.style.backgroundImage = `url(${bgfotoArray[i]})`;
        
                if (i < bgfotoArray.length - 1) {
                    i++;
                } else {
                    i = 0;
                }
                setTimeout(changeImg, 3000);
            }

            window.onload = changeImg;
        </script>
        <div class="artikujt">
            <h3>Articles</h3>
        </div>
        <div class="fotografit">
            <div class="rubrika">
                <img src="assets/img/wheel.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Wheels</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/Tires.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Tires</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/engine.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Engine</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/br.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Brakes</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/oil.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Oil Filter</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/airfilterr.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Air Filter</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/suspension.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Suspension</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/light.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Lights</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/bateria.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Battery</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/str.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Steering Wheels</p>
                </div>
            </div>

            <div class="artikujt">
                <h3>Services</h3>
            </div>

            <div class="rubrika">
                <img src="assets/img/oilchange.jpg" alt="" class="img">
                <div class="pershkrimi">
                    <p>Oil Service</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/modifications.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Engine Modifications</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/batterychange.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Battery Replacement</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/brakeservices.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Brake Services</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/cmpdiagnostic.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Computer Diagnostics</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/aircondition.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Air Conditioning Service</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/bodyrepair.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Painting and Body Repair</p>
                </div>
            </div>
            <div class="rubrika">
                <img src="assets/img/tirechange.png" alt="" class="img">
                <div class="pershkrimi">
                    <p>Tire Change</p>
                </div>
            </div>
        </div> 
    </main>
    <footer>
        <div class="b">
            <h2>Info</h2>
            <h2>Our Brand Cars</h2>
            <div class="bb">
                <a href=""><img src="assets/img/audilogo.png" alt="audilogo"></a>
                <a href=""><img src="assets/img/bmwlogo.png" alt="bmwlogo"></a>
                <a href=""><img src="assets/img/mercedes-logo.png" alt="mercedes-logo"></a>
                <a href=""><img src="assets/img/porsche-logo.png" alt="porsche-logo"></a>
                <a href=""><img src="assets/img/bentley.png" alt="bentley"></a>
            </div>
        </div>
        <div class="footermain">
            <div class="footerleft">
                <p>At the top of the page you can get information on the location of our garage, contact methods and everything else you need.
                    Come to us and feel happy with your car</p>
            </div>
            <div class="footercenter">
                <p>Audi</p>
                <p>BMW</p>
                <p>Mercedes-Benz</p>
                <p>Porsche</p>
                <p>Bentley</p>
            </div>
            <div class="footerright">
                <p>Terms of use</p>
                <p>Privacy Policy</p>
            </div>
        </div>
        <div class="fundi">
            <p>Copyright 2023 Auto Parts & Car Repair Company. All rights reserved.</p>
            <p>Designed by Us</p>
        </div>
    </footer>
</body>
</html>