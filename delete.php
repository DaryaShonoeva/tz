<?php

$link= mysqli_connect('localhost','id15772859_root','T(C3>{anw?2j&C<I','id15772859_progecct');
if(mysqli_connect_errno())
{
  echo 'Error ('.mysqli_connect_errno().')'.mysqli_connect_error();
  exit();
}
if (!empty($_POST['delete'])) {
  $toDelete = $_POST['checkbox'];

  foreach ($toDelete as $deleteItem) {
    list($table, $skuId) = explode('_', $deleteItem);
?>
    <?php
    $result = mysqli_query($link, "DELETE FROM {$table} where SKU='{$skuId}'", MYSQLI_USE_RESULT);
    if ($result) {


    }
  }
}
 header("Location: index.php");
mysqli_close($link);
?>
