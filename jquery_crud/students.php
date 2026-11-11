<?php 
$db = new mysqli("localhost", "root", "", "jquery_crud");
$raw = $db->query("SELECT * FROM students");
$table = "<table border = '1' cellpadding = '10'>
<tr>
<th>Name</th>
<th>Address</th>
<th>Action</th>
</tr>";
$rows = "";
while($record = $raw->fetch_assoc()){
    $rows .= "<tr><td>" .$record['name'] . 
    "</td><td>" .$record['address'] . "</td>
    <td>EDIT | <button id=" .$record['id'] . " class='btnDel'>DELETE</button></td></tr>" ;
}
$table .= $rows;
$table .= "</table>";
echo $table;
?>
