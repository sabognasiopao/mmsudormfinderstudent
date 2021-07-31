<html>
    <head>
        <title>MMSU-Dorm Finder</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="StudentStyle.css">  
         <!-- JavaScript -->
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

    <div class="header"> <h1>APPLICATION LIST</h1> </div>
    <div class="applistform">
    <form>
        <label for="dormname">Dorm Name:</label>
            <input type="text" id="dormname" value="Insert Dorm Name" style="width: 20%;" class="readapp" readonly="readonly"><br>
        <label for="fname">Manager:</label>
                <input type="text" id="fname" name="fname" style="width: 20%;" class="readapp" value="Sample Name" readonly="readonly"><br>
        <label for="roomtype">Room Type:</label>
            <input type="text" id="roomtype" value="Single Bed Space" style="width: 20%;" class="readapp" readonly="readonly"><br>
        <label for="number">Mobile Number:</label>
            <input type="tel" id="number" value="09355350600" style="width: 20%;" class="readapp" readonly="readonly"><br>
        
        <label for="process">Process:</label>
        <input type="text" id="process" value="Waiting for Approval" style="width: 20%;" class="readapp" readonly="readonly"><br>
    </form>
    </div>

</body>
</head>
</html>