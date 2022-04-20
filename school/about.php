<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Education Website Using HTML, CSS & JavaSCript</title>

    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <!-- GOOGLE FONTS (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/about.css">

    <style>
        body { background-image: url("./images/bg-texture.png") }
    </style>
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php"><h4>EGATOR</h4></a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">login</a></li>

            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--========================== END OF NAVBAR ============================-->






    <section class="about__achievements">
        <div class="container about__achievements-container">
            <div class="about__achievements-left">
                <img src="./images/about achievements.svg">
            </div>

            <div class="about__achievements-right">
                <h1>Acheivements</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ullam velit, assumenda, obcaecati molestiae voluptatem placeat alias iste ad modi sunt quidem veniam recusandae possimus consequuntur quisquam soluta vero sapiente.
                </p>
                <div class="achievements__cards">
                    <article class="achievement__card">
                        <span class="achievement__icon">
                            <i class="uil uil-video"></i>
                        </span>
                        <h3>450+</h3>
                        <p>Courses</p>
                    </article>
                    
                    <article class="achievement__card">
                        <span class="achievement__icon">
                            <i class="uil uil-users-alt"></i>
                        </span>
                        <h3>79,000+</h3>
                        <p>Students</p>
                    </article>

                    <article class="achievement__card">
                        <span class="achievement__icon">
                            <i class="uil uil-trophy"></i>
                        </span>
                        <h3>26+</h3>
                        <p>Awards</p>
                    </article>

                </div>
            </div>
        </div>
    </section>
    <!--========================== END OF ACHIEVEMENTS ============================-->


   





    <section class="team">
    <h2>Meet Our Team</h2>
    <div class="container team__container">
    <?php 
                           include_once('connection.php');
                           $a=1;
                           $stmt = $dbh->prepare(
                                "SELECT * FROM enseignants");
                           $stmt->execute();
                           $users = $stmt->fetchAll();
                           foreach($users as $user) 
                        {  
                    ?>
        <article class="team__member">
        <div class="team__member-image">
            <img src="./images/tm1.jpg">
        </div>
        <div class="team__member-info">
            <h4><?php echo $user['nom']; ?></h4>
            
            <p><?php echo $user['prenom']; ?></p>
        </div>
        
        <div class="team__member-socials">
            <a href="https://instagram.com"><i class="uil uil-instagram"></i></a>
            <a href="https://twitter.com"><i class="uil uil-twitter-alt"></i></a>
            <a href="https://linkedin.com"><i class="uil uil-linkedin-alt"></i></a>
        </div>
        </article>
        <?php
                    }
                    ?>
       
        </article>
    </div>

    </section>
    <!--========================== END OF TEAM ============================-->


    


    

    <footer>
        <div class="container footer__container">
          <div class="footer__1">
            <a href="index.php" class="footer__logo"><h4>EGATOR</h4></a>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis ipsum nobis ratione.
            </p>
          </div>
  
          <div class="footer__2">
            <h4>Permalinks</h4>
            <ul class="permalinks">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="courses.php">Courses</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="login.php">login</a></li>

            </ul>
          </div>
  
          <div class="footer__3">
            <h4>Primacy</h4>
            <ul class="privacy">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms and conditions</a></li>
              <li><a href="#">Refund Policy</a></li>
            </ul>
          </div>
  
          <div class="footer__4">
            <h4>Contact Us</h4>
            <div>
              <p>+01 234 567 8910</p>
              <p>shakir260@gmail.com</p>
            </div>
  
            <ul class="footer__socials">
              <li>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="uil uil-instagram-alt"></i></a>
              </li>
              <li>
                <a href="#"><i class="uil uil-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="uil uil-linkedin-alt"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; EGATOR YouTube Tutorials</small>
        </div>
      </footer>


      <script src="./main.js"></script>
</body>
</html>