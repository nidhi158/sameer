<html>
	<head>
		<title>Try2</title>
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body bgcolor="powderblue">
		<h1><center>Students having marks greater than "X"</h1></center>
		<font size="5px" color="red"><a href="index.html">Back<<</a></h2></font>
			<div class="nav">
				<form method="post" action="grater.php">
					<font size="6px" color="blue">Enter marks:<input type="text" name="marks"  style="padding-top: 8px;
					width: 300px;   border: 3px solid #bbb;"  required ></font><br><br>
					<input type="SUBMIT" name="submit" value="SUBMIT" style="padding-top: 8px;width: 200px;
					background-color:  #EFC050;
					padding-bottom:10px; font-size: 18px; ">
					
				</form>
			</div>
			<?php
			    error_reporting(0);
				$con=MySQLi_connect("localhost","root",""); 
				
				MySQLi_select_db($con,"krishworks");
				if(isset($_POST['submit'])) 
				{
					$marks=$_POST['marks'];
					$query="select Student_name from student where Total_Marks>'$marks'";
					$res=MySQLi_query($con,$query);
					while($row=MySQLi_fetch_array($res))
					{
					    $name1=$row[0];
						echo "<h2><center> $name1</center></h2>";
						
					}
					
				}
			?>
	</body>
</html>	