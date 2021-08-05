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
    
    <label for="fstudentid">Student Number</label>  
        <label  for="sex" >Sex</label>
        <label for="email">Email</label>
        <label  for="number">Mobile Number</label><br>
        
        <input type="text" style="width:20%;margin-right:2%;" id="fstudentid" value="18-020008" class="inputapp" readonly >
        <input type="text" style="width:20%;margin-right:2%;" id="sec" value="Female" class="inputapp" readonly>
        <input type="email" style="width:20%;margin-right:2%;" id="email" value="pjnfrancisco@gmail.com"  class="inputapp" readonly>
        <input type="tel" style="width:20%;" id="number" value="09355350600" class="inputapp" readonly><br><br>

        <label for="fname">First Name</label>
        <label for="mname">Midle Name</label>
        <label for="lname">Last Name</label>
        <label for="sname">Suffix (Jr,,III)</label><br>

        <input type="text"  style="width:20%;margin-right:2%;" id="fname" value="Paola Joy" class="inputapp" readonly>
        <input type="text"  style="width:20%;margin-right:2%;" id="mname" value="Nuque"  class="inputapp" readonly>
        <input type="text"  style="width:20%;margin-right:2%;" id="lname" value="Francisco"  class="inputapp" readonly>
        <input type="text"  style="width:20%;margin-right:2%;" id="sname" value="Jr."  class="inputapp" readonly><br><br>

        <label for="birthday">Barangay</label>
        <label for="birthday">Street</label>
        <label  for="birthday">City</label>
        <label for="birthday">Province</label>
        <input type="text" style="width:20%;margin-right:2%;" id="birthday" value="6"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;"id="birthday" value="T. Alonzo Street"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;"id="birthday" value="Laoag City"  class="inputapp" readonly>
        <input type="text" style="width:20%;"id="birthday" value="Ilocos Norte" class="inputapp" readonly><br><br>


        <label for="nameg">Name of Guardian</label>
        <label for="number">Contact of Guardian</label>
        <label for="college">College:</label>
        <label for="course">Course:</label><br>

        <input type="text" style="width:20%;margin-right:2%;"id="nameg" value="Philbert Francisco"  class="inputapp" readonly>
        <input type="tel" style="width:20%;margin-right:2%;"id="number" value="09355350600"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;"id="college" value="CAS"  class="inputapp" readonly>
        <input type="text" style="width:20%;margin-right:2%;"id="course" value="BSCS"  class="inputapp" readonly><br><br>

        <h2 style="color:#0C4B05;">SELECT DESIRED ROOM TYPE:</h2>
        <label  for="dorm">Dormitory</label>
        <label  for="room">Type of Room</label>
        <label for="contract">Contract</label><br>
        
        <input type="text" id="dorm" style="width:20%;margin-right:2%;" value="Insert Dorm Name" class="inputapp">
  
        <select name="room" id="room" style="width:20%;margin-right:2%;" class="inputapp">
            <option value="cas">CAS</option>
            <option value="coe">COE</option>
            <option value="cbea">CBEA</option>
            <option value="chs">CHS</option>
        </select>
        <a href="/sampledocx/sampledoc.pdf" download><button type="button" id="contract" class="contractbutton"  > DOWNLOAD FILE</button></a>
        
        <div style="display:flex;width:100%;">
        <p class="note"> NOTE: Before confirming, kindly check the contract for the terms of service.</p>
        <button type="button" onclick="###" class="secondyellowbutton" style="margin-top:20px;margin-right:10px;margin-left:10%;"> CONFIRM</button>
        <a href="home"><button type="button"  class="cancelbutton">CANCEL</button></a>
        
        </div>
    </div>
    </form>

    </body>
</html>
