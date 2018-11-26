<?php include('dbcon.php'); ?>

<?php
error_reporting(-1);
ini_set('display_errors', true);

#connect to database

$sql = ( "SELECT email FROM users WHERE VaccinationDate > STR_TO_DATE('%s','%%Y-%%m-%%d');"
  date('%%Y-%%m-%%d', strtotime('-365 days'))
);

$res = mysqli_query($con, $sql);

while($record = mysql_fetch_assoc($res)){
  mail(
    $record['email'],
    'Subject',
    'Yo dawg, I herd you like emails so we put an email in your email so you can mail as you mail'
  );
}


?>