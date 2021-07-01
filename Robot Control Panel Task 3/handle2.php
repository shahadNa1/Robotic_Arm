<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_arm";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM arm";
$result = $conn->query($sql);

if (isset($_POST["up"]))
{

    $sql = "UPDATE arm SET direction='u' WHERE id=(SELECT MAX(id) FROM arm)";

    if (mysqli_query($conn, $sql))
    {
        echo "u";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn);
    }
}


elseif(isset($_POST["left"]))
{

    $sql = "UPDATE arm SET direction='l' WHERE id=(SELECT MAX(id) FROM arm)";

    if (mysqli_query($conn, $sql))
    {
        echo "l";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn);
    }
}

elseif(isset($_POST["right"]))
{

    $sql = "UPDATE arm SET direction='r' WHERE id=(SELECT MAX(id) FROM arm)";

    if (mysqli_query($conn, $sql))
    {
        echo "r";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn);
    }
}

elseif(isset($_POST["down"]))
{

    $sql = "UPDATE arm SET direction='d' WHERE id=(SELECT MAX(id) FROM arm)";

    if (mysqli_query($conn, $sql))
    {
        echo "d";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn);
    }
}

else
{
    $sql = "UPDATE arm SET direction='s' WHERE id=(SELECT MAX(id) FROM arm)";

    if (mysqli_query($conn, $sql))
    {
        echo "s";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
