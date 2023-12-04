<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div> 
<div class="row">
  <div class="column">
  <div class="procard">
  <img src="img2.jpg" class = "prop">  
  <!-- <img src="img2.jpg" alt="John" style="width:100%"> -->
  <h1>John Doe</h1>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
  <span class="fa fa-star"></span>
  <p class="title">Member Since <b>2020</b></p>
  <p>20 Customer Reviews</p>
  <p>Completed 25 Projects</p>
  <a href="#"><i class="fa-regular fa-message"></i></a>
  <br>
</div>
  </div>
  <div class="column">
    <div class = "descriptionbox">
        <p>At Us, we pride ourselves as your premier supplier for a wide range of products and services. With a wealth of 
            experience in the industry, we've established a solid
        reputation for reliability and customer-centric solutions. Our unwavering commitment to 
        excellence is the foundation of our business. We are dedicated to delivering high-quality products and services tailored to meet your unique needs and preferences.

        What sets Us apart? Our customer-focused approach, competitive pricing, and a 
        dedication to maintaining the highest standards of quality assurance. Every project we 
        undertake is treated with the utmost care, ensuring that you receive nothing but the finest.

        Our range of offerings is diverse, including [list some of your main products or services here]. We take pride in offering a variety of 
        features and specialties that cater to your distinct requirements. Whether you need us to adhere to specific certifications or quality 
        standards, rest assured that we've got you covered.

        Your success is our success. We look forward to partnering with you and providing the solutions that will take your projects to new heights. 
        Please feel free to reach out to Us today to discuss your requirements, request a quote, or learn more about how we can enhance your business. 
        With Us as your trusted supplier, you're not just making a choice; you're choosing a dedicated partner committed to your success</p>
    </div>
  </div>
</div>
</div>

<!-- Slideshow container -->
<div class="galerybox"> 
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="img1.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="img2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="img3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>


<div class="row">
<div class="column1">
  <div class="card">
  <img src="img1.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Package 1</h1>
  <p class="price">$100</p>
  <p>Family Photo</p>
  <p>Family Photo</p>
 </div>
</div>

<div class="column1">
  <div class="card">
  <img src="img2.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Package 1</h1>
  <p class="price">$50</p>
  <p>Family Photo</p>
  <p>Family Photo</p>
  </div>
</div>

<div class="column1">
  <div class="card">
  <img src="img1.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Package 1</h1>
  <div class = "cardText"> 
  <p class="price">$20</p>
  <p>Family Photo</p>
  <p>Family Photo</p>
  </div>
</div>
</div>
</div>

<button type="button" class="block">Send Quotation Request</button>

<script src="script.js"></script>
</body>
</html>