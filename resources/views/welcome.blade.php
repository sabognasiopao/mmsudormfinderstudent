<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MMSU - Dorm Finder</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="StudentStyle.css">  
        <!-- SCRIPT -->
        <script src="/studentDormFinder.js"></script>

        <link rel="icon" href="/images/mmsu logo.png">

    </head>
    
    <body class="antialiased">
        
    <div class="uppernav"> <h3 style="margin-left:20px;color:#0C4B05;">MMSU </h3><h3> - Dorm Finder</h3> </div>
    <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:20px;margin-top:10px;" src="/images/mmsu logo.png"  height="60" width="60">
        <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
            <a href="#news">CONTACT</a>
            <a href="#contact">ABOUT US</a>
            <a href="dorm">LIST OF DORMS</a>
    </div>
    
    <img style="float:left;margin-right:100px;margin-left:80px;" src="/images/mmsu logo.png"  height="620" width="614">

    <div class="container">
        <div class="logincontainer">
            <form id="Login">
                <legend>Log In:</legend>
                    <input type="text" id="name" placeholder="Student ID" class="loginform" style="margin-top:30px;"> <br>
                    <input type="password" id="password" placeholder="Password" class="loginform" style="margin-top:10px;"> <br>

                    <a href="home"><button type="button" class="yellowbutton" style="margin-top:15px; margin-bottom:50px;">Log In</button></a> 
            </form>
        </div>
    </div>
    </body>
</html>
