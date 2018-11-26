<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/php-template/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			break;
        case "/php-template/predict.php":
			$CURRENT_PAGE = "Predict"; 
			$PAGE_TITLE = "Disease Prediction";
			break;
        case "/php-template/test2.php":
			$CURRENT_PAGE = "Profile"; 
			$PAGE_TITLE = "Profile";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
	}
?>