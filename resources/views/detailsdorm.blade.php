<html>
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU - Dorm Finder</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="StudentStyle.css">  
        <!-- SCRIPT -->
        <script src="/studentDormFinder.js"></script>

        <link rel="icon" href="/images/mmsu logo.png">
    </head>

    <body>
    <div class="uppernav"> <h3 style="margin-left:20px;color:#0C4B05;">MMSU </h3><h3> - Dorm Finder</h3></div>
    
    <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:20px;margin-top:5px;" src="/images/mmsu logo.png"  height="4%" width="4%">
        <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
            <a href="contact">CONTACT</a>
            <a href="about">ABOUT US</a>
            <a href="dorm">LIST OF DORMS</a>

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


    <div class="header"> <h1>HOUSING FACILITIES - Dorm Name</h1></div>
        
        <div class="dorm_name"> <h2>STUDENT RESIDENCE HALL</h2> </div><br>
        <div class="dorm_details_con">

        <div id="slideshow" class="imgcontainer">
        <div class="mySlides"> <img src="/images/sample.jpg" style="width:100%;height:100%;"></div>

        <div class="mySlides"><img src="/images/sample2.jpg"  style="width:100%;height:100%;"> </div>

        <div class="mySlides"><img src="/images/sample.jpg"  style="width:100%;height:100%;"> </div>

        <div class="mySlides"><img src="/images/sample2.jpg"  style="width:100%;height:100%;"> </div>

        <a class="prev" onclick="plusSlides(-1, slideshow)">❮</a>
        <a class="next" onclick="plusSlides(1, slideshow)">❯</a>
        </div>
        </div>

        <div class="dorm_details">    
        <form style="width:80%;">
            <label for="fname">Manager</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Name" readonly="readonly"><br>
            <label for="fname">Address</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Location" readonly="readonly"><br>
            <label for="fname">Contact</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Contact" readonly="readonly"><br>
            <label for="fname">Amenities</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Amenities" readonly="readonly"><br>
            <label for="quantity" >Available space</label>
                <input type="number" id="quantity" name="quantity" style="width:10%;" class="readapp" min="0" value="10" readonly="readonly">

            <table class="viewdormtable" id="room">
                <tr>
                    <th>Room Type</th>
                    <th>Price</th>
                </tr> 
               <tr>
                    <td class="readapp">Single</td>
                    <td class="readapp">1500</td>
                </tr>
               
                </table>

            <a href="confirm"><button type="button" class="secondyellowbutton" style="margin-top:1%;width:20%;"> APPLY</button></a>  
        </form>
        </div>

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
    </head>
</html>