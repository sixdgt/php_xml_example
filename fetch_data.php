<?php
// database connection
$connect = new mysqli("localhost", "sixdgt", "1234", "php_xml_example");

if($connect->connect_error){
    die("Error: {$connect->connect_error}");
} else {
    // building sql query
    $sql = "SELECT * FROM kyc";
    $result = $connect->query($sql);

    // $data = array();
    // if(mysqli_num_rows($result) > 0){
    //     while($row = mysqli_fetch_array($result)){
    //         $data[] = array(
    //             'full_name' => $row['full_name'],
    //             'email' => $row['email'],
    //             'address' => $row['address'],
    //             'contact' => $row['contact'],
    //         );
    //     }
    // }

//     echo "<table>
// <tr>
// <th>Full Name</th>
// <th>Email</th>
// <th>Contact</th>
// <th>Address</th>
// </tr>";
$counter = 1;
while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td>" . $counter . "</td>";
echo "<td>" . $row['full_name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
$counter = $counter + 1;
}
// echo "</table>";

    // encoding php associative array to json
    // echo json_encode($data);
}