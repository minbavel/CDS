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
	<p>Give us the list of symtoms your dog might have</p>
    <p>
<form name="symptom"  method="get" action="rabies.php">
	Enter Symptom 1
	<select name="symptom1">
	  <option value="">Select...</option>
	  <option value="Fever">Fever</option>
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
         <option value="12">Drinage from wound</option>
         <option value="">N/A</option>
	</select>
	</p>
     <p>

	Enter Symptom 2
	<select name="symptom2">
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
         <option value="12">Drinage from wound</option>
         <option value="">N/A</option>
	</select>
	</p>

<input type="submit" value="submit" id="submit_button">
	</form>
    
<?php
if ('symptom1' === 'Fever')
    echo "Rabies"
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