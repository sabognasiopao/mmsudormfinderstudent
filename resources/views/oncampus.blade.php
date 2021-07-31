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


    <div class="header"> <h1>HOUSING FACILITIES - ON CAMPUS</h1>
    <label for="room" style="width:10%;margin-left:10%">Room Type</label>
                <select name="room" id="room" class="inputapp">
                    <option value="cas" onclick="filterSelection('cars')">CAS</option>
                    <option value="coe">COE</option>
                    <option value="cbea">CBEA</option>
                    <option value="chs">CHS</option>
                </select>

    <form style="margin-left:10%;margin-top:2%;" action="###">
        <input type="text" id="search" onkeyup="searchFunction()" placeholder="Search.." name="search">
        <button type="submit"><img src="https://img.icons8.com/pastel-glyph/50/000000/search--v2.png" width="100%"></button>
    </form>        
    </div>
        
        <div class="dorm_name"> <h2>STUDENT RESIDENCE HALL</h2> </div><br>
        <div class="dorm_details_con">

        <div id="slideshow1" class="imgcontainer">
        <div class="mySlides"> 
        <div class="numbertext">1 / 4</div> <img src="/images/sample.jpg" style="width:100%;height:100%;"></div>

        <div class="mySlides">
        <div class="numbertext">2 / 4</div> <img src="/images/sample2.jpg"  style="width:100%;height:100%;"> </div>

        <div class="mySlides">
        <div class="numbertext">3 / 4</div> <img src="/images/sample.jpg"  style="width:100%;height:100%;"> </div>

        <div class="mySlides">
        <div class="numbertext">4 / 4</div> <img src="/images/sample2.jpg"  style="width:100%;height:100%;"> </div>

        <a class="prev" onclick="plusSlides(-1, slideshow1)">❮</a>
        <a class="next" onclick="plusSlides(1, slideshow1)">❯</a>
        </div>
        </div>

        <div class="dorm_details">    
        <form style="width:80%;margin-top: 2%;">
            <label for="fname">Manager</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Name" readonly="readonly"><br>
            <label for="fname">Address</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Location" readonly="readonly"><br>
            <label for="fname">Contact</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Contact" readonly="readonly"><br>
            <label for="fname">Amenities</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Amenities" readonly="readonly"><br>
    
            <label for="room">Type of Room</label>
                <select name="room" id="room" style="width: 20%;"class="inputapp">
                    <option value="cas">CAS</option>
                    <option value="coe">COE</option>
                    <option value="cbea">CBEA</option>
                    <option value="chs">CHS</option>
                </select>
            <label for="fname" style="width:20%;margin-left:3%">Room Fee</label>
                <input type="text" id="fname" name="fname" style="width: 10%;margin-left:-5%;" class="readapp" value="1200" readonly="readonly"><br>
   
            <label for="quantity" >Available space</label>
                <input type="number" id="quantity" name="quantity" style="width:10%;" class="readapp" min="0" value="10" readonly="readonly">

            <a href="confirm"><button type="button" class="secondyellowbutton" style="margin-top:1%;width:20%;"> APPLY</button></a>  
        </form>
        </div>

        <div class="dorm_name"> <h2>STUDENT RESIDENCE HALL</h2> </div><br>
        <div class="dorm_details_con">

        <div  id="slideshow2" class="imgcontainer">
        <div class="mySlides"> 
        <div class="numbertext">1 / 4</div> <img src="/images/sample2.jpg" style="width:100%;height:100%;"></div>

        <div class="mySlides">
        <div class="numbertext">2 / 4</div> <img src="/images/sample2.jpg"  style="width:100%;height:100%;"> </div>

        <div class="mySlides">
        <div class="numbertext">3 / 4</div> <img src="/images/sample2.jpg"  style="width:100%;height:100%;"> </div>

        <div class="mySlides">
        <div class="numbertext">4 / 4</div> <img src="/images/sample2.jpg"  style="width:100%;height:100%;"> </div>

        <a class="prev" onclick="plusSlides(-1,slideshow2)">❮</a>
        <a class="next" onclick="plusSlides(1,slideshow2)">❯</a>
        </div>
        </div>

        <div class="dorm_details">    
        <form style="width:80%;margin-top: 2%;">
            <label for="fname">Manager</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Name" readonly="readonly"><br>
            <label for="fname">Address</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Location" readonly="readonly"><br>
            <label for="fname">Contact</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Contact" readonly="readonly"><br>
            <label for="fname">Amenities</label>
                <input type="text" id="fname" name="fname" style="width: 40%;" class="readapp" value="Sample Amenities" readonly="readonly"><br>
    
            <label for="room">Type of Room</label>
                <select name="room" id="room" style="width: 20%;"class="inputapp">
                    <option value="cas">CAS</option>
                    <option value="coe">COE</option>
                    <option value="cbea">CBEA</option>
                    <option value="chs">CHS</option>
                </select>
            <label for="fname" style="width:20%;margin-left:3%">Room Fee</label>
                <input type="text" id="fname" name="fname" style="width: 10%;margin-left:-5%;" class="readapp" value="1200" readonly="readonly"><br>
   
            <label for="quantity" >Available space</label>
                <input type="number" id="quantity" name="quantity" style="width:10%;" class="readapp" min="0" value="10" readonly="readonly">

            <a href="confirm"><button type="button" class="secondyellowbutton" style="margin-top:1%;width:20%;"> APPLY</button></a>  
        </form>
        </div>

<script>
        var slideshow1 = document.getElementById("slideshow1");
        slideshow1.currentSlideIndex = 1;
        showSlides(slideshow1.currentSlideIndex, slideshow1);

        var slideshow2 = document.getElementById("slideshow2");
        slideshow2.currentSlideIndex = 1;
        showSlides(slideshow2.currentSlideIndex, slideshow2);


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