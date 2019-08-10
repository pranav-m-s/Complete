<?php

$con = mysqli_connect("localhost", "root", "", "internship");

$query  = "SELECT * FROM questions"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
$ansresult;

echo "<table>"; // start a table tag in the HTML

while ($row = mysql_fetch_array($result)) {
    echo "<tr><td>" . $row['question'] . "</td></tr>"; //$row['index'] the index here is a field name
    $query     = "SELECT * FROM answers where question_id =" . $row['question_id'] . ";";
    $ansresult = mysql_query($query);
    echo "<textarea readonly> ";
    while ($ansrow = mysql_fetch_array($ansresult)) {
        echo "<p >" . $ansrow['answer'] . "</p>";
    }
    echo "</textarea>";
    echo "</br>"
    echo "<input OnClick='insertjs($row['question_id'])' > </input>"
}
echo "</table>"; //Close the table in HTML
mysql_close();
?>