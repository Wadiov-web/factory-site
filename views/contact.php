<?php 
 session_start() 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Contact Us</title>
</head>
<body>
  

  <div class="contactP1">
    <h1>Contact Us!</h1>
    <p>Want to get in toutch? We'd love to hear from you.</p>
    <p>If you have any questions we are very excited to answer them!</p>
    <div class="line"></div>
    
    
    <?php 
    if(isset($_SESSION['err_form'])) {
      $errors =  $_SESSION['err_form'];
      foreach($errors as $err){
        echo '<p style="color: red;">' . $err . '</p>';
      }
      unset($_SESSION['err_form']);
    } 
    if(isset($_SESSION['success'])) {
      echo '<p style="color: green;">' . $_SESSION['success'] . '</p>';
      unset($_SESSION['success']);
    }
    ?>
    
    <div id="form">
      <form id="inputs" method="POST" action="/views/inc/contact.inc.php">
        <div>
          <div><input type="text"  placeholder="Name*" name="name"></div>
          <div><input type="email"  placeholder="Email*" name="email"></div>
        </div>
        <br>
        <div>
          <div><input type="text" placeholder="Subject" name="subject"></div>
          <div><input type="text" placeholder="Phone" name="phone"></div>
        </div>
        <br>
        <div><textarea id="tarea"  placeholder="Message" name="message"></textarea></div>
        <br><br><br>
        <button type="submit" name="submit">Send</button>
      </form>
    </div>


  </div>



  
  
  
  
  <div class="contactP2">
    <h1>Map location</h1>
    <div class="mapCont">
      <div class="information">
        <div>
          <i class="fa-solid fa-location-dot"></i>
          <h2>Address</h2>
          <p>Cite Essanouber 36, Ain Yagout, Batna, Algerie</p>
        </div>

        <div>
          <i class="fa-solid fa-envelope"></i>
          <h2>Email</h2>
          <p>Devnxstudio@gmail.com</p>
        </div>
        <div>
          <i class="fa-solid fa-phone-volume"></i>
          <h2>Call us</h2>
          <p>+213 0656648820</p>
          <p>+213 033 25 44 20</p>
        </div>
        <div>
          <h2>Contact us</h2>
          <p>Contact us for a quote.</p>
          <p>Help or to join our team.</p>
          <div class="smedia">
            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>

      </div>
      <div class="map">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12945.483672334603!2d6.4118059!3d35.7908264!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f1551fa0325bb3%3A0xab08ca36432ea09e!2sSARL%20SANIDECOR!5e0!3m2!1sen!2sdz!4v1701425630010!5m2!1sen!2sdz" 
          width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>

 




      


  
  
  
  <footer>
    <div class="f1">
      <h2>Site Map</h2>
      <a href="/">Home</a><br>
      <a href="/products">Products</a><br>
      <a href="/about">About Us</a><br>
      <a href="/contact">Contact Us</a>
    </div>
    <div class="f2">
      <h2>Contact Details</h2>
      <div class="addr">
        <i class="fa-solid fa-location-dot"></i>
        <p>Cite Essanouber 36, Ain Yagout, Batna, Algerie</p>
      </div>
      <div>
        <i class="fa-solid fa-envelope"></i>
        <p>infosnew@yahoo.com</p>
      </div>
      <div>
        <i class="fa-solid fa-phone-volume"></i>
        <p>(+213) 06 56 63 50 18</p>
      </div>
      <div>
        <i class="fa-solid fa-fax"></i>
        <p>(+213) 033 25 66 48</p>
      </div>

      <div class="icons">
        <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>
    <div class="f3">
      <h2>Working Hours</h2>
      <div class="hours">
        <div>
          <p>Weekdays</p>
          <p>Saturdays</p>
          <p>Sundays</p> 
          <p>Holidays</p> 
          
        </div>
        <div>
          <p>:08:00 - 20:00</p>
          <p>:09:00 - 16:00</p>
          <p>:Closed</p>
          <p>:10:00 - 14:00</p>
        </div>
      </div>
    </div>
    <div class="f4">
      <img src="/views/images/redLogo.png" alt="">
      <h2>About Company</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut, pariatur aliquid earum repudiandae dolor, quidem praesentium ad dolorem distinctio delectus, suscipit exercitationem magni itaque cumque quis! Maiores omnis maxime iusto.</p>
      <a href="#">^</a>
    </div>

  </footer>
  <div class="copyright">
    <p>Devnx Studio &copy, All Rights Reserved</p>
  </div>

  <div class="navwrap">
    <div class="info">
      <p>Welcome to Leaders in industrial solution</p>
      <div>
        <i class="fa-solid fa-square-phone"></i>
        <p>(+213) 0656635018</p>
      </div>
    </div>
    <div class="navbar">
      <div class="logo">
        <img src="/views/images/redLogo.png" alt="Something is wrong loading the image">
      </div>
      <div class="list">
        <li><a href="/">Home</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Us</a></li>
      </div>
      <div class="menubtn">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
    </div>
  </div>

  <script src="/views/js/nav.js"></script>
</body>
</html>