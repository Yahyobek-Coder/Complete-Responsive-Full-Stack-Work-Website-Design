<?php

$db_name = 'mysql:host=localhost;dbname=contact_working';
$username = 'root';
$password = 'secret';

$conn = new PDO($db_name, $username, $password);

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $name = filter_var($name);
    $email = $_POST['email'];
    $email = filter_var($email);
    $number = $_POST['number'];
    $number = filter_var($number);
    $message = $_POST['message'];
    $message = filter_var($message);

    $select_contact = $conn->prepare("SELECT * FROM `contact_form_working` WHERE name = ? AND email = ? AND number = ? AND message = ?");
    $select_contact->execute([$name, $email, $number, $message]);

    if ($select_contact->rowCount() > 0) {
        $msg[] = 'message sent already!';
    } else {
        $insert_contact = $conn->prepare("INSERT INTO `contact_form_working`(name, email, number, message) VALUES(?,?,?,?)");
        $insert_contact->execute([$name, $email, $number, $message]);
        $msg[] = 'message sent successfully!';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Working Website Design Tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php
    if (isset($msg)) {
        foreach ($msg as $msg) {
            echo '
            <div class="msg" style="
               position: sticky;
               top: 3px;
               z-index: 1100;
               background: var(--blue);
               padding: 2rem;
               display: flex;
               align-items: center;
               justify-content: space-between;
               gap: 1.5rem;
               max-width: 1200px;
               margin: 0 auto;">
               <span style="color: #fff;
               font-size: 2rem;">' . $msg . '</span>

               <i class="fas fa-times" style="font-size: 2.5rem;
               color: #fff;
               cursor: pointer;" onclick="this.parentElement.remove();"></i>
            </div>
            ';
        }
    }
    ?>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo">logo</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#about">about</a>
            <a href="#plan">plan</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image">
            <img src="images/home-img.svg" alt="">
        </div>

        <div class="content">
            <h3>creative landing pages</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ducimus neque facere soluta sunt fuga.</p>
            <a href="#" class="btn">read more</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/s-1.svg" alt="">
                <h3>layout design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, quae.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="images/s-2.svg" alt="">
                <h3>responsive design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, quae.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="images/s-3.svg" alt="">
                <h3>digital marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, quae.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="images/s-4.svg" alt="">
                <h3>seo marketing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, quae.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="images/s-5.svg" alt="">
                <h3>database</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, quae.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="box">
                <img src="images/s-6.svg" alt="">
                <h3>optimized coding</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, quae.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">
            <div class="image">
                <img src="images/about-img.svg" alt="">
            </div>
            <div class="content">
                <h3>we make amazing and user friendly websites</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident animi iure est culpa quia adipisci itaque corporis in impedit? Expedita alias nulla aut, doloremque repellat qui fugit dolorem reiciendis id!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque debitis maiores accusantium impedit perferendis quisquam adipisci porro exercitationem blanditiis. Repellat?</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </section>

    <!-- about section ends -->

    <!-- plan section starts  -->

    <section class="plan" id="plan">

        <h1 class="heading"> our <span>plan</span> </h1>

        <div class="box-container">

            <div class="box">
                <h3 class="title">basic plan</h3>
                <img src="images/price-img-1.svg" alt="">
                <h3 class="price"> <span>$</span>30<span>/mo</span> </h3>
                <ul>
                    <li>seo marketing</li>
                    <li>web hosting</li>
                    <li>database</li>
                    <li>unlimited storage</li>
                    <li>maintainance</li>
                </ul>
                <a href="#" class="btn">choose plan</a>
            </div>

            <div class="box">
                <h3 class="title">standard plan</h3>
                <img src="images/price-img-2.svg" alt="">
                <h3 class="price"> <span>$</span>60<span>/mo</span> </h3>
                <ul>
                    <li>seo marketing</li>
                    <li>web hosting</li>
                    <li>database</li>
                    <li>unlimited storage</li>
                    <li>maintainance</li>
                </ul>
                <a href="#" class="btn">choose plan</a>
            </div>

            <div class="box">
                <h3 class="title">premium plan</h3>
                <img src="images/price-img-3.svg" alt="">
                <h3 class="price"> <span>$</span>90<span>/mo</span> </h3>
                <ul>
                    <li>seo marketing</li>
                    <li>web hosting</li>
                    <li>database</li>
                    <li>unlimited storage</li>
                    <li>maintainance</li>
                </ul>
                <a href="#" class="btn">choose plan</a>
            </div>

        </div>

    </section>

    <!-- plan section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> client's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <h3>john deo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, sit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <h3>john deo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, sit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <h3>john deo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, sit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/pic-4.png" alt="">
                <h3>john deo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, sit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/pic-5.png" alt="">
                <h3>john deo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, sit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/pic-6.png" alt="">
                <h3>john deo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, sit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">
            <div class="image">
                <img src="images/contact-img.svg">
            </div>
            <form action="" method="post">
                <h3>get in touch</h3>
                <input type="text" name="name" placeholder="Full name" class="box">
                <input type="email" name="email" placeholder="Your email" class="box">
                <input type="number" name="number" required class="box" maxlength="20" placeholder="Enter your number" onkeypress="if(this.value.length == 20) return false">
                <textarea name="message" placeholder="Your message" class="box" id="" cols="30" rows="10"></textarea>
                <input type="submit" name="send" value="Send message" class="btn">
            </form>
        </div>


    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="credit"> created by <span>yahyobek coder</span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->



    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script src="/vanta.birds.min.js"></script>
    <script>
        VANTA.CLOUDS2({
            el: "#your-element-selector",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            texturePath: "./gallery/noise.png"
        })
    </script>

</body>

</html>