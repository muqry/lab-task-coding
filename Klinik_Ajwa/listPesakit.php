<html>
<head>
<meta http-equiv = "Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type= "text/css" href="includes.css"/>
</head>

<body>

<?php include ("header.php");?>

<?php
$q = "SELECT ID_P, FirstName_P, LastName_P, InsuranceNumber, Diagnose FROM pesakit
ORDER BY ID_P";

$result = @mysqli_query ($connect, $q);

if($result){

    echo '<table border="2">
    <tr><td><b>edit</b></td>
    <td><b>Delete</b></td>
    <td><b>ID pesakit</b></td>
    <td><b>First Name</b></td>
    <td><b>Last Name</b></td>
    <td><b>InsuranceNumber</b></td>
    <td><b>Diagnose</b></td> </tr>';
    
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo '<tr>
        <td><a href = "edit_pesakit.php? id='.$row['ID_P'].'">Edit</a></td>
        
        <td><a href = "delete_pesakit.php? id='.$row['ID_P'].'">Delete</a></td>
        

        <td>'.$row['ID_P']. '</td>
        <td>'.$row['FirstName_P']. '</td>
        <td>'.$row['LastName_P']. '</td>
        <td>'.$row['InsuranceNumber']. '</td>
        <td>'.$row['Diagnose']. '</td>
        </tr>';

    }

    echo '</table>';

    mysqli_free_result ($result);

} else {

    echo '<p class = "error"> The current patient could not be retrieved. 
    We apologized for any inconvenience.</p>';

    echo '<p>' .mysqli_error($connect). '<br><br/>Query: '.$q.' </p>';
}

//mqsqli_close($connect);
?>

</div>
</div>
</body>
</html>






