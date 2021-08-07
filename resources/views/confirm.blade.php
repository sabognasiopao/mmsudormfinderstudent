<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MMSU - Dorm Finder | Profile</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="StudentStyle.css">  
        <!-- JavaScript -->
        <script src="/studentDormFinder.js"></script>
        <link rel="icon" href="/images/mmsu logo.png">
    </head>
    
    <body class="antialiased">

    <div class="uppernav"> <h3 style="margin-left:20px;color:#0C4B05;">MMSU </h3><h3> - Dorm Finder</h3></div>
    
    <div class="topnav" id="myTopnav">
       <img style="float:left;margin-left:20px;margin-top:5px;" src="/images/mmsu logo.png"  height="4%" width="4%">
       <a style=" text-decoration: none;width:20%;margin:0%;" href="home"><h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4></a>
            <a class="topnavlink" href="contact">CONTACT</a>
            <a class="topnavlink" href="about">ABOUT US</a>
            <a class="topnavlink" href="dorm">LIST OF DORMS</a>

                <div class="menu">
                <img style="float:right;margin-top:15px;" src="/images/user.png"  width="15%" height="40%">
                    <ul><li>
                     <a href="#" style="float:right;margin:10px 0px 0px 0px;">18-020008</a>
                        <ul>
                        <li><a href="profilestudent">Profile</a></li><br>
                        <li><a href="applicationlist">Application List</a></li><br>
                        <li><a href="welcome">Log Out</a></li>
                        </ul>
                    </ul></li>
            </div>
    </div>

<!-- SLIDESHOW OF DORMITORY  -->
        <div class="dorm_name">STUDENT RESIDENCE HALL </div><br>
        <div class="dorm_details_con">

        <div id="slideshow" class="imgcontainer">
        <div class="mySlides"> <img src="/images/sample.jpg" style="width:100%;height:500px;"><div class="text">Single Space</div></div>

        <div class="mySlides"><img src="/images/sample2.jpg"  style="width:100%;height:500px;"><div class="text">Amenities</div> </div>

        <div class="mySlides"><img src="/images/sample.jpg"  style="width:100%;height:500px;"><div class="text">Single Space</div> </div>

        <div class="mySlides"><img src="/images/sample2.jpg"  style="width:100%;height:500px;"><div class="text">Amenities</div> </div>

        <a class="prev" onclick="plusSlides(-1, slideshow)">❮</a>
        <a class="next" onclick="plusSlides(1, slideshow)">❯</a>
        </div>
           <p class="descriptiondorm"> A dormitory (originated from the Latin word dormitorium, often abbreviated to dorm) is a building primarily providing sleeping and residential 
               quarters for large numbers of people such as boarding school, high school, college or university students. </p>
        </div>

<!-- DETAILS OF DORMITORY  -->
<div class="dorm_details">    
        <form style="width:80%;">
        
        <h2 style="color:#0C4B05;">Confirm your Application</h2>

        <label  style="width:25%;margin-right:2%;" for="dorm">Dormitory</label> 
        <label  style="width:25%;" for="room">Type of Room</label><br>
  
        <input type="text" id="dorm" style="width:25%;margin-right:2%;" value="Insert Dorm Name" readonly class="inputapp">
        <select name="room" id="room" style="width:25%;" class="inputapp">
            <option>Select Room Type</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
        </select><br><br>

        <label  style="width:25%;margin-right:2%;" for="room">Room Fee</label>
        <label  style="width:25%;" for="room">Vacancy</label><br>
        <input type="text" id="dorm" style="width:25%;margin-right:2%;" value="1500" readonly class="inputapp">
        <input type="text" id="dorm" style="width:25%;margin-right:2%;" value="5" readonly class="inputapp"><br>



        <button type="button" onclick="###" class="secondyellowbutton" style="width:20%;margin-top:5%;float:left;"> CONFIRM</button>
        <a href="home"><button type="button" class="confirmcancelbutton">CANCEL</button></a><br>
        
        <p style="margin-top:10%;"class="note"> NOTE: After confirming, wait for 1-3 business days for the process, if still waiting for
        approval, feel free to apply to other available dormitories </p>

        </form>
        </div>

<!-- SCRIPT FOR SLIDESHOW  -->
<script>
var slideshow = document.getElementById("slideshow");
        slideshow.currentSlideIndex = 1;
        showSlides(slideshow.currentSlideIndex, slideshow);

        function plusSlides(n, slideshow) {
        showSlides(slideshow.currentSlideIndex += n, slideshow);
        }

        function currentSlide(n, slideshow) {
        showSlides(slideshow.currentSlideIndex = n, slideshow);
        }

        function showSlides(n, slideshow) {
  
            var i;
            var slides = slideshow.getElementsByClassName("mySlides");
       
            if (n > slides.length) {slideshow.currentSlideIndex = 1}    
            if (n < 1) {slideshow.currentSlideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }

        slides[slideshow.currentSlideIndex-1].style.display = "block";  
        }
    
</script>

    </body>
</html>
