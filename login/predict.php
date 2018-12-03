<?php include("includes/a_config.php");?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>



	<h2>Disease Prediction</h2>
	<p>Give us the list of symtoms your dog might have (select atleast 2 or 3 symptoms)</p>
    
<form action="" method="POST">
    
	<select name="select_name[]" id="" multiple>
	  <option value="">Select...</option>
	  <option value="1">Fever</option>
	  <option value="2">Aggression</option>
       <option value="3">Restlessness</option>
	  <option value="4">Weight Loss</option>
        <option value="5">Increased Urination</option>
	  <option value="6">Lethargy</option>
        <option value="7">Odors</option>
	  <option value="8">Vomiting</option>
         <option value="9">Diarrhea</option>
         <option value="10">swelling</option>
        	  <option value="11">Redness</option>
        <option value="13">Lumps</option>
         <option value="12">Drinage from wound</option>
	</select>
	<input type="submit" value="submit" id="submit_button">
</form>
    
<?php


if(isset($_POST['select_name'])){ // select_name will be replaced with your input filed name
	$getInput = $_POST['select_name']; // select_name will be replaced with your input filed name
	$selectedOption = "";
	foreach ($getInput as $option => $value) {
		$selectedOption .= $value.','; // I am separating Values with a comma (,) so that I can extract data using explode()
	}
	echo $selectedOption; 
	
	$arrayselect= explode(",",$selectedOption);
	
	if(in_array('1',$arrayselect) && in_array('2',$arrayselect) && in_array('3',$arrayselect))
	{
		header("location:rabies.php");
	}
    
    	if(in_array('4',$arrayselect) && in_array('5',$arrayselect) && in_array('6',$arrayselect))
	{
		header("location:diabetes.php");
	}
    if(in_array('4',$arrayselect) && in_array('7',$arrayselect) && in_array('13',$arrayselect))
	{
		header("location:cancer.php");
	}
    if(in_array('8',$arrayselect) && in_array('9',$arrayselect))
	{
		header("location:foodpoison.php");
	}


}
?>
            
      
  <!-- <
  script type="text/javascript">
    $(document).ready(function(){

      var dropDownValue = $('#symptom').val();
      $('#submit_button').click(function () {
      if($('#symptom1').val() == "1"){
        window.location="rabies.php";
      }
      }
      if($('#symptom').val() == ""){
        return false;
      }

  });
    });
</script>-->
    
    
    
    
    
</div>

<?php include("includes/footer.php");?>

</body>
</html>
