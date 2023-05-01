<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kashyap_vishvas</title>
   <style>
a:hover {
  background-color: yellow;
}
p:hover {
  background-color: blue;
}
h3:hover {
  background-color: red;
}
h1:hover {
  background-color: pink;
}
a:visited {
  color: green;
}
p:visited {
  color: green;
}
</style>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.instagram.com/itz_kashyap_vishvas/" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/kashyap-vishvas-230aa9202/" class="fab fa-linkedin"></a>
      <a href="https://github.com/VishvasKashyap" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user.jpeg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Vishvas kashyap</h3>
      <span data-aos="fade-up">Python developer</span>
      <p data-aos="fade-up"> I am highly motivated,positive and goal-oriented, with ability to build and lead effective teams.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">I am pursuning MCA from Chandigarh University, I have completed BCA from MCRPU (Bhopal) ,I love photography</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Vishvas kashyap </h3>
         <h3 data-aos="zoom-in"> <span>email : </span><a href="mailto:kashyapvishvas@gmail.com">kashyapvishvas@gmail.com</a></h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Bettiah (bihar) </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> <a href="tel:7368823523">7368823523</a> </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> fresher </h3>
      </div>

      <a href="
https://drive.google.com/file/d/1i10L98pZi4wLosS7RmYZ4Ozt6LAE2rj3/view?usp=drivesdk" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>Python</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>C++</span> <span>75%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>60%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>70%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education </span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2023 )</span>
               <h3>MCA </h3>
               <p>I am currently Student of Chandigarh University </p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2018 - 2021 )</span>
               <h3>BCA</h3>
               <p>I started my coding journey in BCA</p>
            </div>

           

         </div>

      

      </div>

   </div>

</section>

<!-- about section ends -->


<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
      <a href="https://github.com/VishvasKashyap/Parking-Project"><img src="images/parking.jpg"></a> 
      <h3>Parking management system</h3>
      <span>( 2022 - 2022 )</span>
    </div>

      <div class="box" data-aos="zoom-in">
      <a href="https://github.com/VishvasKashyap/Parking-Project"><img src="images/online.jpg"></a>
         <h3>Online store </h3>
         <span>( 2022 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
      <a href="https://github.com/VishvasKashyap/Photoshare"><img src="images/photo.jpg"></a>
        <h3>photo gallery</h3>
         <span>( 2020 - 2022 )</span>
      </div>

    

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
        <a href="tel:7368823523"> <i class="fas fa-phone"></i> </a>
         <a href="tel:7368823523"><h3>phone</h3></a>
         <p><a href="tel:7368823523">7368823523</a></p>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="mailto:kashyapvishvas@gmail.com"><i class="fas fa-envelope"></i></a>
         <a href="mailto:kashyapvishvas@gmail.com"><h3>email</h3></a>
         <p><a href="mailto:kashyapvishvas@gmail.com">kashyapvishvas@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Bettiah, india - 845449</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>kashyap_vishvas </span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>