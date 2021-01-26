<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php  include 'lib/Database.php';?>
<?php
	$insert=false;
	if(isset($_POST['name'])){
	$server="localhost";
	$username="root";
	$password="";
	
	$con=mysqli_connect($server, $username, $password);
	if(!$con)
	{
		die("connection to this database failed....".mysqli_connect());
	}
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$id=$_POST['id'];
	$resume=$_POST['resume'];
	$sql="INSERT INTO `apply_job`.`apply_job` (`Name`, `Contact`, `Email`, `id`, `Resume`) VALUES ('$name', '$contact', '$email', '$id','$resume')";
	
	if($con->query($sql)==true)
	{
		// echo "Successfully Submitted!!!";
		$insert = true;
	}
	$con->close();
	}
?>
<html>
	<head>
		<body>
		
			 
			<form   method="post" style="font-size:20px" align="left" ><br><br>
				<p >Enter Name</p>
				<input  width="50" type="text" name="name" id="name" placeholder="Enter name" style="color:black" style="height:30px; width:500px"><br><br>
				<p >Email</p>
				<input type="email" name="email" id="email" placeholder="Email" style="color:black" style="height:30px; width:500px"><br><br>
				<p>Contact Number</p>
				<input type="number" name="contact" id="contact" placeholder="Contact" style="color:black" style="height:30px; width:500px"><br><br>
				<p>Job Id</p>
				<input type="number" name="id" id="id" placeholder="id" style="color:black" style="height:30px; width:500px"><br><br>
				<p>Upload CV/Resume (Only .pdf, doc, docx,
.jpg formats are allowed) [max.
file size 1 MB]</p>
				<input type="file" name="resume" id="resume"><br><br>
				<button class="btn"   style="color:black"><strong>Submit</strong></button>
				
				
			</form>
			<?php
			if($insert==true){
			echo "<p class='SubmitMsg'>Successfully Submitted!!</p>";
			}
			?>
		</body>
	</head>
</html>
<?php include 'includes/footer.php'; ?>