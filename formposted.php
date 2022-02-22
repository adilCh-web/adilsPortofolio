
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adil'S Portofolio</title>
    <script src = "javascript.js"></script>
    <link rel = "stylesheet" href ="styles.css">
    <link rel="stylesheet" href=
    "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</link>
</head>
<body>
    <div id = "container">
        <h1>Adil Chorfi</h1>
        <button id = "menu" onclick = "loadMenu()"><i class="fas fa-bars fa-2x"></i></button>
        <header>
            <h4>Data Scientist / Software Developer</h4>
            <nav>
                <ul>
                    <li><a  href="index.html">HOME</a></li>
                    <li><a href="resume.html">RESUME</a></li>
                    <li><a href="#">PROJECTS</a></li>
                    <li><a href="#"><span>CONTACT</span></a></li>
                </ul>
            </nav>
        </header>

        <div class ="containerfadeAnimation">
            <?php
            $name = $_GET['name'];
            $phoneNr = $_GET['phone'];
            $email = $_GET['email'];
            $message = $_GET['theMessage'];
            echo "<h3>Thanks For Submitting the Form $name</h3>";
            echo "your Email is:      $email.<br>";
            echo "your Telephone is:  $phoneNr";

            ?>
            


        </div>
    </div>

 
    <footer>
        <div class = "footerDiv">
            <i class="fas fa-phone-alt fa-2x" style = "color:#15e7e7c2"></i>
            <p><span class = "title">Call</span>
            <br><br><a href="tel:+447784849820">T: +4477-8484-9820</a><br>F: 123-456-7890</p>
        </div>
        <div class = "footerDiv">
            <i class="fas fa-at fa-2x" style = "color:#15e7e7c2"></i>
            <p><span class = "title">Contact</span><br><br><a href="mailto:adilchorfi10@gmail.com">adilchorfi10@gmail.com</a></p>
        </div>
        <div class = "footerDiv">
            <i class="fas fa-plus-circle fa-2x" style = "color:#15e7e7c2""></i>
            <div>
                <p class = "title">Follow me</p>
                <i class="fab fa-facebook" style = "color:#15e7e7c2"></i>
                <i class="fab fa-twitter" style = "color:#15e7e7c2"></i>
    
            </div>
        </div>
        <div class = "footerDiv">
            <i class="fas fa-copyright fa-2x" style = "color:#15e7e7c2";></i>
            <p>© 2022 by Adil Chorfi.<br><br>
            Proudly created with Love</p>
        </div>
    </footer>
    
</body>
</html>

