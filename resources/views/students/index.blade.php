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
    <tittle><b>FIND MACHINE</tittle></b>
    
</head>
<body class="a" img src="flower1.jpeg;">
<div class="topnav">
  <a class="active" href="#home">HOME</a>
  <a href="http://reg.test/serial/create">FIRSTTIME</a>
  <a href="http://reg.test/serial/edit">UPDATE&DELETE</a>
  <a href="#about">ABOUT</a>
</div>
<div class="b" style="margin-top:150px;margin-left:500px;">
@if(Session::get('fail')){
  <label>{{Session::get('fail')}}</label>}
  @endif

<form method="get" action=" {{url('/serial/search')}}">
 <input type="search" name="regno" placeholder="Search.." style="border-radius:12px;height:25px;width:200px;">
 <button  style="height:30px;width:100px;background-color:green">SEARCH</button>
  </form>
</div>

     
</body>
</html>    