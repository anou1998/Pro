<html>

<head>

<title>Online Flight Booking System</title>

<link rel="stylesheet" href="style.css">
</head>

<body bgcolor="blue">	
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: orange;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: Indigo;
}
</style>
</head>

<body>
<br>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="https://www.ndtv.com/topic/air-india-flight">News</a></li>
  <li><a href="Airlines.html">Shedule</a></li>
  <li style="float:right"><a class="active" href="a12.html">About</a></li>
  <li style="float:right"><a href="logincustomer.php">Login/Register </a></li>
	
</ul>
</head>
</style>


<center>
	<h1><b><i><font color="orange"><font size="30"><center><marquee>Online Flight Booking </marquee></center></font size></font></i></b>
	</center>
	<div class="rr">
	
<center>
				
<table border=0>
			
<tr>
				
<td colspan=2 width=100>From:<br><input type="text" placeholder="Type Departure City" class="in" name="departure" required/></td>
				
				
<td colspan=2 width=100>To:<br><input type="text" placeholder="Type Destination City" class="in" name="destination" required/></td>
			
</tr>
			
<tr>			
<td >Date:<br><input type="date" placeholder="dd/mm/yy" class="in" name="date" required/></td>

<td width=6px></td>

<td>Class:<br>
					
<select class="in3" name="class" required/>
						
<option value="economy">Economy</option>
						
<option value="business">Business</option>
						
<option value="firstclass">First Class</option>
					
</select>
				
</td>
			
</tr>
			
<tr>
				
<td height=20></td>
			
</tr>
			
			
<td width=10px></td>
				<td></td>
			</tr>
			
<tr>
<td height=20></td>
			</tr>
			
<tr>
<td><input name="submit" type="submit" value="Search Flights" style="cursor:pointer;border:0px;padding:7px 19px 7px 19px;background-color:#de2a1d;color:#fff;">  <input type="reset"style="cursor:pointer;border:0px;padding:7px 19px 7px 19px;background-color:#de2a1d;color:#fff;"></td>

<td></td>
<td width=10px></td>
<td></td>
</tr>
</table>
		
</form>
		</center>
	</div>
	<br><br><br><br><br><br>
	<?php
	include 'footer.php';
	?>

</body>

</html>
