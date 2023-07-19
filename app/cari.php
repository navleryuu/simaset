<?php
include('../conf/config.php');

if(isset($_POST['cari'])){
  $aset   = cari($_POST['search']);
  
}
?>
