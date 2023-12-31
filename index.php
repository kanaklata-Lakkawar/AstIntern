<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Asterisc Technocrat</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/Youtube-Style/bootstrap-icons.css"><!----Linkedin css file------->
    <link rel="stylesheet" href="assets/css/Youtube-Style/templatemo-festava-live.css"><!----Linkedin css file------->
    <link rel="stylesheet" href="assets/css/Linkedin-style.css"><!----Linkedin css file------->
  
   <!--- <link rel="stylesheet" href="assets/css/slick-theme.min.css">brand------->
    <link rel="stylesheet" href="assets/css/slick.min.css"><!---brand------->
    <link rel="stylesheet" href="assets/css/Company-brand.css"><!---brand------->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="css/Popup/popup.css"><!---popup form cs------->
    <!--pop form -->

<!--CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

        <link href="assets/css/templatemo-topic-listing.css" rel="stylesheet"> 
        
<!--
TemplateMo 569 Edu Meeting


-->

  </head>
 
<body>
 
  <!--pop up starts-->
<div id="popup" class="popup-container" >
  <!-- Close button -->
  <span class="close-button" id="close-button">×</span>
  <!-- Pop-up image -->
  <img class="popup-image" src="assets/images/my-popup.jpeg" alt="Pop-up Image"><!-----From Naresh IT-->
</div>
<!--pop up end-->
<!--pop up  javascript starts-->
<!----------------------------------popup--------------------------------------------------------------------->
<!--pop up  javascript starts-->
 
<!-- JavaScript to show/hide the pop-up -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
      // Get references to the pop-up and close button elements
      const popup = document.getElementById('popup');
      const closeButton = document.getElementById('close-button');

      // Function to show the pop-up
      function showPopup() {
          popup.style.display = 'flex'; // Show the pop-up container
      }

      // Function to hide the pop-up
      function hidePopup() {
          popup.style.display = 'none'; // Hide the pop-up container
      }

      // Event listener to show the pop-up when the page loads
      showPopup();

      // Event listener to hide the pop-up when the close button is clicked
      closeButton.addEventListener('click', hidePopup);
  });
</script>
<!--pop up javascript end-->



<!------------------------------------------------------------------------------------------------------------>
  <!-- Sub Header -->
  <div class="sub-header" style="height: 40px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>Join our <em>Internship program</em>  today to Kickstart your successful IT Career</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="https://www.linkedin.com/company/asterisc-in/"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://www.youtube.com/channel/UC874req7IgQzGOZ1MfTMlVA"><i class="fa fa-youtube-play"></i></a></li>
              <li><a href="https://www.instagram.com/asterisc.in/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.facebook.com/asterisccomputer/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/Asterisc"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://github.com/Asterisc-Institute"><i class="fa fa-github"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky" style="padding-top: 5px;">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav" style="font-family:'poppins',sans-serif;">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                          Asterisc Technocrat
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                        <ul class="nav">
                          <li ><a href="index.php" class="active">Home</a></li>
                          <li><a href="meeting-details.php">opportunities</a></li>
                          <li class="scroll-to-section"><a href="#apply">Apply Now</a></li>
                          <li><a href="ourgallary-o.html">Our Gallery</a></li>
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
                      </ul>       
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <!---Script of Main Banner Area start-->
<script>
document.addEventListener('DOMContentLoaded', function() {
  var caption = document.querySelector('.main-banner .caption h2');
  var text = caption.innerText;
  caption.innerText = '';

  function typeText(index) {
      if (index < text.length) {
          if (text[index] === ' ') {
              caption.innerHTML += '&nbsp;'; // Replace space with non-breaking space
          } else {
              caption.innerHTML += text[index];
          }
          index++;
          setTimeout(function() {
              typeText(index);
          }, 500); // Adjust the typing speed by changing the second argument (in milliseconds)
      }
  }

  typeText(0);
});
</script>
<!---Script of Main Banner Area end-->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1" style="padding-top:0px; margin-top: 0px;">
      <video autoplay muted loop id="bg-video" style="padding-top:0px;">
          <source src="assets/images/Astvideo.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text" style="padding-top:0px;">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Hello Interns</h6>
              <h2>Welcome to Asterisc </h2>
              <p> Be a part of   <a rel="nofollow" href="https://templatemo.com/page/1" target="_blank"> Internship</a> on the next steps to take on your career path with <a rel="nofollow" href="https://www.pexels.com/@pressmaster" target="_blank">Asterisc Technocrat</a>.</p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


<section class="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-service-item owl-carousel">
        
          <div class="item">
            <div class="icon">
              <img src="assets/images/service-icon-01.png" alt="">
            </div>
            <div class="down-content">
              <h4>Real Time Project</h4>
              <p>The real-time project required the team to work collaboratively and efficiently to meet deadlines.</p>
            </div>
          </div>
          
          <div class="item">
            <div class="icon">
              <img src="assets/images/service-icon-02.png" alt="">
            </div>
            <div class="down-content">
              <h4>Placement Support</h4>
              <p>Offering practical, hands-on experience in a genuine work setting for real-world preparation.</p>
            </div>
          </div>
          
          <div class="item">
            <div class="icon">
              <img src="assets/images/service-icon-03.png" alt="">
            </div>
            <div class="down-content">
              <h4>Job Oriented Program</h4>
              <p>Job programs enhance skills, broaden exposure, boost career opportunities significantly.</p>
            </div>
          </div>
          
          <div class="item">
            <div class="icon">
              <img src="assets/images/service-icon-02.png" alt="">
            </div>
            <div class="down-content">
              <h4>Interview Prepration</h4>
              <p>Interview preparation during an internship improves the chances of interns securing permanent positions.</p>
            </div>
          </div>
          
          <div class="item">
            <div class="icon">
              <img src="assets/images/service-icon-03.png" alt="">
            </div>
            <div class="down-content">
              <h4>Corporate Training</h4>
              <p>Corporate training fosters leadership skill growth through authentic, experiential learning.</p>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!---===========Real time project swip===========-->

 

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Upcoming Opportunities</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
           <h4>Benifites of Internship</h4>
            <ul>
              <li><a href="#">Industry approved Certificate</a></li>
              <li><a href="#">Enhance your Linkedin profile</a></li>
              <li><a href="#">Earn appealing internship rewards</a></li>
             <li><a href="#">Acquire On-the-Job Experience.</a></li>
             <li><a href="#">Career path exploration </a></li>
            </ul>
            <div class="main-button-purple" id="myBtn">
              <p><a href="Form.html">Download PDF</a> </p>
              
            </div>
            
          </div>
        </div>
        
 

         <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
          <span class="close">&times;</span>
          <h2> Form</h2>
          <form action="Internlogin1.php" method="post" style="background-color: rgb(223, 198, 176);" >
            <a style="color: green;">
              <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>
                <label for="countryCode">Country Code:</label>
                <input type="search" id="countryCode" name="countryCode" required><br><br>
                <label for="phoneNumber">Phone Number:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" required pattern="[0-9]{10}"><br><br>
              </a>
                <button type="button" id="generateOTP">Generate OTP</button><br><br>
                <label for="otp">Enter OTP:</label>
                <input type="text" id="otp" name="otp" required><br><br>
                <button type="button" id="verifyOTP">Verify OTP</button><br><br>
                <input type="submit" value="Submit">
             
          </form>
      </div>

  </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>&#8377; 1000/-</span>
                    <?php
$price = '&#8377; 1000/-'; // This is the data you want to send to meetingdetails.php
?>
            
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/Training-img/Tra-1.jpeg" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                  <?php
                
$training = ' 1 Week Training'; // This is the data you want to send to meetingdetails.php
?>
                    <!-- Include your JavaScript script in the HTML -->
                    <?php
$currentMonth = date("n"); // Get the current month as a number (1-12)
$currentYear = date("Y");   // Get the current year

// Set the target month and day for 1-month training
$targetMonth = 11; // November
$targetDay = 4;

// Calculate the next occurrence of the target date
if ($currentMonth > $targetMonth || ($currentMonth == $targetMonth && date("j") > $targetDay)) {
    $nextOccurrenceYear = $currentYear + 1; // Go to the next year if the target date has passed
} else {
    $nextOccurrenceYear = $currentYear;
}

$nextOccurrenceMonth = date("M", strtotime("$nextOccurrenceYear-$targetMonth-$targetDay"));
$nextOccurrenceDay = date("d", strtotime("$nextOccurrenceYear-$targetMonth-$targetDay"));
 $price = $price; 
 $training=$training;
// // Construct the URL with query parameters

// $meetingDetailsURL = "meeting-details.php?month=" . $nextOccurrenceMonth . "&day=" . $nextOccurrenceDay . "&price=" . $price . "&training=" . $training;
$currentMonth = date("M");
?>



                    <!-- <h6>Nov <span>10</span></h6> -->
                   
                    <h6>
                      <?php echo $currentMonth; ?> <span><?php echo $nextOccurrenceDay; ?></span>
                    </h6>
                  </div>
                  <!-- <a href="meeting-details.html"><h4>1 Week Training</h4></a> -->
                  <a href="meeting-details.html"><h4><?php echo $training; ?></h4></a>
                 
                  <p>Training Days: 4<br>Project Devlopment Days: 3</p>
                   
                  <!--Know more-->
                <article style="background-color: none; box-shadow: none;">
                  <div class="article-wrapper">
                      
                      <div class="article-body">
                     
                          <!-- <a href="<?php echo $meetingDetailsURL; ?>" class="read-more">
                  Know more <span class="sr-only">about this is some title</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </a> -->

                <style>
  .read-more-button {
  display: inline-block;
  background-color: transparent;
  border: none;
  color: #f5a425;
  text-decoration: none;
  cursor: pointer;
}
                </style>
                <form action="meeting-details.php" method="post">
    <input type="hidden" name="month" value="<?php echo $currentMonth; ?>">
    <input type="hidden" name="day" value="<?php echo $nextOccurrenceDay; ?>">
    <input type="hidden" name="price" value="<?php echo $price; ?>">
    <input type="hidden" name="training" value="<?php echo $training; ?>">
    <input type="submit" value="Know more" class="read-more-button" style="color: #F5A425">
</form>
                      </div>
                  </div>
              </article>
              <!--Know more--> 

                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>&#8377; 3000/-</span>
                    <?php
$price = '&#8377; 3000/-'; // This is the data you want to send to meetingdetails.php
?>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/Training-img/Tra-2.jpeg" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                  <?php
$training = ' 1 Month Training'; // This is the data you want to send to meetingdetails.php
?>
                    <!-- <h6>Nov <span>24</span></h6> -->
                    <?php
$currentMonth = date("n"); // Get the current month as a number (1-12)
$currentYear = date("Y");   // Get the current year

// Set the target month and day for 1-month training
$targetMonth = 11; // November
$targetDay = 11;

// Calculate the next occurrence of the target date
if ($currentMonth > $targetMonth || ($currentMonth == $targetMonth && date("j") > $targetDay)) {
    $nextOccurrenceYear = $currentYear + 1; // Go to the next year if the target date has passed
} else {
    $nextOccurrenceYear = $currentYear;
}

$nextOccurrenceMonth = date("M", strtotime("$nextOccurrenceYear-$targetMonth-$targetDay"));
$nextOccurrenceDay = date("d", strtotime("$nextOccurrenceYear-$targetMonth-$targetDay"));
$price = $price; 
$training =$training;
// Construct the URL with query parameters
$meetingDetailsURL = "meeting-details.php?month=" . $nextOccurrenceMonth . "&day=" . $nextOccurrenceDay . "&price=" . $price . "&training=" . $training;
$currentMonth = date("M");

?>
<h6><?php echo $currentMonth; ?> <span><?php echo $nextOccurrenceDay; ?></span></h6>

                  </div>
                  <a href="meeting-details.html"><h4>1 Month Training</h4></a>
                  <p>Training Days:6<br>Project Devlopment Days:24</p>
                 <!--Know more-->
                <article style="background-color: none; box-shadow: none;">
                  <div class="article-wrapper">
                      
                      <div class="article-body">
                        
                          <!-- <a href="<?php echo $meetingDetailsURL; ?>" class="read-more">
                  Know more <span class="sr-only">about this is some title</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </a> -->
                <form action="meeting-details.php" method="post">
    <input type="hidden" name="month" value="<?php echo $currentMonth; ?>">
    <input type="hidden" name="day" value="<?php echo $nextOccurrenceDay; ?>">
    <input type="hidden" name="price" value="<?php echo $price; ?>">
    <input type="hidden" name="training" value="<?php echo $training; ?>">
    <input type="submit" value="Know more" class="read-more-button" style="color: #F5A425">
</form>
                      </div>
                  </div>
              </article>
              <!--Know more-->
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>&#8377; 9000/-</span>
                    <?php
$price = '&#8377; 9000/-'; // This is the data you want to send to meetingdetails.php
?>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/Training-img/Tra-3.jpeg" alt="Higher Education"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                  <?php
$training = ' 3 Month Training'; // This is the data you want to send to meetingdetails.php
?>
                  <?php
$currentMonth = date("n"); // Get the current month as a number (1-12)
$currentYear = date("Y");   // Get the current year

// Set the target month and day for 1-month training
$targetMonth = 11; // November
$targetDay = 18;

// Calculate the next occurrence of the target date
if ($currentMonth > $targetMonth || ($currentMonth == $targetMonth && date("j") > $targetDay)) {
    $nextOccurrenceYear = $currentYear + 1; // Go to the next year if the target date has passed
} else {
    $nextOccurrenceYear = $currentYear;
}

$nextOccurrenceMonth = date("M", strtotime("$nextOccurrenceYear-$targetMonth-$targetDay"));
$nextOccurrenceDay = date("d", strtotime("$nextOccurrenceYear-$targetMonth-$targetDay"));
$price = $price; 
$training=$training;
// Construct the URL with query parameters
$meetingDetailsURL = "meeting-details.php?month=" . $nextOccurrenceMonth . "&day=" . $nextOccurrenceDay . "&price=" . $price ."&training=" . $training;
$currentMonth = date("M");
?>

<h6><?php echo $currentMonth; ?> <span><?php echo $nextOccurrenceDay; ?></span></h6>

                    <!-- <h6>Nov <span>26</span></h6> -->
                   
                  </div>
                  <a href="meeting-details.html"><h4>3 Month Training</h4></a>
                  <p>Training Days:12<br>Project Devlopment Days:78</p>
                  <!--Know more-->
                <article style="background-color: none; box-shadow: none;">
                  <div class="article-wrapper">
                      
                      <div class="article-body">
                        
                          <!-- <a href="<?php echo $meetingDetailsURL; ?>"class="read-more">
                  Know more <span class="sr-only">about this is some title</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </a> -->
                <form action="meeting-details.php" method="post">
    <input type="hidden" name="month" value="<?php echo $currentMonth; ?>">
    <input type="hidden" name="day" value="<?php echo $nextOccurrenceDay; ?>">
    <input type="hidden" name="price" value="<?php echo $price; ?>">
    <input type="hidden" name="training" value="<?php echo $training; ?>">
    <input type="submit" value="Know more" class="read-more-button" style="color: #F5A425">
</form>
                      </div>
                  </div>
              </article>
              <!--Know more-->
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>&#8377; 35000/-</span>
                    <?php
$price = '&#8377; 35000/-'; // This is the data you want to send to meetingdetails.php
?>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/Training-img/Tra-4.jpeg" alt="Student Training"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                  <?php
$training = ' 6 Month Training'; // This is the data you want to send to meetingdetails.php
?>
                    <!-- <h6>Nov <span>30</span></h6> -->
                    
                    <?php
$currentMonth = date("n"); // Get the current month as a number (1-12)
$currentYear = date("Y");   // Get the current year

// Set the target month and day for 1-month training
$targetMonth = 11; // November
$targetDay = 25;

// Calculate the next occurrence of the target date
if ($currentMonth > $targetMonth || ($currentMonth == $targetMonth && date("j") > $targetDay)) {
    $nextOccurrenceYear = $currentYear + 1; // Go to the next year if the target date has passed
} else {
    $nextOccurrenceYear = $currentYear;
}

$nextOccurrenceMonth = date("M", strtotime("$nextOccurrenceYear-$targetMonth-$targetDay"));
$nextOccurrenceDay = date("d", strtotime("$nextOccurrenceYear-$targetMonth-$targetDay"));
$price = $price; 
$traing = $training;
// Construct the URL with query parameters
$meetingDetailsURL = "meeting-details.php?month=" . $nextOccurrenceMonth . "&day=" . $nextOccurrenceDay . "&price=" . $price . "&training=" . $training;
$currentMonth = date("M");
?>
<h6><?php echo $currentMonth; ?> <span><?php echo $nextOccurrenceDay; ?></span></h6>

                  </div>
                  <a href="meeting-details.html"><h4>6 Month Training</h4></a>
                  <p>Training Days:28<br>Project Devlopment Days:155</p>
                  <!--Know more-->
                <article style="background-color: none; box-shadow: none;">
                  <div class="article-wrapper">
                      
                      <div class="article-body">
                        
                          <!-- <a href="<?php echo $meetingDetailsURL; ?>" class="read-more">
                  Know more <span class="sr-only">about this is some title</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </a> -->
                <form action="meeting-details.php" method="post">
    <input type="hidden" name="month" value="<?php echo $currentMonth; ?>">
    <input type="hidden" name="day" value="<?php echo $nextOccurrenceDay; ?>">
    <input type="hidden" name="price" value="<?php echo $price; ?>">
    <input type="hidden" name="training" value="<?php echo $training; ?>">
    <input type="submit" value="Know more" class="read-more-button" style="color: #F5A425">
</form>
                      </div>
                  </div>
              </article>
              <!--Know more-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---===========Upcomming Opportunities===========-->

<!-- About Area-2 - Join Now for free Start -->
<section class="about-area2 fix pb-padding" >
  <div class="support-wrapper align-items-center">
      <div class="right-content2">
          <!-- img -->
          <div class="right-img">
              <img src="assets/images/free-trail-img.jpeg" alt="" style="margin-top: 10px;margin-bottom: 10px
              ;">
          </div>
      </div>
      <div class="left-content2" >
          <!-- section tittle -->
          <div class="section-tittle section-tittle2 mb-20">
              <div class="front-text " style="color: #1e1e1e;">
                  <h2 class="" style=" margin-bottom: 13px; font-family: 'Poppins', sans-serif; text-transform: uppercase;">Take the next step
                      toward your personal
                      and professional goals
                  with us.</h2>
                  <p style="color: #1e1e1e; margin-bottom: 10px; font-family: 'Poppins', sans-serif;">The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.</p>
                  <a href="#" class="btn" style="background-color: #f5a425;color: #fff;  font-family: 'Poppins', sans-serif;">Join now for Free</a>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- About Area  - Join Now for free End -->

  

  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR Online Internship</h3>
                <p>You are allowed to use this edu meeting CSS template for your school or university or business. You can feel free to modify or edit this layout.</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR Hybrid Internship</h3>
                <p>You are not allowed to redistribute the template ZIP file on any other template website. Please contact us for more information.</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <div class="accordion">
                <div class="accordion-head">
        
                    <span>Who We Are?</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Asrerisc Technocrat,is a leading IT training institute in India, is dedicated to preparing 
                          ambitious tech professionals for prosperous careers in this demanding and competitive industry.
                           Our offerings encompass flexible online training options that empower students to learn 
                           conveniently and progress at their individual pace. The education at Asrerisc Technocrat is 
                           enriched by years of comprehensive academic and industry experience, innovative teaching
                            methods, and access to high-quality educational resources.</p>
                    </div>
                </div>
              </div>
            <div class="accordion">
                <div class="accordion-head">
                    <span>Our Mission And Vision</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>
                          The training provided by Asterisc Technocrat is customized and consistently revised to align with the continuously 
                          evolving demands of the dynamic and competitive IT industry. Our goal is to empower our students with the knowledge 
                          and skills required to adeptly take on leadership positions and manage senior administrative roles in 
                          technology-driven multinational corporations worldwide. Our aspiration is to ensure that top-notch 
                          IT training services are readily accessible, convenient, and within reach for the promising talent of our nation.</p>
                    </div>
                </div>
              </div>
            <div class="accordion">
                <div class="accordion-head">
                    <span>Why To Choose Us?</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Being a dedicated IT training institute that prioritizes hands-on practice and real-world experience, 
                          we take pride in our track record of nurturing capable IT professionals who are now thriving in rewarding 
                          careers. Our instructors are reliable, seasoned, and well-versed IT professionals who provide individualized
                           attention and guidance to each student, ensuring they grasp the intricate IT concepts and technologies effectively. </p>
                    </div>
                </div>
            </div>
            <!-- <div class="accordion"> -->
              <!-- <div class="accordion-head">
                  <span>What Will Be The Duration Of Internship?</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div> -->
              <!-- <div class="accordion-body">
                  <div class="content">
                      <p><br>The duration of the internship can range from 1 to 6 months, depending on your specific requirements.</p>                      
                  </div>
              </div> -->
            <!-- </div> -->
          
            <div class="accordion last-accordion">
                <div class="accordion-head">
                    <span>What We Do?</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p><br>Crafting Software Solutions,
                          Building Websites,
                          Developing Android Applications,
                          Creating eCommerce Solutions,
                          Executing Digital Marketing Campaigns,
                          Implementing Social Media Marketing Strategies.</p>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!---===========Apply offline===========-------------------------------------------------------------------------1)-->
  <!---===========Old FAQ===========-->


  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Our Popular Domain</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="Course One">
              <div class="down-content">
                <h4>C Programming</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <p style="font-size: 17px;">Enroll Students</p> 
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="Course Two">
              <div class="down-content">
                <h4>Java Programming</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <p style="font-size: 17px;">Enroll Students</p> 
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Web Devlopment</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <p style="font-size: 17px;">Enroll Students</p> 
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Graphic Design</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <p style="font-size: 17px;">Enroll Students</p> 
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Data Science</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <p style="font-size: 17px;">Enroll Students</p> 
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="">
              <div class="down-content">
                <h4>Python</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <p style="font-size: 17px;">Enroll Students</p> 
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Ethical Hacking</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <p style="font-size: 17px;">Enroll Students</p> 
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>C++ Programming</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <p style="font-size: 17px;">Enroll Students</p> 
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Database Design</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <p style="font-size: 17px;">Enroll Students</p> 
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="">
              <div class="down-content">
                <h4>Autocad 2D,3D</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <p style="font-size: 17px;">Enroll Students</p> 
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>AWS</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <p style="font-size: 17px;">Enroll Students</p> 
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Bootstrap</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                       <p style="font-size: 17px;">Enroll Students</p>  
                    </div>
                    <div class="col-4">
                       <span>200+</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Extra code-->
  <!---===========our courses===========-->

 <!--Extra code-->



  <section class="timeline-section section-padding" id="section_3">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="text-white mb-4">How to Get into an Internship ?</h1>
            </div>

            <div class="col-lg-10 col-12 mx-auto">
                <div class="timeline-container">
                    <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                        <div class="list-progress">
                            <div class="inner"></div>
                        </div>

                        <li>
                            <h4 class="text-white mb-3">Explore Your Interests</h4>

                            <p class="text-white">Begin by identifying your passions, skills, and career goals.Understand 
                              what kind of internship aligns with your aspirations.Research industries,companies and roles that match your interests.
                              This step helps you focus on opportunities that genuinely appeal to you.</p>

                            <div class="icon-holder">
                              <!-- <i class="bi-search"></i> -->
                              <i class="fa fa-briefcase" aria-hidden="true"></i>
                            </div>
                        </li>
                        
                        <li>
                            <h4 class="text-white mb-3">Prepare a Standout Resume and Linkedin Profile</h4>

                            <p class="text-white">Create a powerful resume showcasing your skills and experiances,including coursework and volunteer work.
                              optimize your Linkedin profile to express your interest in the internship,connect with professionals,and highlight your achievements.</p>

                            <div class="icon-holder">
                              <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </li>

                        <li>
                            <h4 class="text-white mb-3">Apply for Either hybrid or Online Opportunities</h4>

                            <p class="text-white">Start applying to internship bby using job search platforms,company websites,or university centers.Ensure your applications
                            are well-tailored to each specific opportunity.Whether you're interested in a hybrid oronline internship,this is the stage where you can
                            submit your applications to your chosen roles.</p>

                            <div class="icon-holder">
                              <i class="fa fa-certificate" aria-hidden="true"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 text-center mt-5">
                <p class="text-white">
                    Want to learn more?
                    <a href="#" class="btn custom-btn custom-border-btn ms-3">Check out Youtube</a>
                </p>
            </div>
        </div>
    </div>
</section>
      <!---===========how does it works===========--------------------------------------------------------2)---->



<!----------------------------------------------->
<!--------------------youtube review code start--------------------------->
<!----------------------------------------------->
<h2 class="mb-0" style="color:#f5a425;font-family: 'Poppins', sans-serif; text-transform: uppercase;
  font-size: 24px; text-align: center;padding-top: 3%;
  font-weight: 700;">Hear From Recent Interns</h2>


<section class="articles section-padding ">
  <article>
      <div class="article-wrapper">
                 <figure>
              <iframe width="100%" height="220" src="https://www.youtube-nocookie.com/embed/XW-u-bwk9es?modestbranding=1&amp;enablejsapi=1&amp;color=white&amp;rel=0&amp;showinfo=0&amp;origin=https://www.amazon.jobs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
          </figure>
          <div class="article-body">
              <h2>MEET RHONDU, SOFTWARE DEVELOPMENT ENGINEER</h2>
              <p>
                  This former #amazonintern and Shakespeare enthusiast is charting his own path and building the future for millions of customers.
              </p>
              <a href="#" class="read-more">
      Read more <span class="sr-only">about this is some title</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
      </svg>
    </a>
          </div>
      </div>
  </article>
  <article>

      <div class="article-wrapper">
          <figure>
              <iframe width="100%" height="220" src="https://www.youtube-nocookie.com/embed/jRZzRiEapyQ?modestbranding=1&amp;enablejsapi=1&amp;color=white&amp;rel=0&amp;showinfo=0&amp;origin=https://www.amazon.jobs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
          </figure>
          <div class="article-body">
              <h2>HEAR FROM ASTERICS INTERNS</h2>
              <p>
                  Learn what it’s like to work at Asterics where intern projects make a big impact for customers around the globe. </p>
              <a href="#" class="read-more">
      Read more <span class="sr-only">about this is some title</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
      </svg>
    </a>
          </div>
      </div>
  </article>
  <article>
      <div class="article-wrapper">
          <figure>
              <iframe width="100%" height="220" src="https://www.youtube-nocookie.com/embed/HarPN825jxk?modestbranding=1&amp;enablejsapi=1&amp;color=white&amp;rel=0&amp;showinfo=0&amp;origin=https://www.amazon.jobs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
          </figure>
          <div class="article-body">
              <h2>A DAY IN THE LIFE OF A SDE INTERN AT ASTERICS</h2>
              <p>
                  Peek into a day with Kazeem, an SDE intern who worked in Amazon's Seattle office for his summer internship. </p>
              <p></p>
              <a href="#" class="read-more">
      Read more <span class="sr-only">about this is some title</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
      </svg>
    </a>
          </div>
      </div>
  </article>
</section>

<!----------------------------------------------->
<!--------------------Youtube Review code end--------------------------->
<!----------------------------------------------->
<!---===========Youtube Review==========---------------------------------------------------------------3)=-->



 
<section class="our-facts">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-12">
            <h2>A Few Facts About Our Internship</h2>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-12">
                <div class="count-area-content percentage">
                  <div class="count-digit">94</div>
                  <div class="count-title">Happy Students</div>
                </div>
              </div>
              <div class="col-12">
                <div class="count-area-content">
                  <div class="count-digit">126</div>
                  <div class="count-title">Task Submitted</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-12">
                <div class="count-area-content new-students">
                  <div class="count-digit">2345</div>
                  <div class="count-title">Certified Interns</div>
                </div>
              </div> 
              <div class="col-12">
                <div class="count-area-content">
                  <div class="count-digit">32</div>
                  <div class="count-title">Awards</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="col-lg-6 align-self-center">
        <div class="video">
          <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!---===========A Few Fact about===========----------------------------------------------------------------4)------>

        
 <!-------------------------------------------------->
  <!------------------------company Brands starts--------------------------->
<!------------------------------------------------------>


<section class="client" style="padding-top: 2%;">
  <div class="container">
    <!-- <centre><b><h3 style="color: #f5a425;">OUR STUDENT PLACED IN</h3></b></centre> -->
    <h2 class="mb-0" style="color:#f5a425;font-family: 'Poppins', sans-serif; text-transform: uppercase;
        font-size: 24px; text-align: center;padding-bottom: 4%;
        font-weight: 700;">Our Students Placed In</h2>
    <div class="slide-container">
    <div class="row">      
      <div class="col-xl-22 col-lg-12 col-md-12 col-sm-12 col-12 responsive slick-initialized slick-slider">
<div class="slick-list draggable">
<div class="slick-track" style="opacity: 1; width: 2990px; transform: translate6d(-2300px, 0px, 0px);">
<div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 230px;" tabindex="-1">
<div>
<div class="jss899" style="width: 100%; display: inline-block;">
 <img loading="lazy" src="assets/company-logo-img/CL-1-removebg-preview.png" alt="Accenture" width="100px" height="auto">
        </div>
</div>
</div>
<div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 230px;" tabindex="-1">
<div>
<div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-2-removebg-preview.png" alt="BSE" width="100px" height="auto">
        </div>
</div>
</div>
<div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 230px;" tabindex="-1"><div>
<div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-3-removebg-preview.png" alt="eClerx" width="100px" height="auto">
        </div></div>
</div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 230px;" tabindex="-1"><div>
<div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-4-removebg-preview.png" alt="GeBBS" width="100px" height="auto">
        </div>
</div>
</div>
<div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 230px;" tabindex="-1"><div><div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-5-removebg-preview.png" alt="Genpact" width="100px" height="auto">
        </div>
</div>
</div>
<div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 230px;" tabindex="-1"><div>
  <div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-6-removebg-preview.png" alt="Ugam" width="100px" height="auto">
        </div>
</div>
</div>
<div class="slick-slide" data-slick-index="6" aria-hidden="true" style="width: 230px;" tabindex="-1"><div>
<div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-7-removebg-preview.png" alt="Tech Mahindra" width="100px" height="auto">
        </div>
</div>
</div>
<div class="slick-slide" data-slick-index="7" aria-hidden="true" style="width: 230px;" tabindex="-1"><div>
<div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-8-removebg-preview.png" alt="Rebit" width="100px" height="auto">
        </div>
</div>
</div>
<div class="slick-slide" data-slick-index="8" aria-hidden="true" style="width: 230px;" tabindex="-1"><div>
  <div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-9-removebg-preview.png" alt="Infosys" width="100px" height="auto">
        </div>
</div>
</div>
<div class="slick-slide" data-slick-index="9" aria-hidden="true" style="width: 230px;" tabindex="-1"><div>
<div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-10-removebg-preview.png" alt="IDFC First Bank" width="100px" height="auto">
        </div>
</div>
</div>
<div class="slick-slide slick-current slick-active" data-slick-index="10" aria-hidden="true" style="width: 230px;"><div>
<div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-11-removebg-preview.png" alt="ICICI Bank" width="100px" height="auto">
        </div>
</div></div>
<div class="slick-slide slick-active" data-slick-index="11" aria-hidden="true" style="width: 230px;"><div>
<div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-12-removebg-preview.png" alt="Godrej" width="100px" height="auto">
        </div>
</div>
</div>
<div class="slick-slide slick-active" data-slick-index="12" aria-hidden="true"
 style="width: 230px;"><div><div class="jss899" style="width: 100%; display: inline-block;">
          <img loading="lazy" src="assets/company-logo-img/CL-13-removebg-preview.png" alt="HCL" width="100px" height="auto">
        </div></div></div></div></div></div>
    </div>
    <div>
  </div>
</section>
<!---===========Company Logo===========-----------------------------------------------------------5)---->



<!------------------------ Company logo End Here ------------------------------->
<!-------------------------------------------------->
  <!------------------------company Brands--------------------------->
<!------------------------------------------------------>
    
  <!-------------------------------------------------->
  <!------------------------Google Review starts--------------------------->
<!------------------------------------------------------>



<!--Linkedin-->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center" >
        <h2 class="mb-0" style="color:#f5a425;font-family: 'Poppins', sans-serif; text-transform: uppercase;
        font-size: 24px;
        font-weight: 700;">Learner Feedback on</h2>
        <h2 class="mb-3" style="font-family: 'Poppins', sans-serif; text-transform: uppercase;
        font-size: 24px;
        font-weight: 700;">Mentorship and PM Support</h2>
      </div>
      
      <div class="row mt-6">
        <div class="col-md-4">
          <div class="card" style="border: 0.5px solid; margin: 1%;">
            <div class="card-body"><div class="author">
              <img src="assets/Linkedin-img/L-a.jpeg" alt="..." class="avatar" style="border-radius: 1.75rem;">
              <div class="name ps-2">
                <span style="font-weight: bold; color: black;">Rutuja Shete</span>
                <div class="stats"><small><i class="far fa-clock"></i> Machine Learning Engineer at Neosoft</small>
                </div>
              </div>
              <svg size="5" role="img" class="w-5 h-5 ml-4" viewBox="0 0 24 24" stroke="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 119, 181); position: relative; left: 1rem;"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg></div>
              <p class="mt-4" style="font-size: 0.875rem; line-height: 1.25rem; color: black;">Hello Everyone, <br>"I want to express my gratitude to <span style="color: rgb(65, 125, 203); font-weight: bold;">#Asterisc Technocrat</span>, all the faculties, <span style="color: rgb(65, 125, 203); font-weight: bold;">Chandrakant Bobade</span> Sir, Shubham Nagalwade sir, 
                <span style="color: rgb(65, 125, 203); font-weight: bold;">Shubhangi Bhagwat</span> ma’am and who supported me during the Data Science & Machine Learning Specialization Program. I'd like to share that this program is excellently organized and delivered by incredibly skilled instructors. Additionally, the placement opportunities at the end are substantial, ensuring successful placement in the tech field. Thanks to the Asterisc Technocrat team, I successfully launched my career in the technology domain. <span style="color: rgb(65, 125, 203); font-weight: bold;">Neosoft</span>
                 as a Trainee Engineer.<br><span style="color: rgb(65, 125, 203); font-weight: bold;">#datascience #AsteriscTechnocrat #analytics #EnlightenYourCareer</span></p></div></div><div class="card" style="border: 0.5px solid; margin: 1%;">

                  <!--Mohit-->
                  <div class="card-body"><div class="author"><img src="assets/Linkedin-img/L-b.jpeg" alt="..." class="avatar" style="border-radius: 1.75rem;"><div class="name ps-2"><span style="font-weight: bold; color: black;">Vrunal Kalbande</span><div class="stats"><small><i class="far fa-clock"></i> Machine Learning Engineer at Anchor Cloud</small></div></div><svg size="5" role="img" class="w-5 h-5 ml-4" viewBox="0 0 24 24" stroke="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 119, 181); position: relative; left: 1rem;"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg></div><p class="mt-4" style="font-size: 0.875rem; line-height: 1.25rem; color: black;">Hello Everyone, 
                    <br>I am happy to share that I have got selected as a Machine Learning Engineer at <span style="color: rgb(65, 125, 203); font-weight: bold;">Ankercloud GmbH</span>with the help of Data Science &amp; Machine Learning Specialization Program offered by <span style="color: rgb(65, 125, 203); font-weight: bold;">Asterisc Technocrat</span>.<br>
                    Achieving this role and successfully transitioning from a background in Civil Engineering would not have been attainable without the continuous support from<span style="color: rgb(65, 125, 203); font-weight: bold;"> Chandrakant Bobade</span>I want to express my gratitude to him, as well as the entire team, for their support during my learning journey and their assistance in preparing for interviews with various companies. I'm also thankful to my LinkedIn connections for acknowledging my efforts.<br><span style="color: rgb(65, 125, 203); font-weight: bold;">#powerBI #datascience #dataanalytics #Asterisc Technocrat</span></p></div></div></div><div class="col-md-4"><div class="card" style="border: 0.5px solid; margin: 1%;">
                    <div class="card-body"><div class="author"><img src="assets/Linkedin-img/L-c.jpeg" alt="..." class="avatar" style="border-radius: 1.75rem;"><div class="name ps-2"><span style="font-weight: bold; color: black;">Mohit Dhapodkar</span><div class="stats"><small><i class="far fa-clock"></i>Big data Consultant, RBHU ETG Pvt Ltd</small></div></div><svg size="5" role="img" class="w-5 h-5 ml-4" viewBox="0 0 24 24" stroke="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 119, 181); position: relative; left: 1rem;"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg></div><p class="mt-4" style="font-size: 0.875rem; line-height: 1.25rem; color: black;">Hello Everyone,<br>I completed my bachelors in Mechanical Engineering and then working in mechanical industry for some time.<br>In no time, I was clear that I am not made for this domain and the hectic on field job. That's when I started searching for domain which would be challenging, trending and of course would pay well.<br>To achieve my goal I joined <span style="color: rgb(65, 125, 203); font-weight: bold;">Fireblaze AI School</span>, and here I am working as a Big Data Consultant at RBHU at Mumbai. Thanks to the well structured program and energitic faculties who taught me and helped me to be where I am today.<br><span style="color: rgb(65, 125, 203); font-weight: bold;">#bigdata #datascience #dataanalytics #fireblazeaischool</span></p></div></div><div class="card" style="border: 0.5px solid; margin: 1%;"><div class="card-body">
                      <div class="author"><img src="assets/Linkedin-img/L-d.jpeg" alt="..." class="avatar" style="border-radius: 1.75rem;"><div class="name ps-2"><span style="font-weight: bold; color: black;">Gaurav Jasutkar</span><div class="stats"><small><i class="far fa-clock"></i>BI developer at Orient Technologies Pvt Ltd</small></div></div><svg size="5" role="img" class="w-5 h-5 ml-4" viewBox="0 0 24 24" stroke="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 119, 181); position: relative; left: 1rem;"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg></div><p class="mt-4" style="font-size: 0.875rem; line-height: 1.25rem; color: black;">Hello Everyone,<br>The <span style="color: rgb(65, 125, 203); font-weight: bold;">Asterisc Technocrat</span> The Data Science & Machine Learning specialization program grabbed my attention when I was searching for an opportunity to gain practical experience with Python tools and create my own data science projects. The smooth progression from fundamental concepts to constructing machine learning models was a straightforward journey. My ongoing interaction with the instructors at Asterisc Technocrat was highly beneficial.<span style="color: rgb(65, 125, 203); font-weight: bold;">Chandrakant  Bobade</span>The encouragement from both the instructor and fellow community members served as a constant source of motivation for me to enhance and refine my skills.<br><br>With their invaluable support, I managed to make a successful career transition from a non-technical field to data science. Presently, I hold the role of a Business Intelligence Developer at Orient Technologies Pvt. Ltd. in Nagpur. I extend my immense gratitude to the entire team at Asterisc Technocrat.<br><span style="color: rgb(65, 125, 203); font-weight: bold;">#AsteriscTechnocrat #datascience #dataanalytics</span></p></div></div></div><div class="col-md-4"><div class="card" style="border: 0.5px solid; margin: 1%;">
                        <div class="card-body"><div class="author"><img src="assets/Linkedin-img/L-e.jpeg" alt="..." class="avatar" style="border-radius: 1.75rem;"><div class="name ps-2"><span style="font-weight: bold; color: black;">Priya Girhe</span><div class="stats"><small><i class="far fa-clock"></i> Data Analyst at Delhivery</small></div></div><svg size="5" role="img" class="w-5 h-5 ml-4" viewBox="0 0 24 24" stroke="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 119, 181); position: relative; left: 5rem;"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg></div><p class="mt-4" style="font-size: 0.875rem; line-height: 1.25rem; color: black;">Hello Everyone,
                          <br>I never imagined that I would be able to relaunch my career after a lengthy hiatus. My break spanned over 6 years, which included time spent preparing for banking exams, the challenges brought on by the COVID-19 lockdown, marriage, and a maternity break. It was during this period that I decided to join a Data Science Course.<span style="color: rgb(65, 125, 203); font-weight: bold;">Asterisc Technocrat</span> viewing it as my last resort to enter the industry.<br><br>Transitioning from a commerce background to pursue a technical course was a significant decision. However, believe me, it was the best decision I've ever made. I am thrilled to have had the opportunity to learn from exceptional trainers like<span style="color: rgb(65, 125, 203); font-weight: bold;"> Chandrakant Bobade</span> sir and others at Asterisc Technocrat . The way everything unfolded throughout the course was truly remarkable. I am extremely pleased with the program's results. I want to extend my heartfelt thanks for everything.<br><span style="color: rgb(65, 125, 203); font-weight: bold;">#AsteriscTechnocrat #datascience #dataanalytics</span></p></div></div><div class="card" style="border: 0.5px solid; margin: 1%;"><div class="card-body">
                          <div class="author"><img src="assets/Linkedin-img/L-f.jpeg" alt="..." class="avatar" style="border-radius: 1.75rem;"><div class="name ps-2"><span style="font-weight: bold; color: black;">Jash Suke</span><div class="stats"><small><i class="far fa-clock"></i> Data Analyst at Delhivery</small></div></div><svg size="5" role="img" class="w-5 h-5 ml-4" viewBox="0 0 24 24" stroke="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="color: rgb(0, 119, 181); position: relative; left: 5rem;"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg></div><p class="mt-4" style="font-size: 0.875rem; line-height: 1.25rem; color: black;">Hello Everyone,
                            <br>I would like to extend my gratitude to <span style="color: rgb(65, 125, 203); font-weight: bold;"></span> Sir, the entire team of <span style="color: rgb(65, 125, 203); font-weight: bold;">Asterisc Technocrat</span> for providing me fantastic learning experience. Fireblaze helped me make a career transition to data science with a well structured course and an amazing team which was always there to help 1-on-1 with any doubts that you may have, be it about any specific topic, or your career in general. Also a small batch ensures a good peer to peer learning with attention to everyone.<br>I would highly recommend AI Course  by  <span style="color: rgb(65, 125, 203); font-weight: bold;">Asterisc Technocrat</span> to anyone who wants to make a career switch and is looking for guidance!<br><span style="color: rgb(65, 125, 203); font-weight: bold;">#AsteriscTechnocrat #datascience #dataanalytics</span></p></div></div></div></div></div></div></section>
<!--Linkedin-->
<!---===========Linkedin Review===========---------------------------------------------------------------------------6)--->



    <!--1000 Rs strts-->
    <section class="section bgcolor1" style="background-color: #f5a425; padding: 3rem;">
      <div class="container" >
          <a href="#">
          <div class="row callout">
              <div class="col-md-4 text-center">
                  <h3 style="font-weight: bold;">&#x20B9 1000/- </h3>
                  <h4>Start your awesome course today!</h4>
              </div><!-- end col -->
    
              <div class="col-md-8">
                  <p class="lead" style="color: white;">Limited time offer! Your profile will be added to our "Students" directory as well. </p>
              </div>
          </div><!-- end row -->
          </a>
      </div><!-- end container -->  
    </section>
    
    
    <!---===========AD===========-->
    
   <!-- Google Reviews start Here -->

<div class="site-section bg-light">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-7 text-center mb-5">
              <div class="heading">
                  <span class="caption">Testimonials</span>
                  <h2>Google Reviews</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="testimonial-2">
                  <h3 class="h5">Excellent Teacher!</h3>
                  <div>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star-o text-warning"></span>
                  </div>
                  <blockquote class="mb-4">
                      <p>"
                        Completing Android development training at Asterisc Computer Institute, with 15 mini projects and 1 live project, was transformative. Their exceptional guidance solidified my career choice. Highly recommended institute!"</p>
                  </blockquote>
                  <div class="d-flex v-card align-items-center">
                      <img src="assets/images/amit.png" alt="Image" class="img-fluid mr-3">
                      <div class="author-name">
                          <span class="d-block">Amit Satpute</span>
                          <span>Student</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="testimonial-2">
                  <h3 class="h5">Best Video Tutorial!</h3>
                  <div>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star-o text-warning"></span>
                  </div>
                  <blockquote class="mb-4">
                      <p>"
                        I had an amazing experience here. ChandraKant Sir is very helpful,their style of teaching is damn impressive.They teach such a way which make difficult topics quite simple... Thank you so much chandrakant sir & pooja mam."</p>
                  </blockquote>
                  <div class="d-flex v-card align-items-center">
                      <img src="assets/images/abhijit.png" alt="Image" class="img-fluid mr-3">
                      <div class="author-name">
                          <span class="d-block">Abhijeet Nagpure</span>
                          <span>Student</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="testimonial-2">
                  <h3 class="h5">Easy to Understand!</h3>
                  <div>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star-o text-warning"></span>
                  </div>
                  <blockquote class="mb-4">
                      <p>"
                       I successfully completed Industrial Training in Java, and Android, with 20 mini projects and 1 live project. The knowledgeable faculty patiently cleared all doubts. It's an excellent place for learning programming languages."</p>
                  </blockquote>
                  <div class="d-flex v-card align-items-center">
                      <img src="assets/images/prashant.png" alt="Image" class="img-fluid mr-3">
                      <div class="author-name">
                          <span class="d-block">Prashant Rohankar </span>
                          <span>Student</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!---===========Student Review===========---------------------------------------------------------------------------7)-->


              <!---===========FAQ===========-->

<section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
      <div class="col-lg-9 align-self-center">
        <div class="row">
          <div class="col-lg-12">
            <div class="container">
             <form id="contact" action="https://script.google.com/macros/s/AKfycbzAltT11VM62_9hjsBb303287zzqCLJPc-WqdJCYBMYuma6lSepjzZ4jM_eQ9Wi9BCi/exec" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <h2>Let's get in touch</h2>
                </div>
                <div class="col-lg-4">
                  <fieldset>
                    <input name="your-name" type="text" id="name" placeholder="YOURNAME...*" required="">
                  </fieldset>
                </div>
                
                <div class="col-lg-4">
                  <fieldset>
                    <input name="your-number" type="text" id="subject" placeholder="MOBILE NO...*" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4">
                    <fieldset>
                    <input name="your-email" type="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR APPCATION MESSAGE..." required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">GET CALL FROM US</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
 
          </div>
        </div>
      </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>+91-7744822228</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>hello@asterisc.in</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Asterisc Technocrat Pvt.Ltd. 151, Friends Colony, Katol Road, Nagpur-13</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>https://asterisc.in/</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <br>

   
    <section style="background-color: #fff;">
      <section class="faq-section section-padding" id="section_4">
        <div class="container">
            <div class="row">
    
                <div class="col-lg-6 col-12">
                    <h2 class="mb-4" style="color: #f5a425; text-align: center;font-family: 'poppin',sans-serif;font-weight: bold;;">FREQUENTLY ASKED QUESTIONS</h2>
                </div>
    
                <div class="clearfix"></div>
    
                <div class="col-lg-5 col-12">
                    <img src="assets/images/faq_graphic-compressed.png" class="img-fluid" alt="FAQs">
                </div>
    
                <div class="col-lg-6 col-12 m-auto">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne" style="font-size: 18px;font-family: 'poppins',sans-serif;"></h2>
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               How to Apply For Internships?
                                </button>
                            </h2>
    
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    To Apply For Upcoming Batch Of Internship <strong>You Need to Fill The Interest Form</strong> In That specific domain, After 
                                   That You will Directly Receive The selection Certificate From Us If Selected.
                                </div>
                            </div>
                        </div>
    
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo" style="font-size: 18px; font-family: 'poppins',sans-serif;"></h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How to Fill the Enroll Form?
                            </button>
                            </h2>
    
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You Will Get The Internship Form Of All The<strong> Internship Domain</strong> In Above Mentioned Internship Column.Please Click On Apply 
                                    Now Button, Your Response Will Help Us To Understand Your Current Skills And Need For Training During Internship If Any.
                                </div>
                            </div>
                        </div>
    
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree" style="font-size: 18px;font-family: 'poppins',sans-serif;"></h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                I Have Completed All The Necessary Steps, Whats Next?
                            </button>
                            </h2>
    
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  If You HAve Filled All The Required Field In Interest Form Correctly, You will Receive A Selection Certificate From Us Before Your Internship Starts.
                                 All Important Information And Announcements Related To Internship Are Communicated Through The Discussion From Asterisc Technocrat Network On Linkedin.
                                </div>
                            </div>
                        </div>
    
    
    <!-- ..........-------------------------------------------------
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo" style="font-size: 18px;font-family: 'poppins',sans-serif;">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         What Will Be The Durstion Of Internship?
      </button>
      </h2>
    
      <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
             In Every Domain Duration Of Internship Is 4 Weeks. But You Can Exten It In 3 or 6 Months.
          </div>
      </div>
    </div>
     -->
    
    <!-- .----------------------------------------------------------- -->
    
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    </section>
    <!------------------------------------------------>
    <!------------------------- Footer --------------->
    <!------------------------------------------------>
    <!--FOOTER STARTS HERE-->
    <!-- Footer -->
    <footer class="page-footer font-small bg-black pad-30">
      <!-- Footer Links -->
      <div class="row">
          <div class="col-md-3 col-sm-12">
              <div class="mB-10">
                  <img src="assets/images/Log1-o.png" alt="AcheiversIT">
              </div>
              <div>
                  <p class="text-lightgrey justify footer-font">Asterisc Technocrat - provides a broad array of opportunities for individuals, whether they are beginners or seasoned professionals, to improve their skills and expand their career possibilities with numerous companies.</p>
              </div>
          </div>
          <div class="col-md-9">
              <div class="row">
                  <hr class="clearfix w-100 d-md-none">
                  <div class="col-md-3 col-sm-6  mx-auto pad-20  ">
                      <!-- Links -->
                      <h5 class="font-weight-bold text-uppercase mt-3 mb-4 footer-font">COMPANY</h5>
                      <ul class="list-unstyled m-20">
                          <li>
                              <a href="https://www.achieversit.com/">Home</a>
                          </li>
                          <li>
                              <a href="https://www.achieversit.com/placement-page.html">Placements</a>
                          </li>
                          <li>
                              <a href="https://www.achieversit.com/corporate-training-page.html">Corporate Training</a>
                          </li>
                          <!--<li>-->
                          <!--                          <a href="https://www.achieversit.com/blog-page.html">blog</a>-->
                          <!--                  </li>-->
                          <!--<li><a class="blog-menu" href="https://www.achieversit.com/blogs">Blog</a> </li>-->
                          <li>
                              <a href="javascript:void();" onclick="contactus('footer_block_contact_us','Contact Us')">Contact US</a>
                          </li>
                      </ul>
                  </div>
                  <hr class="clearfix w-100 d-md-none">
                  <div class="col-md-4 col-sm-6 mx-auto pad-20">
                      <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">TRENDING COURSES</h5>
                      <ul class="list-unstyled ">
                          <li>
                              <a href="https://www.achieversit.com/ui-development-training-course-institute-in-bangalore">UI Development Course</a>
                          </li>
                          <li>
                              <a href="https://www.achieversit.com/angular-training-course-institute-in-bangalore">Angular JS Course</a>
                          </li>
                          <li>
                              <a href="https://www.achieversit.com/react-training-training-course-institute-in-bangalore">React JS Course</a>
                          </li>
                          <li>
                              <a href="https://www.achieversit.com/digital-marketing-training-course-in-bangalore">Digital Marketing Course </a>
                          </li>
                          <li>
                              <a href="https://www.achieversit.com/python-training-course-institute-in-bangalore">Python Course </a>
                          </li>
                      </ul>
                  </div>
                  <!-- Grid column -->
                  <hr class="clearfix w-100 d-md-none ">
                    <div class="col-md-4 col-sm-12 pad-20 text-white">
                        <!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">CONTACT INFO</h5> -->
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">WORKING HOURS</h5>
                        <ul class="list-unstyled text-white justify"> 
                          
                          <table class="table_working_hours">
                            <tbody><tr class="opened">
                  <td class="day_label h6 normal_font">Monday &ensp;</td>
                  <td class="day_value h6 normal_font">10AM - 8PM</td>
                </tr>
                                                     <tr class="opened">
                  <td class="day_label h6 normal_font">Tuesday &ensp;</td>
                  <td class="day_value h6 normal_font">10AM - 8PM</td>
                </tr>
                                                     <tr class="opened">
                  <td class="day_label h6 normal_font">Wednesday &ensp;</td>
                  <td class="day_value h6 normal_font">10AM - 8PM</td>
                </tr>
                                                     <tr class="opened">
                  <td class="day_label h6 normal_font">Thursday &ensp;</td>
                  <td class="day_value h6 normal_font">10AM - 8PM</td>
                </tr>
                                                     <tr class="opened">
                  <td class="day_label h6 normal_font">Friday &ensp;</td>
                  <td class="day_value h6 normal_font">10AM - 8PM</td>
                </tr>
                                                     <tr class="opened">
                  <td class="day_label h6 normal_font">Saturday &ensp;</td>
                  <td class="day_value h6 normal_font">10AM - 8PM</td>
                </tr>
                                                     <tr class="opened">
                  <td class="day_label h6 normal_font">Sunday &ensp;</td>
                  <td class="day_value h6 normal_font">Closed</td>
                </tr>
                      </tbody></table>
    
                          <!-- <li class="d-flex">
                            <span class="pad-10 font-12"><i class="fa fa-map-marked-alt font-20"></i></span><span class="pad-5 font-15"> #63, 1<sup>st</sup> Floor, 16<sup>th</sup> Main, 8<sup>th</sup> Cross,BTM 1<sup>st</sup> Stage, Bangalore, India - 560029</span>
                        </li>
                        <li class="d-flex">
                            <span class="pad-10 font-12"><i class="fa fa-phone-volume font-20"></i> </span><span class="pad-10 font-15"> India : +91 8431-040-457</span>
                        </li>
                        <li class="d-flex">
                            <span class="pad-10 font-12"><i class="fa fa-envelope-open-text font-20"></i></span><span class="pad-10 font-15"> info@achieversit.com</span>
                        </li> -->
                        </ul>
                    </div>
              </div>
          </div>
      </div>
      <hr>

      <!-- Footer Links -->
      <div class="col-md-12  social-icons">
          <ul class="social-network social-circle">
            <li><a href=" https://www.linkedin.com/company/asterisc-in/" rel="nofollow" class="icoLinkedin" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UC874req7IgQzGOZ1MfTMlVA" rel="nofollow" class="iconYoutube" title="Youtube" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/asterisc.in/" rel="nofollow" class="icoFacebook" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/asterisccomputer/" rel="nofollow" class="icoFacebook" title="Facebook" target="_blank"><i class="fa fa-facebook-f "></i></a></li>
             <li><a href="https://twitter.com/Asterisc" class="iconTwitter" title="Twitter" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://github.com/Asterisc-Institute" class="iconPinterest" rel="nofollow" title="Pinterest" target="_blank"><i class="fa fa-github"></i></a></li>
              
          </ul>
      </div>
      <!-- Copyright -->
      <div class="footer-copyright pt-20" style="display:flex;justify-content:center;align-items:center;flex-wrap:wrap">
        <!-- margin-bottom:3%; -->

          <div class=" pad-20 text-lightgray  copy-rights ">Copyright@2018-23 | Designed with  &nbsp;
            <i class="fa fa-heart"> </i>
            &nbsp; by Asterisc Technocrat Pvt. Ltd.
          </div>
          <div class="justify-content-center text-center">
              <ul class="foot-xs">
                  <li><a href="https://www.achieversit.com/privacy-policy" class="text-lightgrey">Privacy Policy</a></li>
                  <li><a href="https://www.achieversit.com/terms-of-use" class="text-lightgrey">Terms of use</a></li>
                  <li><a href="https://www.achieversit.com/refund-policy" class="text-lightgrey">Refund Policy</a></li>
              </ul>
          </div>
      </div>

      <!-- Copyright -->
  </footer>
</section>
  <!---===========Footer===========-->







<!-------------------------------------------->

<!-------------------------------------------->
    <!--<div class="footer">
      <p>Copyright © 2023 Asterisc.in Developed by Asterisc Technocrat Pvt. Ltd.</p>
    </div>-->
 
  <!---===========Form===========-->
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="css/Popup/popupform.js"></script><!-----popup form js-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bootstrap/Bootstrap/bootstrap-icons.woff"></script>
    <script src="vendor/bootstrap/Bootstrap/bootstrap-icons.woff2"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom1.js"></script>
    <!-- JAVASCRIPT FILES -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/click-scroll.js"></script>
    <script src="assets/js/custom2.js"></script>
    <script type="text/javascript' src='Google Sheet/Google Sheet.js"></script>


    <script>


        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
<script>
        document.addEventListener("DOMContentLoaded", function () {
            // Check if the URL contains the success parameter
            const urlParams = new URLSearchParams(window.location.search);
            const successParam = urlParams.get('success');

            if (successParam === '1') {
                // Display the pop-up (you can use your preferred pop-up method here)
                alert('User registered successfully!');
            }
        });
    </script>

</body>
</html>