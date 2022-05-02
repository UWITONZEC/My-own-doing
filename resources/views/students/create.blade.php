<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
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

   .a{
      background-style:yellow;
      background-color:brown;

    }
    
    .b{
      border-radius: 100px;
  background-color: lightcyan;
  padding-left: 150px;
  margin-top:100px;
  margin-right: 100px;
  margin-left:100px;
      
    }
    input[type=text]{
      width: 70%;
 height:50px;
  padding-left:40px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius:2px;
  box-sizing: border-box;
    }
    input[type=submit] {
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  /* margin: 8px 0; */
  margin-left:20%;
  border: none;
  margin-top:20px;
  border-radius: 4px;
  cursor: pointer;}
  


  </style>
    <title>dfghjk</title>
    
</head>
<body>
  <div class="topnav">
  <a class="active" href="#home">HOME</a>
  <a href="http://reg.test/serial/create">FIRSTTIME</a>
  <a href="http://reg.test/serial/edit">UPDATE&DELETE</a>
  <a href="#about">ABOUT</a>
</div>

<form action="{{ url('/serial/store') }}" method="POST">
{!! csrf_field() !!}
   <div class="b">
  <label for="sid">ENTER STUDENTID:</label><br>
  <input type="text" id="SID" name="studentid"><br>
  <label for="fname">ENTER FULLNAME:</label><br>
  <input type="text" id="Fname" name="fullname"><br>
  <label for="nid">ENTER NATIONALID:</label><br>
  <input type="text" id="NID" name="nationalid"><br>
  <label for="sn">ENTER MACHINE SERIALNUMBER:</label><br>
  <input type="text" id="MS" name="serialnumber"><br>
  <label for="md">ENTER MACHINEMODEL</label><br>
  <input type="text" id ="MD" name ="modelname"><br>
  <label for="md">ENTER MOBILENUMBER</label><br>
  <input type="text" id ="MD" name ="mobile"><br>
  <input type ="submit" id="BTN" name ="SAVE">

  </div>
</form>
@if(Session::get('added'))
  <div style="background-color:yellow;height: 15px;">{{Session::get('added')}}</div>
  @endif
</body>
</html> 