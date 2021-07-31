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
    <div class="uppernav"> <h3 style="margin-left:20px;color:#0C4B05;">MMSU </h3><h3> - Dorm Finder</h3> </div>
    
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

    <div class="dashboard_con2">   
    <div class="imgcontainer">
        <div class="mySlides"> 
        <div class="numbertext">1 / 4</div> <img src="/images/sample.jpg" style="width:100%;height:100%;"></div>

        <div class="mySlides">
        <div class="numbertext">2 / 4</div> <img src="/images/sample2.jpg"  style="width:100%;height:100%;"> </div>

        <div class="mySlides">
        <div class="numbertext">3 / 4</div> <img src="/images/sample.jpg"  style="width:100%;height:100%;"> </div>

        <div class="mySlides">
        <div class="numbertext">4 / 4</div> <img src="/images/sample2.jpg"  style="width:100%;height:100%;"> </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div></div>

    <div class="dashboard_con">   
        <h2 class="title">STUDENT HOUSE FACILITIES</h2>
            <p style="text-indent:30px;text-align: justify;">With the understanding of the role that accommodation plays supporting academic performance, the Mariano Marcos State University offers a decent array of accommodations for qualified students. These accommodations are made available exclusively to its residents with the goal of providing secure and comfortable safe spaces to live in during their stay in the University.</p>
            <a href="dorm"><button type="button" class="btnapply">APPLY NOW</button></a>
    </div>

    <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
            }
        </script>
</body>
</html>