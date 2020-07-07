<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!--My CSS -->
  <link rel="stylesheet" href="../css/home.css">
  <title>Rochester Memorial</title>
  <style>
    /*body {font-family: Arial, Helvetica, sans-serif;}*/
    * {box-sizing: border-box;}
    
    input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }
    
    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <img class="logo img-fluid rounded mb-4 mb-lg-0" src="../img/RochesterMemLogo.png" alt="" width="75">
    <a class="navbar-brand" href="#">Rochester Memorial</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutUs.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ourProviders.php">Our Providers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="resources.php">Resources</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="homeImg">
  <img src="../img/Contact_Us.jpg" alt="doctors" width="100%;">
  <div class="centered">Contact US</div>
</div>

<div class="container ">
  <form action="action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="email">Email Address</label>
    <input type="text" id="email" name="emailaddress" placeholder="example@doamin.com">

    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phonenumber" placeholder="(555)555-5555">

    <label for="Service_Enquiry">Service Enquiry</label>
    <select id="Service_Enquiry" name="Service_Enquiry">
      <option value="Greater Rochester Internal Medicine">Rochester Memorial</option>
      <option value="MDVIP Membership">Membership</option>
      <option value="Other Inquiry">Other Inquiry</option>
    </select>

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" onclick="window.location.href = 'action_page.php';">
  </form>
</div>

<footer>
  <p>Copyright © Rochester Memorial, All Rights Reserved. Terms of Use | Privacy Policy</p>
  <p>Rochester, NY USA</p>
</footer>

<!-- My JavaScript -->
<script src="../js/home.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

</body>
</html>
