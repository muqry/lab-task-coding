<!DOCTYPE html PUBLIC "-//W3c//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/199/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Klinik Ajwa</title>
</head>

<body>
<?php
    include ("header.php");

?>
<form action="recordfound_pesakit.php" method="post">

<h1>Seach record patient</h1>
<p><label class="label" for ="InsuranceNumber">Insurance Number:</label>
<input id="InsuranceNumber" type="text" name="insuranceNumber" size="30" maxlength="30"
value="<?php if(isset($_POST['InsuranceNumber'])) echo $_POST['InsuranceNumber'];?>"/></p>

<p><input id ="submit" type="submit" name="submit" value="search"/><p>

</form>
</body>
</html>