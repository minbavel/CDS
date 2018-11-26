<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container" id="main-content">
	    <if (symptom1== "1" && symptom2=="2" && symptom3=="3") { ?>
<form method="get" action="rabies.php"}>
  <else if (symptom2 == "4") { ?>
  <form method="get" action="diabetes.php"}>
    

<?php include("includes/footer.php");?>

</body>
</html>