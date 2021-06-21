<?php
if ($dbc = @mysqli_connect ('localhost', 'root', ''))
{
if (!@mysqli_select_db ($dbc, 'robot_arm')) {
die ('<p>Could not select the database because: <b>' . mysqli_error($dbc) . '</b></p>');
}
}
//On=1
$query = "UPDATE arm SET power= 1 WHERE id=(SELECT MAX(id) FROM arm)";
$r = mysqli_query ($dbc, $query); // Execute the query.

//display last data saved
$query = "SELECT * FROM arm WHERE id=(SELECT MAX(id) FROM arm)";
if ($r = mysqli_query ($dbc, $query)) {
while ($row = mysqli_fetch_array ($r)) {
print "<p><h3>{$row['motor1']} {$row['motor2']} {$row['motor3']} {$row['motor4']} {$row['motor5']}</h3></p>";}}
else {
die ('<p>Could not retrieve the data because: <b>' . mysqli_error($dbc) . "</b>. The query was $query.</p>");}

mysqli_close($dbc);
?>
