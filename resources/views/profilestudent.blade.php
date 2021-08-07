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


    <div class="header">
        <h1>MY PROFILE</h1>
    </div>

    <div class="profile_con">
    <form>
    <div class="smallheader">FULL NAME</div>
        <label for="fname">First Name</label>
        <label for="mname">Midle Name</label>
        <label for="lname">Last Name</label>
        <label for="sname">Suffix (Jr,,III)</label><br>

        <input type="text"  style="width:20%;margin-right:2%;" id="fname" value="Paola Joy" class="inputapp">
        <input type="text"  style="width:20%;margin-right:2%;" id="mname" value="Nuque"  class="inputapp">
        <input type="text"  style="width:20%;margin-right:2%;" id="lname" value="Francisco"  class="inputapp">
        <input type="text"  style="width:20%;margin-right:2%;" id="sname" value="Jr."  class="inputapp"><br><br>

    <div class="smallheader">ADDRESS</div>
        <label for="barangay">Barangay</label>
        <label for="street">Street</label>
        <label  for="city">City</label>
        <label for="province">Province</label>
        <input type="text" style="width:20%;margin-right:2%;" id="barangay" value="6"  class="inputapp">
        <input type="text" style="width:20%;margin-right:2%;"id="street" value="T. Alonzo Street"  class="inputapp">
        <input type="text" style="width:20%;margin-right:2%;"id="city" value="Laoag City"  class="inputapp">
        <input type="text" style="width:20%;"id="province" value="Ilocos Norte" class="inputapp"><br><br>

    <div class="smallheader">CONTACT INFORMATION</div>
        <label for="email">Email</label>
        <label  for="number">Mobile Number</label>
        <label for="nameg">Name of Guardian</label>
        <label for="number">Contact of Guardian</label><br>

        <input type="email" style="width:20%;margin-right:2%;" id="email" value="pjnfrancisco@gmail.com"  class="inputapp">
        <input type="tel" style="width:20%;margin-right:2%;" id="number" value="09355350600" class="inputapp">
        <input type="text" style="width:20%;margin-right:2%;"id="nameg" value="Philbert Francisco"  class="inputapp">
        <input type="tel" style="width:20%;"id="number" value="09355350600"  class="inputapp"><br><br>

    <div class="smallheader">ACADEMIC INFORMATION</div>
        <label for="fstudentid">Student Number</label>  
        <label for="college">College:</label>
        <label for="course">Course:</label><br>

        
        <input type="text" style="width:20%;margin-right:2%;" id="fstudentid" value="18-020008" class="inputapp" >
        <select name="college" style="width:20%;margin-right:2%;"id="room" class="inputapp">
            <option value="cas">CAS</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
        </select>
        <input type="text" style="width:20%;margin-right:2%;"id="course" value="BSCS"  class="inputapp"><br><br>

    <div class="smallheader">PERSONAL INFORMATION</div>
         <label  for="sex" >Sex</label><br>
         <select name="room"  style="width:20%;margin-right:2%;" id="room" class="inputapp">
                <option value="cas">Female</option>
                <option value="coe">Male</option>
         </select>
    
        <a href="home"><button type="button" class="greenbutton" style="margin-top:2%;margin-right:1%;">CANCEL</button></a>
        <button type="button" onclick="updateProfileFunction()" class="secondyellowbutton" style="margin-right:2%;margin-top:2%;"> UPDATE</button>
    </div>
    </form>

    </body>
</html>
