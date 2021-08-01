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


    <div class="header"> <h1>HOUSING FACILITIES - OFF CAMPUS</h1>
    <label for="room" style="width:5%;">Price</label>
                <select name="room" id="room" class="inputapp">
                    <option value="coe">Low to High</option>
                    <option value="cbea">High to Low</option>
                </select>

    <form style="margin-left:10%;margin-top:2%;" action="###">
        <input type="text" id="search" onkeyup="searchFunction()" placeholder="Search.." name="search">
        <button type="submit"><img src="https://img.icons8.com/pastel-glyph/50/000000/search--v2.png" width="100%"></button>
    </form>        
    </div>
        
    
    <div class="listappcontainer">
    <div class="tableFixHeadtitle">LIST OF DORMITORIES</div>  
    <div class="tableFixHead">
      <table>
        <thead>
          <tr>
            <th>DORMITORY NAME</th>
            <th>DORM MANAGER</th>
            <th>CONTACT NUMBER</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="detailsdorm">Ladies Dormitory</a></td>
            <td>Marilyn Rojo</td>
            <td>09355350600</td>
          </tr>
        </tbody>
      </table>
    </div>
    </div>

    </body>
</html>