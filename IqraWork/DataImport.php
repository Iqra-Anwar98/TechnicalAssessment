<html>
<body>
<table>
<tr>
<th>Car_Registration</th>
<th>Make</th>
<th>Model</th>
<th>Colour</th>
<th>Fuel</th>
</tr>

<?php // First Try
$conn = new mysqli("localhost", "root", "", "ods_db") or die("Cannot Connect");
$sql = "SELECT * FROM technical_test_data";
$result = $conn->query($sql);

if($result->num_rows >0){

    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>" . $row["Car_Registration"] . "</td><td>" . $row["Make"] . "</td><td>" . $row["Model"] . "</td><td>" . $row["Colour"] . "</td><td>" . $row["Fuel"] . "</td></tr>";
    }
}
else {

    echo "No Results";
}

$conn->close();
?>
</table>

</body>
</html>