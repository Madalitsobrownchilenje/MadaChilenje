<?php include 'Db_connect.php';?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E & M ICT SOLUTIONS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  </head>
<style>
* {
  box-sizing: border-box;
}
body {
  margin: 0;
}

.greeting {
  font-weight: 600;
  padding:3px;
  position: absolute;
  left:50%;
  transform: translate(-50%, -50%);
}
.w3-blue{
  background-color: rgb(64, 0, 255)!important
}
/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row::after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
body{
  line-height: 1.5;
  font-family: 'Poppins', sans-serif;
}
*{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
#more {display: none;}
.container{
  max-width: 7770px;
  margin:auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
ul{
  list-style: none;
}
.footer{
  background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
  left:0;
  bottom: -10px;
  background-color: #e91e63;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul li:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li{
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li:hover{
  color: #ffffff;
  padding-left: 8px;
}
.footer-col .social-links a{
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
  color: #24262b;
  background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}

 .newspaper {
  column-count: 3;
}
}
</style>
  <body>
    <header>
      <div class="inner-width">
        <nav class="navigation-menu">
          <a href="#"></i>Home</a>
          <a href="projects.php"></i>Projects</a>
          <a href="skills.php"></i>Skills</a>
          <a href="Contact_page.php"></i> Contact_Us</a>
        </nav>
      </div>
    </header>
   <!-- Slideshow container -->
<div class="slideshow-container fade">
  <?php    
    // Retrieve images from the database 
    $query = $conn->query("SELECT * FROM images WHERE status = 1"); 
     
    if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){ 
            $imageURL = 'images/'.$row["file_name"]; 
            ?>
        <div class="Containers">
          <img src="<?php echo $imageURL; ?>" style="width:100%;height:550px;"/>
            <h6><?php echo $row["title"]; ?></h6>
            <div class="Info">
      <h1><div class="greeting"></div></h1>
    </div>
        </div>
    <?php }  
    } ?>
<!-- php slide code end here -->
</div>
<br>
</div>
</div>


<?php 
$sql = "SELECT introduction FROM homepage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { 
     echo $row["introduction"];
  }
} else {
  echo "0 results";
}
$conn->close();

?>

</div>
<body>

  <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Contact Information</h4>
          <ul>
            <li>E & M ICT SOLUTIONS </li>
            <li>P.O Box 23</li>
            <li> Mzuzu </li>
            <li>Cell: 01234748</li>
            <li><a href="fa fa-envelope"><i Class="fa fa-envelope"></i> Blessing@eandm.com</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
     </div>
     <p style="text-align:center;color:#ffffff"> E & M ICT SOLUTIONS@2023</p>
  </footer>
  <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

  <script type="text/javascript">
  var slidePosition = 1;
SlideShow(slidePosition);

// forward/Back controls
function plusSlides(n) {
  SlideShow(slidePosition += n);
}

//  images controls
function currentSlide(n) {
  SlideShow(slidePosition = n);
}

function SlideShow(n) {
  var i;
  var slides = document.getElementsByClassName("Containers");
  var circles = document.getElementsByClassName("dots");
  if (n > slides.length) {slidePosition = 1}
  if (n < 1) {slidePosition = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < circles.length; i++) {
      circles[i].className = circles[i].className.replace(" enable", "");
  }
  slides[slidePosition-1].style.display = "block";
  circles[slidePosition-1].className += " enable";
}
var slidePosition = 0;
SlideShow();

function SlideShow() {
  var i;
  var slides = document.getElementsByClassName("Containers");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slidePosition++;
  if (slidePosition > slides.length) {slidePosition = 1}
  slides[slidePosition-1].style.display = "block";
  setTimeout(SlideShow, 2000); // Change image every 2 seconds
} 
</script>
<script>
  var thehours = new Date().getHours();
  var themessage;
  var morning = ('Good morning');
  var afternoon = ('Good afternoon');
  var evening = ('Good evening');

  if (thehours >= 0 && thehours < 12) {
    themessage = morning; 

  } else if (thehours >= 12 && thehours < 17) {
    themessage = afternoon;

  } else if (thehours >= 17 && thehours < 24) {
    themessage = evening;
  }

  $('.greeting').append(themessage);
</script>
  </body>
</html>