<?php
$link = @mysqli_connect(
    'localhost',
    'root',
    '',
    'school'
);

// if(!@mysqli_select_db($link, 'school'))
//     die("Can't open the database!<br>");
// else
//     echo "Open sucessful!<br>";

$sql = "SELECT * FROM info";
mysqli_set_charset($link, 'utf8');
if($result = mysqli_query($link, $sql)){
    echo "<table border='1'>";

    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["no"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["birthday"]."</td>"."<br>";
        echo "</tr>";
    }
}
?>