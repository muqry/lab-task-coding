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

if (empty($_POST ['FirstName' ])){
$error[] = 'You forgot to enter your first Name.';
}
else {
    $n = mysqli_real_escape_string ($connect, trim ($_POST ['FirstName']));
}


if (empty ($_POST[ 'LastName'])){
$error [] = 'You forgot to enter your last name.';
}

else {
$l = mysqli_real_escape_string ($connect, trim ($_POST ['LastName']));
}


if (empty($_POST['Specialization'])){
$error [] = 'You forgot to enter your specialization.';
    
}
else {
$s = mysqli_real_escape_string ($connect, trim ($_POST ['Specialization' ]));
}

   
if (empty($_POST[ 'Password' ])){
$error [] = 'You forgot to enter your password.';
}
else {
$p = mysqli_real_escape_string ($connect, trim ($_POST ['Password']));
}


$q = "Insert INTO doktor (ID,FirstName, LastName,Specialization,Password)

VALUES (null,'$n','$l','$s','$p')";

$result = @mysqli_query ($connect, $q);

if ($result){
echo '<h1>thank you</hl>';
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
<h2> Register Doktor </h2>
<h4> *required field</h4>

<form action="registerDoktor.php" method="post">

<p><label class="label" for="FirstName"> First Name : *</label>
<input id="FirstName_P" type="text" name="FirstName" size="30" maxlength="150"
value="<?php if (isset ($_POST['FirstName' ])) echo $_POST ['FirstName'];?> " /></p>

<p><label class="label" for="LastName"> Last Name : *</label>
 <input id="LastName" type="text" name="LastName" size="30" maxlength="60"
value="<?php if (isset($_POST[ 'LastName'])) echo $_POST ['LastName']; ?> " /></p>

 <p><label class="label" for="Specialization"> Specialization : * </label>
 <input id="Specialization" type="text" name="Specialization" size="12" maxlength="12"
value="<?php if (isset ($POST[ 'Specialization' ])) echo $_POST ['Specialization']; ?> " /></p>

<p><label class="label" for="Password"> Password : </label></p>
 <input id="Password" type="password" name="Password" size="12" maxlength="12"
value="<?php if (isset ($POST[ 'Password' ])) echo $_POST ['Password']; ?> " /></p>

<p><input id="submit" type="submit" names="submit" value="Register" /> &nbsp;&nbsp;
<input id="reset" type="reset" name="reset" value="Clear All" />

    </p>
    </form>
    <p>
    <br />
    <br />
    <br />
</body>
</html>