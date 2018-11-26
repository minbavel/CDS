
<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>

</head>
<body>
<?php 	$page_title = 'Register form';	?>

<!----  <body> is already into the header file  -- -->
<h2>Register Form </h2><hr/>
    

  <form action="#" method="post">
    <h3>Signup here</h3>
	
          <div class="form-item">
		<input type="varchar" name="user_id" required="required" placeholder="user_id" autofocus required></input>
    </div>
    <div class="form-item">
		<input type="varchar" name="username" required="required" placeholder="username" autofocus required></input>
    </div>
        
    <div class="form-item">
		<input type="varchar" name="password" required="required" placeholder="password" required></input>
    </div>
    
    <div class="form-item">
		<input type="varchar" name="name" required="required" placeholder="name" autofocus required></input>
    </div>
    <div class="form-item">
		<input type="varchar" name="LicenseType" required="required" placeholder="LicenseType" autofocus required></input>
    </div>
<div class="form-item">
		<input type="text" name="Breed" required="required" placeholder="Breed" autofocus required></input>
    </div>
<div class="form-item">
		<input type="text" name="Color" required="required" placeholder="Color" autofocus required></input>
</div>
    
<div class="form-item">
		<input type="datetime" name="DOB" required="required" placeholder="DOB" autofocus required></input>
</div>
<div class="form-item">
		<input type="int" name="Contact" required="required" placeholder="Contact" autofocus required></input>
</div>
<div class="form-item">
		<input type="varchar" name="Email" required="required" placeholder="Email" autofocus required></input>
</div>
<div class="form-item">
		<input type="datetime" name="VaccinationDate" required="required" placeholder="VaccinationDate" autofocus required></input>
</div>
    <div class="button-panel">
		<input type="submit" class="button" title="Submit" name="Submit" value="Submit"></input>
<?php
if (isset($_POST['Submit']))
		{
	$user_id = mysqli_real_escape_string($con, $_POST['user_id']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
    $LicenseType = mysqli_real_escape_string($con, $_POST['LicenseType']);
    $Breed = mysqli_real_escape_string($con, $_POST['Breed']);
    $Color = mysqli_real_escape_string($con, $_POST['Color']);	
    $DOB = mysqli_real_escape_string($con, $_POST['DOB']);
	$Contact = mysqli_real_escape_string($con, $_POST['Contact']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
	$VaccinationDate = mysqli_real_escape_string($con, $_POST['VaccinationDate']);
    
			 $sql= ("INSERT INTO `users`(`user_id`, `username`, `password`, `name`, `LicenseType`, `Breed`, `Color`, `DOB`, `Contact`, `Email`, `VaccinationDate`) VALUES (('$user_id', '$username', '$password', '$name', '$LicenseType', '$Breed', '$Color', '$DOB', '$Contact', '$Email', '$VaccinationDate'))");
			$query= mysqli_query($con, $sql);
            
        if($query){
            echo ("User Created Successfully.");
        }else{
            echo ("User Registration Failed");
        }
    mysqli_close($con);
}
?>
    </div>
  </form>