<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Donation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/titlelogo1.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


        <!--Navbar Section-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                    <a href="#myPage" class="navbar-left" style="height:20px;"><img src="./img/logo.png" style="height:50px; padding:5px 5px 5px 5px;"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#pricing">REGISTER AS DONOR</a></li>
                        <li><a href="#services">BLOOD TIPS</a></li>
                        <li><a href="#portfolio">SEARCH DONORS</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#contact">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar Section Ends-->

        <!--Header Section-->
        <div class="jumbotron text-center">
            <h1>BLOOD DONORS UNITED</h1>
            <p>Be a proud donor! Save a life.</p>
            <!--
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
-->
        </div>
        <!--Header Section Ends-->

        <!--RAD Section-->
        <div id="pricing" class="container-fluid bg-grey">
            <h2 class="text-center">Register As Donor</h2>
            <form action="./php/donor_register.php" onsubmit="return validateForm()" method="get">
            <div class="row">
                <div class="col-md-6 mob-con-border">
                    <!--1st col group-->
                    <div class="control-group">
                        <label>Name*</label>
                        <div class="form-group">
                            <input class="form-control" id="name" name="name" type="text" required>
                        </div>
                        <label>Email*</label>
                        <div class=" form-group">
                            <input class="form-control" id="email" name="email" type="email" required>
                        </div>
                        <label for="sel">Blood Group*</label>
                        <select id="sel" class="form-control" name="bGroup">
          <option>Select</option>
          <option>A+</option>
          <option>B+</option>
          <option>AB+</option>
          <option>O+</option>
          <option>A-</option>
          <option>B-</option>
          <option>AB-</option>
          <option>O-</option>
      </select>
                   <label style="margin-top:15px;">Availability*</label>
                   <select class="form-control" name="isavailable">
                       <option>Select</option>
                       <option>Yes</option>
                       <option>No</option>
                   </select>
                    </div>
                </div>
                <!--1st col group-->
                <div class="col-md-6 mob-con-border">
                    <!--2nd col group-->
                    <div class="control-group">
                        <label >Contact*</label>
                        <div class="form-group">
                            <input class="form-control" id="contact_form" name="contact" type="text" required>
                        </div>
                        <label>City*</label>
                        <div class=" form-group">
                            <input class="form-control" id="city" name="city" type="text" required>
                        </div>
                        <label>Are You A Frequent Donor*</label>
                        <select id="sel" class="form-control" name="frequentdonor">
          <option>Select</option>
           <option>Yes</option>
           <option>No</option>
      </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit" style="margin-top:30px;">Send</button>
                </div>
            </div>
            </form>
        </div>
        <!--RAD Section Ends-->

        <!--Blood Tips Section-->
        <div id="services" class="container-fluid text-center">
            <h2>Blood Tips</h2>
            <h4>Tips For a Successful Donation</h4>
            <br>
            <ul class="nav nav-tabs slideanim">
                <li class="active"><a data-toggle="tab" href="#home">Before Your Donation</a></li>
                <li><a data-toggle="tab" href="#menu1">During Your Donation</a></li>
                <li><a data-toggle="tab" href="#menu2">After Your Donation</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active slideanim">
                    <ul>
                        <li>Maintain a healthy iron level in your diet by eating iron rich foods, such as red meat, fish, poultry, beans, spinach, iron-fortified cereals and raisins.</li>
                        <li>Get a good night's sleep.</li>
                        <li>Drink an extra 16 oz. of water or nonalcoholic fluids before the donation.</li>
                        <li>If you are a platelet donor, remember that your system must be free of aspirin for two days prior to donation.</li>
                        <li>Remember to bring your donor card, driver's license or two other forms of ID.</li>
                        <li>Eat a healthy meal before your donation. Avoid fatty foods, such as hamburgers, fries or ice cream before donating. (Fatty foods can affect the tests we do on your blood. If there is too much fat in your blood, your donation cannot be tested for infectious diseases and the blood will not be used for transfusion.)</li>
                    </ul>
                </div>
                <div id="menu1" class="tab-pane fade slideanim">
                    <ul>
                        <li>Wear clothing with sleeves that can be raised above the elbow.</li>
                        <li>Relax, listen to music, talk to other donors or read during the donation process.</li>
                        <li>Take the time to enjoy a snack and a drink in the refreshments area immediately after donating.</li>
                        <li>Let the person taking your blood know if you have a preferred arm and show them any good veins that have been used successfully in the past to draw blood.</li>
                    </ul>
                </div>
                <div id="menu2" class="tab-pane fade slideanim">
                    <ul>
                        <li>Drink an extra four (8 ounce) glasses of liquids and avoid alcohol over the next 24 hours.</li>
                        <li>Keep the strip bandage on for the next several hours.</li>
                        <li>To avoid a skin rash, clean the area around the strip bandage with soap and water.</li>
                        <li>Do not do any heavy lifting or vigorous exercise for the rest of the day.</li>
                        <li>If the needle site starts to bleed, apply pressure to it and raise your arm straight up for about 5-10 minutes or until bleeding stops.</li>
                        <li>If you experience dizziness or lightheadedness after donation, stop what you are doing and sit down or lie down until you feel better. Avoid performing any activity where fainting may lead to injury for at least 24 hours.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--blood Tips Section Ends-->

        <!--Search Donors Section-->
        <div id="portfolio" class="container-fluid text-center bg-grey">
            <h2>Search Blood Donors</h2><br>
            <h4>Recent Donors</h4>
            <form action="./php/search_donor.php"  method="get">
            <div class="row slideanim">
                <div class="col-md-6">
                    <label for="sel">Blood Group*</label>
                    <select id="sel" class="form-control" name="bGroup">
          <option>Select</option>
          <option>A+</option>
          <option>B+</option>
          <option>AB+</option>
          <option>O+</option>
          <option>A-</option>
          <option>B-</option>
          <option>AB-</option>
          <option>O-</option>
      </select>
                    <!-- /input-group -->
                </div>
                <div class="col-md-6">
                    <label>City</label>
                    <div class="form-group">
                        <input class="form-control" id="city" name="city" placeholder="City Name" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit" style="margin-top:30px;">Send</button>
                </div>
            </div>
            </form>
            <div id="result_form"></div>
            
            <h2>What our DOnors say</h2>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
                    </div>
                    <div class="item">
                        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
                    </div>
                    <div class="item">
                        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--Search DOnors Section Ends-->

        <!--About Section-->
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>About Blood Donors United</h2><br>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="col-sm-4">
                    <img src="./img/blood-3.jpg" class="slideanim">
                </div>
            </div>
        </div>
        <!--About Section Ends-->

        <!--Contact Section-->
        <div id="contact" class="container-fluid bg-grey">
            <h2 class="text-center">CONTACT</h2>
            <div class="row">
                <!--
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Indore, India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 8878352724</p>
      <p><span class="glyphicon glyphicon-envelope"></span> lorem@blabla</p>
    </div>
-->
                <div class="col-sm-12 slideanim">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact Section Ends -->

        <!--
 Add Google Maps 
<div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
-->

        <footer class="container-fluid text-center" style="background-color:#28292b;">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Made By <a href="https://www.linkedin.com/in/dev-jain-6917ab141/">Dev Jain</a></p>
        </footer>

        <script src="./js/main.js"></script>
	<script>	
function validateForm(){
	alert("Form has been Submitted!");
}
function resultForm(){
	alert("hidshcb");
}
	</script>
</body>

</html>
