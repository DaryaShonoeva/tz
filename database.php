<?php
$name=$_POST['name'];
$price=$_POST['price'];
$sku=$_POST['sku'];
$switch=$_POST['switch'];
$size=$_POST['size'];
$weight=$_POST['weight'];
$h=$_POST['h'];
$w=$_POST['w'];
$l=$_POST['l'];
$switch=$_POST['toggle-forms'];

$link= mysqli_connect('localhost','id15772859_root','T(C3>{anw?2j&C<I','id15772859_progecct');
if(mysqli_connect_errno())
{
  echo 'Error ('.mysqli_connect_errno().')'.mysqli_connect_error();
  exit();
}
switch ($switch){
  case 1: $sql = "INSERT INTO dvd (SKU, Name, Price, Size) VALUES ('$sku', '$name', '$price', '$size')";
  break;

  case 2: $sql = "INSERT INTO book (SKU, Name, Price, Weight) VALUES ('$sku', '$name', '$price', '$weight')";
  break;

  case 3: $sql = "INSERT INTO Furniture (SKU, Name, Price, H, W, L) VALUES ('$sku', '$name', '$price', '$h', '$w', '$l')";
  break;
}

if ($link->query($sql) === TRUE)
{
  header ('Location: index.php');
  exit();
}
else {
  echo "Error: " . $sql . "<br>" . $link->error;
}


?>
