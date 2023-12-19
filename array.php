<?php
$Indian_Cricket = array("Sachin Tendulkar","MS Dhoni","Virat Kohli","Rohit Sharma","Yuvraj Singh","KL Rahul","Jasprit Bumrah","Hardik Pandya","Shreyas Iyer","Rishabh Pant");
echo "<table border=\"1\"><tr><th>Indian team</tr>";
foreach ($Indian_Cricket as $v) {
echo "<tr>";
echo "<td>$v</td>";
echo "</tr>";
}
echo "</tr></table>";
?>