<!DOCTYPE html

    PUBLIC "-//W3c//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/199/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Klinik ajwa</title>
    
</head>

<body>

<?php
   
include ("header.php");?>
<?php




if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
 $error = array (); 


if (empty($_POST ['FirstName_P' ])){
$error[] = 'You forgot to enter your first Name.';
}
else {
$n = mysqli_real_escape_string ($connect, trim ($_POST ['FirstName_P']));
}



 
if (empty ($_POST[ 'LastName_P'])){
    $error [] = 'You forgot to enter your last name.';
}

else {
     $l = mysqli_real_escape_string ($connect, trim ($_POST ['LastName_P']));
 }
    


if (empty($_POST['InsuranceNumber'])){
    $error [] = 'You forgot to enter your Insurance Number.';
    
}
    
else {
        $i = mysqli_real_escape_string ($connect, trim ($_POST ['InsuranceNumber' ]));
    
}

if (empty($_POST[ 'Diagnose' ])){
    $error [] = 'You forgot to enter your diagnose.';
 }
   
else {
        $d = mysqli_real_escape_string ($connect, trim ($_POST ['Diagnose']));
}


$q = "Insert INTO pesakit (ID_P, FirstName_P, LastName_P, InsuranceNumber,Diagnose)
VALUES (null,'$n', '$l', '$i', '$d')";
$result = @mysqli_query ($connect, $q); 

if ($result){
echo '<h1>thank you</h1>';
exit();
} 



 else{ 

echo '<h1>System error</hi>';


echo '<p>'.mysqli_error($connect). '<br><br>Query: ' .$q. '</p>';
}

mysqli_close($connect);
exit();
}


?>
    <h2> Register </h2>
    <h4> *required field</h4>

    <form action="register.php" method="post">

    <p><label class="label" for="FirstName_P"> First Name : *</label>
    <input id="FirstName_P" type="text" name="FirstName_P" size="30" maxlength="150"
    value="<?php if (isset ($_POST['FirstName_P' ])) echo $_POST ['FirstName_P'];?> " /></p>

    <p><label class="label" for="LastName_P"> Last Name : *</label>
    <input id="LastName_P" type="text" name="LastName_P" size="30" maxlength="60"
    value="<?php if (isset($_POST[ 'LastName_P'])) echo $_POST ['LastName_P']; ?> " /></p>

    <p><label class="label" for="InsuranceNumber"> Insurance Number : * </label>
    <input id="Insurance Number" type="text" name="InsuranceNumber" size="12" maxlength="12"
    value="<?php if (isset ($POST[ 'InsuranceNumber' ])) echo $_POST ['InsuranceNumber']; ?> " /></p>

    <p><label class="label" for="Diagnose"> Diagnose : </label></p>
    <textarea name="Diagnose" rows="5" cols="40"> <?php if (isset ($_POST[ 'Diagnose' ])) 
    echo $_POST ['Diagnose']; ?></textarea>

    <p><input id="submit" type="submit" names="submit" value="Register" /> &nbsp;&nbsp;
    <input id="reset" type="reset" name="reset" value="Clear All" />
    </p>

    </form>
    <br />
    <br />
    <br />
</body>

</html>