<!DOCTYPE html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css"> 
    /* Add a black background color to the top navigation */
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
      background-style:#4CAF50;
      background-color:gray;

    }

    .b{
      
      margin-left:300px;
      margin-top:500px;
      font-size:200%;
      margin:300px, 400px;
    }
   .second{
    margin-top: 400px;
    margin-left: 400px;
    border:2px solid black;
    border-radius:5px;}
     /* box-sizing: border-box; */
table{border: 1px solid red;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

$(document).ready(function(){
  $(".search").click(function(){
    $(".second").toggle();
  })
</script>

   
  
    <tittle><b></tittle></b>
    
</head>
<body class="a" img src="flower1.jpeg;">
<div class="topnav">
  <a class="active" href="#home">HOME</a>
  <a href="http://reg.test/serial/create">FIRSTTIME</a>
  <a href="http://reg.test/serial/edit">UPDATE&DELETE</a>
  <a href="#about">ABOUT</a>
</div>
<div class="b" style="margin-top:150px;margin-left:500px;">

<form method="get" action=" {{url('/serial/search')}}">
 <input type="search" name="regno" placeholder="Search.." style="border-radius:12px;height:25px;width:200px;">
 <button class="search" style="height:30px;width:100px;background-color:green">SEARCH</button>
  </form>
</div>

      <div class="second" style="margin-left:100px; margin-top:200px;
      border-radius:6px;width:500px;height:300px;">
      @forelse($students AS $student)
<table>
  
  <tr><td>
  <label for="sid">STUDENTID:</label>
  </td><td>
  <label for ="SID">{{$student->studentid }}</label> 
  </td></tr>
  <tr><td>
  <label for="fname">FULLNAME:</label>
  </td><td>
  <label for="FNAME" > {{$student->fullname }}</label>
  </td></tr>
  <tr><td>

    <label for="nid">NATIONALID:</label>
    </td><td>
   <label for="ND"> {{$student->nationalid }}</label>
  </td><tr>
  <tr><td>
  <label for="sn">MACHINE SERIALNUMBER:</label>
  </td><td>
 <label for="MSN"> {{$student->serialnumber }}</label>
  </td></tr>
  <tr><td>
  <label for="md">MACHINEMODEL</label>
  </td><td>
  <label for="MD">{{$student->modelname }}</label>
  </td></tr>

  <tr><td>
  <label for="md">MOBILENUMBER</label>
  </td><td>
  <label for="MN">{{$student->mobile }}</label>
  </td></tr>
  </table>
  @empty
  <script type="text/javascript">alert("user not found");</script>
  
@endforelse
  
  
           </div>
</body>
</html>    