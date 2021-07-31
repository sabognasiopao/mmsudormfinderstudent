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
        <h4>MARIANO MARCOS <br> STATE UNIVERSITY</h4>
            <a href="#news">CONTACT</a>
            <a href="#contact">ABOUT US</a>
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

    <div class="header">
        <h1>MY PROFILE</h1>
    </div>

    <div class="profile_con">
    <form>
        <label for="fname">Full Name</label>
            <input type="text" id="fname" value="Paola Francisco" style="width: 25%;" class="inputapp">
        <label style="margin-left:30px;" for="fstudentid">Student Number</label>
            <input type="text" id="fstudentid" value="18-020008" style="width: 25%;" class="inputapp" ><br><br>
        <label for="sex">Sex</label>
            <input type="text" id="sex" value="Female" style="width: 25%;" class="inputapp">
        <label style="margin-left:30px;" for="email">Email</label>
            <input type="email" id="email" value="pjnfrancisco@gmail.com" style="width: 25%;" class="inputapp"><br><br>
        <label for="number">Mobile Number</label>
            <input type="tel" id="number" value="09355350600" style="width: 25%;" class="inputapp">
        <label style="margin-left:30px;" for="number">Contact of Guardian</label>
            <input type="tel" id="number" value="09355350600" style="width: 25%;" class="inputapp"><br><br>
        <label for="birthday">Date of Birth</label>
            <input type="date" id="birthday" style="width: 25%;" class="inputapp">
        <label style="margin-left:30px;" for="birthday">Address</label>
            <input type="text" id="birthday" value="Brgy. 26, Laoag City" style="width: 25%;" class="inputapp"><br><br><br><br>
        
        <label for="college">College:</label>
        <select name="room" id="room" style="width:25%;"class="inputapp">
            <option value="cas">CAS</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
        </select>
        
        <label style="margin-left:30px;" for="course">Course:</label>
        <select name="room" id="room" style="width:25%;"class="inputapp">
            <option value="cas">CAS</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
        </select><br><br>

        <label  for="dorm">Dormitory</label>
            <input type="text" id="dorm" value="Insert Dorm Name" style="width: 25%;" class="inputapp">
        
        <label style="margin-left:30px;" for="roomtype">Room Type</label>
            <input type="text" id="roomtype" value="Insert Room Type" style="width: 25%;" class="inputapp">
       
        <a href="home"><button type="button" class="greenbutton" style="margin-top:40px;">CANCEL</button></a>
        <button type="button" onclick="###" class="secondyellowbutton" style="margin-right:10px;margin-top:40px;"> CONFIRM</button>
    </div>
    </form>

    </body>
</html>
