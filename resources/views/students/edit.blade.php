<DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;

      .c{
        border: 2px solid grey;
          border-radius:1px;
          display:flex;
          text-align:center;
          justify-content:center;
         /* height:200px;
          width:500px;*/
          padding:50px;
          margin-left:150px;
          margin-top:20px;
             
          text-align: center;


      }
      .d{
          /* background-color: blue; */
          border: 2px solid grey;
          border-radius:1px;
          display:flex;
          text-align:center;
          justify-content:center;
         /* height:200px;
          width:500px;*/
          padding: 50px;
          margin-right:100px;
          margin-left:220px;
          margin-top:20px;
             
          text-align: center;
      }
      .body{display:flex;}
      input[type=submit]{
          background-color: green;
          width:100px;
          height:30px;
          border-radius:4px;
      }
      
</style>
</head>
<body>
  <div class="topnav">
  <a class="active" href="#home">HOME</a>
  <a href="http://reg.test/serial/create">FIRSTTIME</a>
  <a href="http://reg.test/serial/edit">UPDATE&DELETE</a>
  <a href="#about">ABOUT</a>
</div>
    <div class="body">
<div class="c">
    <table>
<tr><td>
  <label for="sid">STUDENTID:</label>
  </td><td>
  <input type="text" id="SID" name="studentid"><br><br>
  </td></tr>
  <tr><td>
  <label for="fname">FULLNAME:</label>
  </td><td>
  <input type="text" id="Fname" name="fullname"><br><br>
  </td></tr>
  <tr><td>
    <label for="nid">NATIONALID:</label>
    </td><td>
  <input type="text" id="NID" name="nationalid"><br><br>
  </td><tr>
  <tr><td>
  <label for="sn">MACHINE SERIALNUMBER:</label>
  </td><td>
  <input type="text" id="MS" name="serialnumber"><br><br>
  </td></tr>
  <tr><td>
  <label for="md">MACHINEMODEL</label>
  </td><td>
  <input type="text" id ="MD" name ="modelname"><br><br>   
  </td></tr>
  <tr><td>
  <label for="md">MOBILENUMBER</label>
  </td><td>
  <input type="text" id ="MD" name ="mobile"><br><br>
  </td></tr>
  <tr><td></td><td><input type="submit" value="update"></td></tr>
    </table>
    </div>

         <div class="d" >
    <table>
  <tr><td>
  <label for="sid">STUDENTID:</label>
  </td><td>
  <input type="text" id="SID" name="studentid"><br><br>
  </td></tr>
  <tr><td>
  <label for="fname">FULLNAME:</label>
  </td><td>
  <input type="text" id="Fname" name="fullname"><br><br>
  </td></tr>
  <tr><td>
    <label for="nid">NATIONALID:</label>
    </td><td>
  <input type="text" id="NID" name="nationalid"><br><br>
  </td><tr>
  <tr><td>
  <label for="sn">MACHINE SERIALNUMBER:</label>
  </td><td>
  <input type="text" id="MS" name="serialnumber"><br><br>
  </td></tr>
  <tr><td>
  <label for="md">MACHINEMODEL</label>
  </td><td>
  <input type="text" id ="MD" name ="modelname"><br><br>   
  </td></tr>
  <tr><td>
  <label for="md">MOBILENUMBER</label>
  </td><td>
  <input type="text" id ="MD" name ="mobile"><br><br>
  </td></tr>
  <tr><td><
  
  <tr><td></td><td><input type="submit" value="delete"></td></tr>
    </table>
</div>
    </div>
           </body>
           </html>