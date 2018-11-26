
<?php include('dbcon.php'); ?>
<?php 
session_start();

$query = "SELECT user_id, username, name, LicenseType, Breed FROM users WHERE username = '".$_SESSION['username']."'";
if($result = $mysqli->query($query))
{
    while($row = $result->fetch_assoc())
    {
        echo "<div align=\"center\">";
        echo "<br />Your <b><i>Profile</i></b> is as follows:<br />";
        echo "<b>user_id:</b> ". $row['user_id'];
        echo "<br /><b>username:</b> ".$row['username'];
        echo "<br /><b>name:</b> ".$row['name'];
        echo "<br /><b>LicenseType:</b> ".$row['LicenseType'];
        echo "<br /><b>Breed:</b> ".$row['Breed'];
        echo "</div>"; 
    }
    $result->free();
}
else
{
    echo "No results found";
}
?>