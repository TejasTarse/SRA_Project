<html>
<head>   
<style>
h1
{
  color:hotpink;
  width:570px; 
  height:50px;
  padding:5px;
  font-family:comic sans ms;
  /* #background:lightblue;
  border:2px soloid blue;
  border-top-right-radius:20px;
  border-bottom-left-radius:20px; 
  text-align:center;
  box-shadow:4px 4px 4px 5px grey;   
  margin-top:30px;  
  #background:linear-gradient(75deg,orange,lightyellow,orange); */
}
#login
{
  height:190px;
  width:430px;
  border:2px solid hotpink;
  background:linear-gradient(90deg,#dad299,#e6dada,#a8caba);
  border-radius:15px;
  text-align:center;
  posotion:absolute;
  margin-left:#px;
  margin-top:100px; 
  font-size:27px;
  color:linear-gradient(100deg,lightblue,lightgreen,red);
  padding:10px;
  box-shadow:3px 4px 4px 4px grey; 
} 
#login:hover 
{
  box-shadow:4px 4px 4px 5px black; 

}
label
{
  padding:5px;
  display:block;
}
#data
{
  height:570px;
  width:430px;
  border:2px solid pink;
  background:linear-gradient(90deg,lightblue,lightgrey,lightblue);
  border-radius:15px;
  text-align:left;
  font-size:17px;
  color:darkred;
  margin-top:50px;
  padding:10px;
} 
body 
{
  background:linear-gradient(#dad299,#ddd6f3,#faaca8,#a8caba);
}
button
{
  font-size:23px;
  margin-top:-10px;
  width:100px;

} 
button:hover
{
 border-radius:4px; 
 background:grey;
}


input
{
  border-radius:7px; 
  font-size:15px;
}
 
#star
{
  height:80vh;
  width:100%
  background-repeat:no-repeat;
  background-size:cover;
}
#p
{ 
   position:relative;
   font-size:40px;
   margin-top:150px;
   margin-left:50px;
   color:black;
   width:800; 
}
</style>
</head>
<body>
<center><h1><marquee behavior="alternate" direction="">SRA&nbsp;&nbsp;LOGIN</marquee></h1></center>
<form action="check_login.php" method="POST">

<center><div id="login">
<label>USERNAME:-<br>
<input type="text" placeholder="Enter your username" maxlength="10"
     required id="username" name="username"><br>
     </label>     
<label>PASSWORD:-<br><input type="password" placeholder="Enter your password"
      maxlength="10" required name="password" id="password"><br></label>
<br><center><button type="submit">LOG IN</button></center>
</center>

</body>
</html> 